import 'dotenv/config';
import express from 'express';
import cors from 'cors';
import helmet from 'helmet';
import rateLimit from 'express-rate-limit';
import mailRoutes from './routes/mail.js';
import { generateCsrfToken } from './middleware/csrf.js';

const app = express();
const PORT = process.env.PORT || 3001;

// ============================================
// Security Middleware
// ============================================

// Helmet — HTTP security headers (CSP, HSTS, X-Frame-Options, etc.)
app.use(helmet());

// CORS — only allow frontend origin
app.use(cors({
  origin: process.env.CORS_ORIGIN || 'http://localhost:5173',
  methods: ['GET', 'POST'],
  allowedHeaders: ['Content-Type', 'X-CSRF-Token'],
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

app.use('/api', generalLimiter);
app.use('/api/contact', mailLimiter);
app.use('/api/career', mailLimiter);
app.use('/api/campus', mailLimiter);

// ============================================
// CSRF Token Endpoint
// ============================================
app.get('/api/csrf-token', generateCsrfToken, (req, res) => {
  res.json({ csrfToken: res.locals.csrfToken });
});

// ============================================
// Routes
// ============================================
app.use('/api', mailRoutes);

// Health check
app.get('/api/health', (req, res) => {
  res.json({ status: 'ok', timestamp: new Date().toISOString() });
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
