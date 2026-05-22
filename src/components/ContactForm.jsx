import { useState } from 'react';
import toast from 'react-hot-toast';
import axios from 'axios';

function ContactForm() {
  const [formData, setFormData] = useState({
    full_name: '',
    phone: '',
    email: '',
    subject: '',
    message: '',
  });
  const [errors, setErrors] = useState({});
  const [submitting, setSubmitting] = useState(false);

  const validate = () => {
    const errs = {};
    if (!formData.full_name.trim() || !/^[A-Za-z\s]+$/.test(formData.full_name)) {
      errs.full_name = 'Name must contain only letters and spaces';
    }
    if (!formData.phone.trim() || !/^[0-9]{10}$/.test(formData.phone)) {
      errs.phone = 'Enter a valid 10-digit phone number';
    }
    if (!formData.email.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      errs.email = 'Enter a valid email address';
    }
    if (!formData.message.trim()) {
      errs.message = 'Message is required';
    }
    if (formData.message.length > 2000) {
      errs.message = 'Message must be under 2000 characters';
    }
    return errs;
  };

  const handleChange = (e) => {
    const { name, value } = e.target;
    let sanitized = value;

    // Input-level sanitization
    if (name === 'full_name') sanitized = value.replace(/[^A-Za-z\s]/g, '');
    if (name === 'phone') sanitized = value.replace(/[^0-9]/g, '').slice(0, 10);

    setFormData((prev) => ({ ...prev, [name]: sanitized }));
    if (errors[name]) setErrors((prev) => ({ ...prev, [name]: '' }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    const errs = validate();
    if (Object.keys(errs).length > 0) {
      setErrors(errs);
      return;
    }

    setSubmitting(true);
    try {
      const res = await axios.post(`/api/contact`, formData);
      const data = res.data;

      if (data.success) {
        toast.success('Your enquiry has been sent successfully!');
        setFormData({ full_name: '', phone: '', email: '', subject: '', message: '' });
      } else {
        toast.error(data.message || 'Failed to send message.');
      }
    } catch (err) {
      if (err.response && err.response.status === 429) {
        toast.error('Too many submissions. Please wait a few minutes.');
      } else {
        toast.error(err.response?.data?.message || 'Network error. Please try again later.');
      }
    }
    setSubmitting(false);
  };

  return (
    <>
      <form onSubmit={handleSubmit} noValidate>
        <div className="hp-form-grid">
          {/* Full Name */}
          <div className="hp-form-group">
            <label>Full Name *</label>
            <input
              type="text"
              name="full_name"
              className={`hp-form-control ${errors.full_name ? 'is-invalid' : ''}`}
              placeholder="Enter Full Name"
              value={formData.full_name}
              onChange={handleChange}
              required
            />
            {errors.full_name && <span className="hp-form-error">{errors.full_name}</span>}
          </div>

          {/* Phone */}
          <div className="hp-form-group">
            <label>Contact Number *</label>
            <input
              type="tel"
              name="phone"
              className={`hp-form-control ${errors.phone ? 'is-invalid' : ''}`}
              placeholder="Enter Contact Number"
              value={formData.phone}
              onChange={handleChange}
              maxLength="10"
              required
            />
            {errors.phone && <span className="hp-form-error">{errors.phone}</span>}
          </div>

          {/* Email */}
          <div className="hp-form-group">
            <label>Email Address *</label>
            <input
              type="email"
              name="email"
              className={`hp-form-control ${errors.email ? 'is-invalid' : ''}`}
              placeholder="Enter Email Address"
              value={formData.email}
              onChange={handleChange}
              required
            />
            {errors.email && <span className="hp-form-error">{errors.email}</span>}
          </div>

          {/* Subject */}
          <div className="hp-form-group">
            <label>Subject</label>
            <input
              type="text"
              name="subject"
              className="hp-form-control"
              placeholder="Enter Subject"
              value={formData.subject}
              onChange={handleChange}
            />
          </div>

          {/* Message */}
          <div className="hp-form-group hp-form-full-width">
            <label>Message *</label>
            <textarea
              name="message"
              className={`hp-form-control ${errors.message ? 'is-invalid' : ''}`}
              placeholder="Enter your message"
              value={formData.message}
              onChange={handleChange}
              style={{ minHeight: '120px', resize: 'none' }}
              required
            />
            {errors.message && <span className="hp-form-error">{errors.message}</span>}
          </div>

          {/* Submit */}
          <div className="hp-form-full-width" style={{ marginTop: '16px' }}>
            <button type="submit" className="hp-form-btn" disabled={submitting}>
              {submitting ? 'Sending...' : 'Submit Message'}
            </button>
          </div>
        </div>
      </form>
    </>
  );
}

export default ContactForm;
