import { Link } from 'react-router-dom';

function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="sse-footer">
      {/* Wave Separator */}
      <div className="footer-wave">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
          <path d="M0,40 C360,100 720,0 1440,60 L1440,100 L0,100 Z" />
        </svg>
      </div>

      <div className="footer-main">
        <div className="container">
          <div className="footer-grid">
            {/* Brand Column */}
            <div className="footer-brand">
              <Link to="/">
                <img src="/images/Logo.webp" loading="lazy" alt="SSE Workforce Logo" />
              </Link>
              <p>
                SSE Workforce Services Pvt Ltd is a trusted name in workforce management,
                technical staffing, and industrial support services since 2011.
              </p>
              <div className="footer-socials">
                <a href="https://www.linkedin.com/company/sse-workforce-services-pvt-ltd/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                  <i className="ri-linkedin-fill"></i>
                </a>
                <a href="mailto:enquiry@sseworkforce.com" aria-label="Email">
                  <i className="ri-mail-fill"></i>
                </a>
                <a href="tel:+917498914626" aria-label="Phone">
                  <i className="ri-phone-fill"></i>
                </a>
              </div>
            </div>

            {/* Quick Links */}
            <div className="footer-links-col">
              <h4>Quick Links</h4>
              <ul className="two-col-list">
                <li><Link to="/">Home</Link></li>
                <li><Link to="/about">About Us</Link></li>
                <li><Link to="/leadership">Leadership</Link></li>
                <li><Link to="/financials">Financials</Link></li>
                <li><Link to="/gallery">Gallery</Link></li>
                <li><Link to="/clients">Clients</Link></li>
                <li><Link to="/career">Career</Link></li>
                <li><Link to="/campus">Campus Recruitment</Link></li>
              </ul>
            </div>

            {/* Services */}
            <div className="footer-links-col">
              <h4>Our Services</h4>
              <ul>
                <li><Link to="/services#manpower">Manpower Outsourcing</Link></li>
                <li><Link to="/services#fabrication">Job Work & Fabrication</Link></li>
                <li><Link to="/services#TalentAcquisition">Talent Acquisition</Link></li>
              </ul>
            </div>

            {/* Contact Info */}
            <div className="footer-contact-col">
              <h4>Get In Touch</h4>
              <ul>
                <li>
                  <div className="footer-contact-item">
                    <div className="footer-contact-icon">
                      <i className="ri-phone-line"></i>
                    </div>
                    <div>
                      <span>Call Us</span>
                      <a href="tel:+917498914626">+91 7498914626</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div className="footer-contact-item">
                    <div className="footer-contact-icon">
                      <i className="ri-mail-line"></i>
                    </div>
                    <div>
                      <span>Email Us</span>
                      <a href="mailto:enquiry@sseworkforce.com">enquiry@sseworkforce.com</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div className="footer-contact-item">
                    <div className="footer-contact-icon">
                      <i className="ri-map-pin-line"></i>
                    </div>
                    <div>
                      <span>Corporate Office</span>
                      <a
                        href="https://maps.app.goo.gl/LMrPb2oTtVXQpgN26"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        ABC Palladium Shop No. 29 & 30, MIDC Chakan Mahalunge, Tal Khed, Pune - 410501 (MH) India.
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="footer-bottom">
        <div className="container">
          <div className="footer-bottom-inner">
            <p>
              © {currentYear} <strong>SSE Workforce Services Pvt. Ltd.</strong> All rights reserved.
            </p>

          </div>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
