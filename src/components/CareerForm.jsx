import { useState } from 'react';

const API_BASE = 'http://localhost:3001';

function CareerForm() {
  const [formData, setFormData] = useState({
    full_name: '',
    email: '',
    phone: '',
    gender: '',
    age: '',
    qualification: '',
    additional_note: '',
  });
  const [errors, setErrors] = useState({});
  const [submitting, setSubmitting] = useState(false);
  const [toast, setToast] = useState(null);

  const validate = () => {
    const errs = {};
    if (!formData.full_name.trim() || !/^[A-Za-z\s]+$/.test(formData.full_name)) {
      errs.full_name = 'Name must contain only letters and spaces';
    }
    if (!formData.email.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      errs.email = 'Enter a valid email address';
    }
    if (!formData.phone.trim() || !/^[0-9]{10}$/.test(formData.phone)) {
      errs.phone = 'Enter a valid 10-digit phone number';
    }
    if (!formData.gender) {
      errs.gender = 'Select a gender';
    }
    const ageNum = parseInt(formData.age, 10);
    if (!formData.age || isNaN(ageNum) || ageNum < 18 || ageNum > 60) {
      errs.age = 'Age must be between 18 and 60';
    }
    if (!formData.qualification) {
      errs.qualification = 'Select a qualification';
    }
    return errs;
  };

  const handleChange = (e) => {
    const { name, value } = e.target;
    let sanitized = value;

    if (name === 'full_name') sanitized = value.replace(/[^A-Za-z\s]/g, '');
    if (name === 'phone') sanitized = value.replace(/[^0-9]/g, '').slice(0, 10);
    if (name === 'age') sanitized = value.replace(/[^0-9]/g, '');

    setFormData((prev) => ({ ...prev, [name]: sanitized }));
    if (errors[name]) setErrors((prev) => ({ ...prev, [name]: '' }));
  };

  const showToast = (type, msg) => {
    setToast({ type, msg });
    setTimeout(() => setToast(null), 4000);
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
      const res = await fetch(`${API_BASE}/api/career`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData),
      });
      const data = await res.json();

      if (res.status === 429) {
        showToast('error', 'Too many submissions. Please wait a few minutes.');
      } else if (data.success) {
        showToast('success', 'Application submitted successfully!');
        setFormData({ full_name: '', email: '', phone: '', gender: '', age: '', qualification: '', additional_note: '' });
      } else {
        showToast('error', data.message || 'Submission failed.');
      }
    } catch {
      showToast('error', 'Network error. Please try again later.');
    }
    setSubmitting(false);
  };

  const qualifications = [
    '10th', '10th & 12th', 'BCom', 'MCom', 'BA', 'MA', 'BCA', 'BSc',
    'Diploma', 'ITI', 'BTech', 'Welder', 'Operator', 'Helper', 'Other',
  ];

  return (
    <>
      {toast && (
        <div className="toast-container">
          <div className={`toast ${toast.type}`}>{toast.msg}</div>
        </div>
      )}

      <div className="sse-form-container">
        {/* Header */}
        <div className="sse-form-header">
          <h2>Apply for a Position</h2>
          <p>Fill out the form below to apply for current openings</p>
        </div>

        {/* Form Body */}
        <div className="sse-form-body">
          <form onSubmit={handleSubmit} noValidate>
            <div className="sse-form-grid">

              {/* Full Name */}
              <div className="sse-form-group sse-half-width">
                <label>Full Name</label>
                <input
                  type="text"
                  name="full_name"
                  placeholder="Enter your full name"
                  value={formData.full_name}
                  onChange={handleChange}
                  className={errors.full_name ? 'input-error' : ''}
                  required
                />
                {errors.full_name && <span className="field-error">{errors.full_name}</span>}
              </div>

              {/* Email */}
              <div className="sse-form-group sse-half-width">
                <label>Email Address</label>
                <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  value={formData.email}
                  onChange={handleChange}
                  className={errors.email ? 'input-error' : ''}
                  required
                />
                {errors.email && <span className="field-error">{errors.email}</span>}
              </div>

              {/* Phone */}
              <div className="sse-form-group sse-half-width">
                <label>Phone Number</label>
                <input
                  type="tel"
                  name="phone"
                  placeholder="10-digit mobile number"
                  value={formData.phone}
                  onChange={handleChange}
                  maxLength="10"
                  className={errors.phone ? 'input-error' : ''}
                  required
                />
                {errors.phone && <span className="field-error">{errors.phone}</span>}
              </div>

              {/* Gender */}
              <div className="sse-form-group">
                <label>Gender</label>
                <select
                  name="gender"
                  value={formData.gender}
                  onChange={handleChange}
                  className={errors.gender ? 'input-error' : ''}
                  required
                >
                  <option value="" disabled>Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                {errors.gender && <span className="field-error">{errors.gender}</span>}
              </div>

              {/* Age */}
              <div className="sse-form-group">
                <label>Age</label>
                <input
                  type="number"
                  name="age"
                  placeholder="18-60"
                  min="18"
                  max="60"
                  value={formData.age}
                  onChange={handleChange}
                  className={errors.age ? 'input-error' : ''}
                  required
                />
                {errors.age && <span className="field-error">{errors.age}</span>}
              </div>

              {/* Qualification */}
              <div className="sse-form-group sse-half-width">
                <label>Highest Qualification</label>
                <select
                  name="qualification"
                  value={formData.qualification}
                  onChange={handleChange}
                  className={errors.qualification ? 'input-error' : ''}
                  required
                >
                  <option value="" disabled>Choose Qualification</option>
                  {qualifications.map((q) => (
                    <option key={q} value={q}>{q}</option>
                  ))}
                </select>
                {errors.qualification && <span className="field-error">{errors.qualification}</span>}
              </div>

              {/* Additional Note */}
              <div className="sse-form-group sse-full-width">
                <label>Additional Note / Experience</label>
                <textarea
                  name="additional_note"
                  placeholder="Describe your relevant experience or additional notes..."
                  value={formData.additional_note}
                  onChange={handleChange}
                />
              </div>

            </div>

            {/* Submit */}
            <div className="sse-submit-btn">
              <button type="submit" disabled={submitting}>
                {submitting ? 'Submitting...' : 'Submit Application'}
              </button>
            </div>
          </form>
        </div>
      </div>
    </>
  );
}

export default CareerForm;
