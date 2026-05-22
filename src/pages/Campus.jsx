import { useState } from 'react';
import toast from 'react-hot-toast';
import axios from 'axios';
import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

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
      const res = await axios.post(`/api/campus`, {
        ...formData,
        qualifications: formData.qualifications.join(', '),
      });
      const data = res.data;

      if (data.success) {
        toast.success('Your college campus recruitment enquiry has been submitted successfully!');
        setFormData({
          representative_name: '', designation: '', email: '', phone: '',
          college_name: '', students_batch: '', recruitment_location: '',
          availability_month: new Date().toISOString().slice(0, 7),
          college_address: '', qualifications: [], additional_notes: '',
        });
      } else {
        toast.error(data.message || 'Submission failed.');
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
    <div className="hp-home">
      <PageBanner title="College Campus Recruitment" breadcrumbs={[{ label: 'College Campus Recruitment' }]} />

      <section className="hp-form-section">
        <div className="hp-container">
          <div className="hp-section-header" style={{ textAlign: 'center', marginBottom: '40px' }}>
            <p className="hp-section-eyebrow">Institutional Partnerships</p>
            <h2 className="hp-section-title">College Recruitment Drives</h2>
            <p className="hp-section-subtitle">
              Partner with SSE Workforce Services to connect your graduating batches (ITI, Diploma, BTech) with leading manufacturing and engineering employers in Maharashtra.
            </p>
          </div>

          <div className="hp-form-card">
            {/* Header */}
            <div className="hp-form-header">
              <h2>College Recruitment Enquiry Form</h2>
              <p>Fill all details carefully for recruitment process</p>
            </div>

            {/* Form Body */}
            <div className="hp-form-body">
              <form onSubmit={handleSubmit} noValidate>
                <div className="hp-form-grid">

                  {/* Representative Name */}
                  <div className="hp-form-group">
                    <label>Representative Name</label>
                    <input
                      type="text"
                      name="representative_name"
                      placeholder="Enter Representative Name"
                      value={formData.representative_name}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.representative_name ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.representative_name && <span className="hp-form-error">{errors.representative_name}</span>}
                  </div>

                  {/* Designation */}
                  <div className="hp-form-group">
                    <label>Designation</label>
                    <input
                      type="text"
                      name="designation"
                      placeholder="Enter Designation"
                      value={formData.designation}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.designation ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.designation && <span className="hp-form-error">{errors.designation}</span>}
                  </div>

                  {/* Email */}
                  <div className="hp-form-group">
                    <label>Email Address</label>
                    <input
                      type="email"
                      name="email"
                      placeholder="Enter Email"
                      value={formData.email}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.email ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.email && <span className="hp-form-error">{errors.email}</span>}
                  </div>

                  {/* Phone */}
                  <div className="hp-form-group">
                    <label>Phone Number</label>
                    <input
                      type="tel"
                      name="phone"
                      placeholder="Enter 10 Digit Number"
                      value={formData.phone}
                      onChange={handleChange}
                      maxLength="10"
                      className={`hp-form-control ${errors.phone ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.phone && <span className="hp-form-error">{errors.phone}</span>}
                  </div>

                  {/* College Name */}
                  <div className="hp-form-group hp-form-full-width">
                    <label>College Name</label>
                    <input
                      type="text"
                      name="college_name"
                      placeholder="Enter College Name"
                      value={formData.college_name}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.college_name ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.college_name && <span className="hp-form-error">{errors.college_name}</span>}
                  </div>

                  {/* Students Batch */}
                  <div className="hp-form-group">
                    <label>Number of Students in Batch</label>
                    <input
                      type="text"
                      name="students_batch"
                      placeholder="Enter Number"
                      value={formData.students_batch}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.students_batch ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.students_batch && <span className="hp-form-error">{errors.students_batch}</span>}
                  </div>

                  {/* Recruitment Location */}
                  <div className="hp-form-group">
                    <label>Preferred Recruitment Location</label>
                    <input
                      type="text"
                      name="recruitment_location"
                      placeholder="Enter Location"
                      value={formData.recruitment_location}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.recruitment_location ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.recruitment_location && <span className="hp-form-error">{errors.recruitment_location}</span>}
                  </div>

                  {/* Availability Month */}
                  <div className="hp-form-group hp-form-full-width">
                    <label>Availability Month of Batch</label>
                    <input
                      type="month"
                      name="availability_month"
                      value={formData.availability_month}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.availability_month ? 'is-invalid' : ''}`}
                      required
                    />
                    {errors.availability_month && <span className="hp-form-error">{errors.availability_month}</span>}
                  </div>

                  {/* College Address — Full Width */}
                  <div className="hp-form-group hp-form-full-width">
                    <label>College Address</label>
                    <textarea
                      name="college_address"
                      placeholder="Enter Complete College Address"
                      value={formData.college_address}
                      onChange={handleChange}
                      className={`hp-form-control ${errors.college_address ? 'is-invalid' : ''}`}
                      style={{ minHeight: '100px', resize: 'none' }}
                      required
                    />
                    {errors.college_address && <span className="hp-form-error">{errors.college_address}</span>}
                  </div>

                  {/* Qualification Checkboxes — Full Width */}
                  <div className="hp-form-group hp-form-full-width">
                    <div className="hp-form-checkbox-section">
                      <div className="hp-form-checkbox-section-title">Student Qualification Options</div>
                      <div className="hp-form-checkbox-grid">
                        {qualificationOptions.map((qual) => (
                          <label key={qual} className="hp-form-checkbox-label">
                            <input
                              type="checkbox"
                              checked={formData.qualifications.includes(qual)}
                              onChange={() => handleCheckbox(qual)}
                            />
                            <span>{qual}</span>
                          </label>
                        ))}
                      </div>
                    </div>
                  </div>

                  {/* Additional Notes — Full Width */}
                  <div className="hp-form-group hp-form-full-width">
                    <label>Additional Notes</label>
                    <textarea
                      name="additional_notes"
                      placeholder="Write Additional Notes..."
                      value={formData.additional_notes}
                      onChange={handleChange}
                      className="hp-form-control"
                      style={{ minHeight: '120px', resize: 'none' }}
                    />
                  </div>

                </div>

                {/* Submit */}
                <div className="hp-form-submit-wrap">
                  <button type="submit" className="hp-form-btn" disabled={submitting}>
                    {submitting ? 'Submitting...' : 'Submit Enquiry'}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Campus;
