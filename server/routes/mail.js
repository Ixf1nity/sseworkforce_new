import { Router } from 'express';
import { body, validationResult } from 'express-validator';
import nodemailer from 'nodemailer';

const router = Router();

// ============================================
// Mail Transporter (configured from .env)
// ============================================
const transporter = nodemailer.createTransport({
  host: process.env.MAIL_HOST,
  port: parseInt(process.env.MAIL_PORT, 10) || 587,
  secure: process.env.MAIL_SECURE === 'true',
  auth: {
    user: process.env.MAIL_USER,
    pass: process.env.MAIL_PASS,
  },
});

// ============================================
// POST /api/contact — Contact Form
// ============================================
router.post(
  '/contact',
  [
    body('full_name')
      .trim()
      .notEmpty().withMessage('Full name is required')
      .matches(/^[A-Za-z\s]+$/).withMessage('Name must contain only letters and spaces')
      .isLength({ max: 100 }).withMessage('Name too long')
      .escape(),
    body('phone')
      .trim()
      .notEmpty().withMessage('Phone is required')
      .matches(/^[0-9]{10}$/).withMessage('Phone must be 10 digits')
      .escape(),
    body('email')
      .trim()
      .notEmpty().withMessage('Email is required')
      .isEmail().withMessage('Invalid email address')
      .normalizeEmail(),
    body('subject')
      .optional()
      .trim()
      .isLength({ max: 200 }).withMessage('Subject too long')
      .escape(),
    body('message')
      .trim()
      .notEmpty().withMessage('Message is required')
      .isLength({ max: 2000 }).withMessage('Message must be under 2000 characters')
      .escape(),
  ],
  async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({
        success: false,
        message: errors.array().map((e) => e.msg).join(', '),
      });
    }

    const { full_name, phone, email, subject, message } = req.body;

    const htmlBody = `
      <h2>New Contact Form Message</h2>
      <p><strong>Full Name:</strong> ${full_name}</p>
      <p><strong>Phone:</strong> ${phone}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Subject:</strong> ${subject || 'N/A'}</p>
      <p><strong>Message:</strong><br>${message}</p>
    `;

    try {
      await transporter.sendMail({
        from: `"SSE Workforce" <${process.env.MAIL_USER}>`,
        to: process.env.MAIL_TO,
        replyTo: email,
        subject: subject || 'New Contact Form Submission',
        html: htmlBody,
      });

      res.json({ success: true, message: 'Message sent successfully!' });
    } catch (err) {
      console.error('Mail Error (Contact):', err.message);
      res.status(500).json({ success: false, message: 'Failed to send message. Please try again later.' });
    }
  }
);

// ============================================
// POST /api/career — Career Application
// ============================================
router.post(
  '/career',
  [
    body('full_name')
      .trim()
      .notEmpty().withMessage('Full name is required')
      .matches(/^[A-Za-z\s]+$/).withMessage('Name must contain only letters and spaces')
      .isLength({ max: 100 }).withMessage('Name too long')
      .escape(),
    body('email')
      .trim()
      .notEmpty().withMessage('Email is required')
      .isEmail().withMessage('Invalid email address')
      .normalizeEmail(),
    body('phone')
      .trim()
      .notEmpty().withMessage('Phone is required')
      .matches(/^[0-9]{10}$/).withMessage('Phone must be 10 digits')
      .escape(),
    body('gender')
      .trim()
      .notEmpty().withMessage('Gender is required')
      .isIn(['Male', 'Female']).withMessage('Invalid gender')
      .escape(),
    body('age')
      .notEmpty().withMessage('Age is required')
      .isInt({ min: 18, max: 60 }).withMessage('Age must be between 18 and 60'),
    body('qualification')
      .trim()
      .notEmpty().withMessage('Qualification is required')
      .isLength({ max: 100 }).withMessage('Qualification too long')
      .escape(),
    body('additional_note')
      .optional()
      .trim()
      .isLength({ max: 2000 }).withMessage('Note must be under 2000 characters')
      .escape(),
  ],
  async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({
        success: false,
        message: errors.array().map((e) => e.msg).join(', '),
      });
    }

    const { full_name, email, phone, gender, age, qualification, additional_note } = req.body;

    const htmlBody = `
      <h2>New Career Application</h2>
      <p><strong>Name:</strong> ${full_name}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Phone:</strong> ${phone}</p>
      <p><strong>Gender:</strong> ${gender}</p>
      <p><strong>Age:</strong> ${age}</p>
      <p><strong>Qualification:</strong> ${qualification}</p>
      <p><strong>Additional Note:</strong> ${additional_note || 'N/A'}</p>
    `;

    try {
      await transporter.sendMail({
        from: `"SSE Workforce" <${process.env.MAIL_USER}>`,
        to: process.env.MAIL_TO,
        replyTo: email,
        subject: 'New Career Application',
        html: htmlBody,
      });

      res.json({ success: true, message: 'Application submitted successfully!' });
    } catch (err) {
      console.error('Mail Error (Career):', err.message);
      res.status(500).json({ success: false, message: 'Failed to submit application. Please try again later.' });
    }
  }
);

// ============================================
// POST /api/campus — Campus Recruitment Enquiry
// ============================================
router.post(
  '/campus',
  [
    body('representative_name')
      .trim()
      .notEmpty().withMessage('Representative name is required')
      .matches(/^[A-Za-z\s]+$/).withMessage('Name must contain only letters')
      .isLength({ max: 100 })
      .escape(),
    body('designation')
      .trim()
      .notEmpty().withMessage('Designation is required')
      .isLength({ max: 100 })
      .escape(),
    body('email')
      .trim()
      .notEmpty().withMessage('Email is required')
      .isEmail().withMessage('Invalid email')
      .normalizeEmail(),
    body('phone')
      .trim()
      .notEmpty().withMessage('Phone is required')
      .matches(/^[0-9]{10}$/).withMessage('Phone must be 10 digits')
      .escape(),
    body('college_name')
      .trim()
      .notEmpty().withMessage('College name is required')
      .isLength({ max: 200 })
      .escape(),
    body('students_batch')
      .trim()
      .notEmpty().withMessage('Number of students is required')
      .matches(/^[0-9]+$/).withMessage('Must be a number')
      .escape(),
    body('recruitment_location')
      .trim()
      .notEmpty().withMessage('Location is required')
      .isLength({ max: 200 })
      .escape(),
    body('availability_month')
      .trim()
      .notEmpty().withMessage('Availability month is required')
      .escape(),
    body('college_address')
      .trim()
      .notEmpty().withMessage('College address is required')
      .isLength({ max: 1000 })
      .escape(),
    body('qualifications')
      .optional()
      .trim()
      .isLength({ max: 500 })
      .escape(),
    body('additional_notes')
      .optional()
      .trim()
      .isLength({ max: 2000 })
      .escape(),
  ],
  async (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({
        success: false,
        message: errors.array().map((e) => e.msg).join(', '),
      });
    }

    const {
      representative_name, designation, email, phone,
      college_name, students_batch, recruitment_location,
      availability_month, college_address, qualifications, additional_notes,
    } = req.body;

    const htmlBody = `
      <h2>Campus Recruitment Details</h2>
      <p><strong>College Authorised Representative Name:</strong> ${representative_name}</p>
      <p><strong>Designation:</strong> ${designation}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Phone Number:</strong> ${phone}</p>
      <p><strong>College Name:</strong> ${college_name}</p>
      <p><strong>College Address:</strong> ${college_address}</p>
      <p><strong>Student Qualification:</strong> ${qualifications || 'N/A'}</p>
      <p><strong>Number of Students in Batch:</strong> ${students_batch}</p>
      <p><strong>Preferred Recruitment Location:</strong> ${recruitment_location}</p>
      <p><strong>Availability Month of Batch:</strong> ${availability_month}</p>
      <p><strong>Additional Notes:</strong> ${additional_notes || 'N/A'}</p>
    `;

    try {
      await transporter.sendMail({
        from: `"SSE Workforce" <${process.env.MAIL_USER}>`,
        to: process.env.MAIL_TO,
        replyTo: email,
        subject: 'New Campus Recruitment Form Submission',
        html: htmlBody,
      });

      res.json({ success: true, message: 'Enquiry submitted successfully!' });
    } catch (err) {
      console.error('Mail Error (Campus):', err.message);
      res.status(500).json({ success: false, message: 'Failed to submit enquiry. Please try again later.' });
    }
  }
);

export default router;
