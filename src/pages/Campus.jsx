import { useState } from 'react';
import toast from 'react-hot-toast';
import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

const API_BASE = process.env.API_BASE;

function Campus() {
  useSEO({
    title: 'Campus Recruitment & Placement | Institutional Partnerships',
    description: 'Partner with SSE Workforce Services Private Limited for institutional hiring and campus placement drives. Connecting ITI, Diploma, and BTech graduates with leading manufacturing employers in Maharashtra.',
    keywords: 'campus placement maharashtra, college recruitment drives, ITI placement pune, diploma hiring chakan, hire freshers manufacturing, training and placement pune, college placement agency, sse recruitment, placement drives, freshers recruitment'
  });
  const [formData, setFormData] = useState({
    representative_name: '',
    designation: '',
    email: '',
    phone: '',
    college_name: '',
    students_batch: '',
    recruitment_location: '',
    availability_month: new Date().toISOString().slice(0, 7),
    college_address: '',
    qualifications: [],
    additional_notes: '',
  });
  const [errors, setErrors] = useState({});
  const [submitting, setSubmitting] = useState(false);

  const qualificationOptions = [
    'Below 10th', '10th & 12th', 'BCom', 'MCom', 'BA', 'MA', 'BCA',
    'BSc', 'Diploma', 'ITI', 'BTech', 'Welder', 'Operator', 'Helper',
  ];

  const validate = () => {
    const errs = {};
    if (!formData.representative_name.trim() || !/^[A-Za-z\s]+$/.test(formData.representative_name)) {
      errs.representative_name = 'Only letters and spaces allowed';
    }
    if (!formData.designation.trim() || !/^[A-Za-z\s]+$/.test(formData.designation)) {
      errs.designation = 'Only letters and spaces allowed';
    }
    if (!formData.email.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      errs.email = 'Enter a valid email';
    }
    if (!formData.phone.trim() || !/^[0-9]{10}$/.test(formData.phone)) {
      errs.phone = 'Enter a valid 10-digit number';
    }
    if (!formData.college_name.trim()) errs.college_name = 'Required';
    if (!formData.students_batch.trim() || !/^[0-9]+$/.test(formData.students_batch)) {
      errs.students_batch = 'Enter a valid number';
    }
    if (!formData.recruitment_location.trim()) errs.recruitment_location = 'Required';
    if (!formData.availability_month) errs.availability_month = 'Required';
    if (!formData.college_address.trim()) errs.college_address = 'Required';
    return errs;
  };

  const handleChange = (e) => {
    const { name, value } = e.target;
    let sanitized = value;
    if (name === 'representative_name' || name === 'designation' || name === 'recruitment_location') {
      sanitized = value.replace(/[^A-Za-z\s]/g, '');
    }
    if (name === 'phone') sanitized = value.replace(/[^0-9]/g, '').slice(0, 10);
    if (name === 'students_batch') sanitized = value.replace(/[^0-9]/g, '');

    setFormData((prev) => ({ ...prev, [name]: sanitized }));
    if (errors[name]) setErrors((prev) => ({ ...prev, [name]: '' }));
  };

  const handleCheckbox = (qual) => {
    setFormData((prev) => ({
      ...prev,
      qualifications: prev.qualifications.includes(qual)
        ? prev.qualifications.filter((q) => q !== qual)
        : [...prev.qualifications, qual],
    }));
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
      const res = await fetch(`http://87.76.191.18:3001/api/campus`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          ...formData,
          qualifications: formData.qualifications.join(', '),
        }),
      });
      const data = await res.json();

      if (res.status === 429) {
        toast.error('Too many submissions. Please wait a few minutes.');
      } else if (data.success) {
        toast.success('Enquiry submitted successfully!');
        setFormData({
          representative_name: '', designation: '', email: '', phone: '',
          college_name: '', students_batch: '', recruitment_location: '',
          availability_month: new Date().toISOString().slice(0, 7),
          college_address: '', qualifications: [], additional_notes: '',
        });
      } else {
        toast.error(data.message || 'Submission failed.');
      }
    } catch {
      toast.error('Network error. Please try again later.');
    }
    setSubmitting(false);
  };

  return (
    <>
      <PageBanner title="College Campus Recruitment" breadcrumbs={[{ label: 'College Campus Recruitment' }]} />

      <br /><br />

      <div className="sse-form-container">
        {/* Header */}
        <div className="sse-form-header">
          <h2>College Recruitment Enquiry Form</h2>
          <p>Fill all details carefully for recruitment process</p>
        </div>

        {/* Form Body */}
        <div className="sse-form-body">
          <form onSubmit={handleSubmit} noValidate>
            <div className="sse-form-grid">

              {/* Representative Name */}
              <div className="sse-form-group">
                <label>College Authorised Representative Name</label>
                <input
                  type="text"
                  name="representative_name"
                  placeholder="Enter Name"
                  value={formData.representative_name}
                  onChange={handleChange}
                  className={errors.representative_name ? 'input-error' : ''}
                  required
                />
                {errors.representative_name && <span className="field-error">{errors.representative_name}</span>}
              </div>

              {/* Designation */}
              <div className="sse-form-group">
                <label>Designation</label>
                <input
                  type="text"
                  name="designation"
                  placeholder="Enter Designation"
                  value={formData.designation}
                  onChange={handleChange}
                  className={errors.designation ? 'input-error' : ''}
                  required
                />
                {errors.designation && <span className="field-error">{errors.designation}</span>}
              </div>

              {/* Email */}
              <div className="sse-form-group">
                <label>Email Address</label>
                <input
                  type="email"
                  name="email"
                  placeholder="Enter Email"
                  value={formData.email}
                  onChange={handleChange}
                  className={errors.email ? 'input-error' : ''}
                  required
                />
                {errors.email && <span className="field-error">{errors.email}</span>}
              </div>

              {/* Phone */}
              <div className="sse-form-group">
                <label>Phone Number</label>
                <input
                  type="tel"
                  name="phone"
                  placeholder="Enter 10 Digit Number"
                  value={formData.phone}
                  onChange={handleChange}
                  maxLength="10"
                  className={errors.phone ? 'input-error' : ''}
                  required
                />
                {errors.phone && <span className="field-error">{errors.phone}</span>}
              </div>

              {/* College Name */}
              <div className="sse-form-group">
                <label>College Name</label>
                <input
                  type="text"
                  name="college_name"
                  placeholder="Enter College Name"
                  value={formData.college_name}
                  onChange={handleChange}
                  className={errors.college_name ? 'input-error' : ''}
                  required
                />
                {errors.college_name && <span className="field-error">{errors.college_name}</span>}
              </div>

              {/* Students Batch */}
              <div className="sse-form-group">
                <label>Number of Students in Batch</label>
                <input
                  type="text"
                  name="students_batch"
                  placeholder="Enter Number"
                  value={formData.students_batch}
                  onChange={handleChange}
                  className={errors.students_batch ? 'input-error' : ''}
                  required
                />
                {errors.students_batch && <span className="field-error">{errors.students_batch}</span>}
              </div>

              {/* Recruitment Location */}
              <div className="sse-form-group">
                <label>Preferred Recruitment Location</label>
                <input
                  type="text"
                  name="recruitment_location"
                  placeholder="Enter Location"
                  value={formData.recruitment_location}
                  onChange={handleChange}
                  className={errors.recruitment_location ? 'input-error' : ''}
                  required
                />
                {errors.recruitment_location && <span className="field-error">{errors.recruitment_location}</span>}
              </div>

              {/* Availability Month */}
              <div className="sse-form-group">
                <label>Availability Month of Batch</label>
                <input
                  type="month"
                  name="availability_month"
                  value={formData.availability_month}
                  onChange={handleChange}
                  className={errors.availability_month ? 'input-error' : ''}
                  required
                />
                {errors.availability_month && <span className="field-error">{errors.availability_month}</span>}
              </div>

              {/* College Address — Full Width */}
              <div className="sse-form-group sse-full-width">
                <label>College Address</label>
                <textarea
                  name="college_address"
                  placeholder="Enter Complete College Address"
                  value={formData.college_address}
                  onChange={handleChange}
                  className={errors.college_address ? 'input-error' : ''}
                  required
                />
                {errors.college_address && <span className="field-error">{errors.college_address}</span>}
              </div>

              {/* Qualification Checkboxes — Full Width */}
              <div className="sse-form-group sse-full-width">
                <label>Student Qualification</label>
                <div className="qualification-box">
                  <div className="checkbox-grid">
                    {qualificationOptions.map((qual) => (
                      <label key={qual} className="checkbox-label">
                        <input
                          type="checkbox"
                          checked={formData.qualifications.includes(qual)}
                          onChange={() => handleCheckbox(qual)}
                        />
                        {qual}
                      </label>
                    ))}
                  </div>
                </div>
              </div>

              {/* Additional Notes — Full Width */}
              <div className="sse-form-group sse-full-width">
                <label>Additional Notes</label>
                <textarea
                  name="additional_notes"
                  placeholder="Write Additional Notes..."
                  value={formData.additional_notes}
                  onChange={handleChange}
                />
              </div>

            </div>

            {/* Submit */}
            <div className="sse-submit-btn">
              <button type="submit" disabled={submitting}>
                {submitting ? 'Submitting...' : 'Submit Enquiry'}
              </button>
            </div>
          </form>
        </div>
      </div>

      <br /><br />
    </>
  );
}

export default Campus;
