import 'dotenv/config';
import path from 'path';
import { fileURLToPath } from 'url';
import express from 'express';
import dns from 'dns';

// Force Node.js to use IPv4 instead of IPv6 for DNS resolution
// This fixes the 'ENETUNREACH' error when connecting to SMTP servers
dns.setDefaultResultOrder('ipv4first');
import compression from 'compression';
import cors from 'cors';
import helmet from 'helmet';
import rateLimit from 'express-rate-limit';
import mailRoutes from './routes/mail.js';

const app = express();
app.set('trust proxy', 1);
const PORT = process.env.PORT || 3001;

// ============================================
// Gzip compression (Compresses response bodies for all requests)
app.use(compression());

// ============================================
// Security Middleware
// ============================================

// Helmet — HTTP security headers (CSP, HSTS, X-Frame-Options, etc.)
app.use(helmet());

// CORS — Restrict to allowed origins to prevent distributed CSRF spam
app.use(cors({
  origin: [
    'http://87.76.191.18',
    'http://87.76.191.18:80',
    'http://localhost:5173',
    process.env.CORS_ORIGIN
  ].filter(Boolean),
  methods: ['GET', 'POST'],
  allowedHeaders: ['Content-Type'],
}));

// Body parser with size limit (prevent payload attacks)
app.use(express.json({ limit: '100kb' }));
app.use(express.urlencoded({ extended: false, limit: '100kb' }));

// ============================================
// Rate Limiting
// ============================================

// General API rate limit
const generalLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutes
  max: 100,
  message: { success: false, message: 'Too many requests. Please try again later.' },
  standardHeaders: true,
  legacyHeaders: false,
});

// Strict rate limit for mail endpoints
const mailLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutes
  max: 5, // 5 submissions per 15 min per IP
  message: { success: false, message: 'Too many submissions. Please wait 15 minutes before trying again.' },
  standardHeaders: true,
  legacyHeaders: false,
});

// Rate limit for brochure downloads to prevent abuse
const brochureLimiter = rateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutes
  max: 10, // 10 downloads per 15 min per IP
  message: { success: false, message: 'Too many download attempts. Please try again after 15 minutes.' },
  standardHeaders: true,
  legacyHeaders: false,
});

app.use('/api', generalLimiter);
app.use('/api/contact', mailLimiter);
app.use('/api/career', mailLimiter);
app.use('/api/campus', mailLimiter);

// ============================================
// Routes
// ============================================
app.use('/api', mailRoutes);

// Download brochure route with rate limiter
app.get('/api/download-brochure', brochureLimiter, (req, res) => {
  const brochurePath = path.join(__dirname, '../public/SSE-Workforce-Brochure.pdf');
  res.download(brochurePath, 'SSE-Workforce-Brochure.pdf', (err) => {
    if (err) {
      console.error('Failed to download brochure:', err.message);
      if (!res.headersSent) {
        res.status(500).json({ success: false, message: 'Could not download brochure at this time.' });
      }
    }
  });
});

// Health check
app.get('/api/health', (req, res) => {
  res.json({ status: 'ok', timestamp: new Date().toISOString() });
});

// ============================================
// Serve Frontend & Static Assets with Expires Headers
// ============================================
const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Serve the compiled React application (dist folder)
// The maxAge option sets both Cache-Control: public, max-age=... and the Expires header
app.use(
  express.static(path.join(__dirname, '../dist'), {
    maxAge: '1y', // Cache static assets (JS, CSS, Images) for 1 year
    setHeaders: (res, path) => {
      // Add explicit Expires header for older clients
      const expiresDate = new Date();
      expiresDate.setFullYear(expiresDate.getFullYear() + 1);
      res.setHeader('Expires', expiresDate.toUTCString());

      // Do not cache the HTML file itself, so users always get the latest version pointing to new hashed assets
      if (path.endsWith('.html')) {
        res.setHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
        res.setHeader('Pragma', 'no-cache');
        res.setHeader('Expires', '0');
      }
    },
  })
);

// React Router Catch-All: Serve index.html for any non-API route
app.get('/{*splat}', (req, res, next) => {
  if (req.path.startsWith('/api')) {
    return next();
  }
  res.sendFile(path.join(__dirname, '../dist/index.html'), {
    headers: {
      'Cache-Control': 'no-cache, no-store, must-revalidate',
      'Pragma': 'no-cache',
      'Expires': '0',
    }
  });
});

// ============================================
// Error Handler
// ============================================
app.use((err, req, res, next) => {
  console.error('Server Error:', err.message);
  res.status(500).json({ success: false, message: 'Internal server error.' });
});

// ============================================
// Start Server
// ============================================
app.listen(PORT, () => {
  console.log(`✅ SSE Workforce API Server running on http://localhost:${PORT}`);
  console.log(`📧 Mail configured: ${process.env.MAIL_HOST || 'NOT SET'}`);
});
