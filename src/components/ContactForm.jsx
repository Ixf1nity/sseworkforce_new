import { useState } from 'react';
import toast from 'react-hot-toast';

const API_BASE = process.env.API_BASE;

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
      const res = await fetch(`http://87.76.191.18:3001/api/contact`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData),
      });
      const data = await res.json();

      if (data.success) {
        toast.success('Message sent successfully!');
        setFormData({ full_name: '', phone: '', email: '', subject: '', message: '' });
      } else {
        toast.error(data.message || 'Failed to send message.');
      }
    } catch {
      toast.error('Network error. Please try again later.');
    }
    setSubmitting(false);
  };

  return (
    <>
      <form onSubmit={handleSubmit} noValidate>
        <div className="row justify-content-center g-4">
          {/* Full Name */}
          <div className="col-lg-6 col-md-12">
            <div className="form-group">
              <label>Full Name *</label>
              <input
                type="text"
                name="full_name"
                className={`form-control ${errors.full_name ? 'is-invalid' : ''}`}
                placeholder="Enter Full Name"
                value={formData.full_name}
                onChange={handleChange}
                required
              />
              {errors.full_name && <div className="invalid-feedback">{errors.full_name}</div>}
            </div>
          </div>

          {/* Phone */}
          <div className="col-lg-6 col-md-12">
            <div className="form-group">
              <label>Contact Number *</label>
              <input
                type="tel"
                name="phone"
                className={`form-control ${errors.phone ? 'is-invalid' : ''}`}
                placeholder="Enter Contact Number"
                value={formData.phone}
                onChange={handleChange}
                maxLength="10"
                required
              />
              {errors.phone && <div className="invalid-feedback">{errors.phone}</div>}
            </div>
          </div>

          {/* Email */}
          <div className="col-lg-6 col-md-12">
            <div className="form-group">
              <label>Email Address *</label>
              <input
                type="email"
                name="email"
                className={`form-control ${errors.email ? 'is-invalid' : ''}`}
                placeholder="Enter Email Address"
                value={formData.email}
                onChange={handleChange}
                required
              />
              {errors.email && <div className="invalid-feedback">{errors.email}</div>}
            </div>
          </div>

          {/* Subject */}
          <div className="col-lg-6 col-md-12">
            <div className="form-group">
              <label>Subject</label>
              <input
                type="text"
                name="subject"
                className="form-control"
                placeholder="Enter Subject"
                value={formData.subject}
                onChange={handleChange}
              />
            </div>
          </div>

          {/* Message */}
          <div className="col-lg-12 col-md-12">
            <div className="form-group">
              <label>Message *</label>
              <textarea
                name="message"
                className={`form-control ${errors.message ? 'is-invalid' : ''}`}
                placeholder="Enter your message"
                value={formData.message}
                onChange={handleChange}
                required
              />
              {errors.message && <div className="invalid-feedback">{errors.message}</div>}
            </div>
          </div>

          {/* Submit */}
          <div className="col-lg-12 col-md-12">
            <button type="submit" className="default-btn" disabled={submitting}>
              {submitting ? 'Sending...' : 'Submit'}
            </button>
          </div>
        </div>
      </form>
    </>
  );
}

export default ContactForm;
