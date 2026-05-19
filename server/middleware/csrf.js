import crypto from 'crypto';

// In-memory token store (for production, use Redis or sessions)
const tokens = new Map();

// Clean up expired tokens every 15 minutes
setInterval(() => {
  const now = Date.now();
  for (const [token, data] of tokens.entries()) {
    if (now - data.created > 15 * 60 * 1000) {
      tokens.delete(token);
    }
  }
}, 15 * 60 * 1000);

/**
 * Generate a CSRF token and attach it to the response
 */
export function generateCsrfToken(req, res, next) {
  const token = crypto.randomBytes(32).toString('hex');
  tokens.set(token, { created: Date.now() });
  res.locals.csrfToken = token;
  next();
}

/**
 * Validate the CSRF token from the request body or header
 */
export function validateCsrfToken(req, res, next) {
  const token = req.body._csrf || req.headers['x-csrf-token'];

  if (!token || !tokens.has(token)) {
    return res.status(403).json({
      success: false,
      message: 'Invalid or missing CSRF token. Please refresh the page and try again.',
    });
  }

  // Token is single-use
  tokens.delete(token);
  next();
}
