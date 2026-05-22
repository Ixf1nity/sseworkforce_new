import PageBanner from '../components/PageBanner';
import ContactForm from '../components/ContactForm';
import useSEO from '../hooks/useSEO';

function Contact() {
  useSEO({
    title: 'Contact Us | Get a Workforce Consultation',
    description: 'Contact SSE Workforce Services Private Limited corporate office in Chakan MIDC, Pune. Reach us at +917498914626 or enquiry@sseworkforce.com for industrial staffing solutions.',
    keywords: 'contact sse workforce, sse office chakan midc, manpower agency contact number, labour contractor office pune, contact workforce supplier, hire staff pune contact'
  });

  return (
    <div className="hp-home">
      <PageBanner
        title="Contact Us"
        breadcrumbs={[{ label: 'Contact Us' }]}
        image="/images/banner/contact-us-banner.webp"
      />

      <section className="hp-contact-sec">
        <div className="hp-container">
          <div className="hp-section-header" style={{ textAlign: 'center', marginBottom: '56px' }}>
            <p className="hp-section-eyebrow">Connect with Us</p>
            <h2 className="hp-section-title">Get a Workforce Consultation</h2>
            <p className="hp-section-subtitle">
              Have questions about contract staffing structures, regulatory compliance, or custom metal fabrication? Our operations division is ready to assist.
            </p>
          </div>

          <div className="hp-contact-grid">
            {/* Contact Information */}
            <div className="hp-contact-info-card">
              <div className="hp-contact-info-header">
                <h3>Corporate Office</h3>
                <p>Reach out directly to establish partner rates and formal workforce proposals.</p>
              </div>

              <ul className="hp-contact-info-list">
                <li className="hp-contact-info-item">
                  <div className="hp-contact-info-icon">
                    <i className="fa-solid fa-phone"></i>
                  </div>
                  <div className="hp-contact-info-content">
                    <label>Call Operations</label>
                    <a href="tel:+917498914626">+91 7498914626</a>
                  </div>
                </li>

                <li className="hp-contact-info-item">
                  <div className="hp-contact-info-icon">
                    <i className="fa-solid fa-envelope"></i>
                  </div>
                  <div className="hp-contact-info-content">
                    <label>Email Enquiry</label>
                    <a href="mailto:enquiry@sseworkforce.com">enquiry@sseworkforce.com</a>
                  </div>
                </li>

                <li className="hp-contact-info-item">
                  <div className="hp-contact-info-icon">
                    <i className="fa-solid fa-map-location-dot"></i>
                  </div>
                  <div className="hp-contact-info-content">
                    <label>Visit Office</label>
                    <a
                      href="https://maps.app.goo.gl/LMrPb2oTtVXQpgN26"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      ABC Palladium Shop No. 29 &amp; 30, MIDC Chakan Mahalunge, Tal Khed, Pune - 410501 (MH) India.
                    </a>
                  </div>
                </li>
              </ul>

              <div className="hp-contact-info-footer">
                <h5>Operational Hours</h5>
                <p>Monday – Saturday: 9:00 AM – 6:30 PM IST</p>
              </div>
            </div>

            {/* Contact Form Card */}
            <div className="hp-form-card" style={{ margin: '0' }}>
              <div className="hp-form-header" style={{ padding: '32px 40px', textAlign: 'left' }}>
                <h2>Send Us A Message</h2>
                <p>Fill out the fields below and our operations controller will respond within 24 hours.</p>
              </div>
              <div className="hp-form-body">
                <ContactForm />
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Contact;
