import { useState } from 'react';
import { Link, useLocation } from 'react-router-dom';

function MobileMenu({ isOpen, onClose }) {
  const location = useLocation();
  const [aboutOpen, setAboutOpen] = useState(false);
  const [servicesOpen, setServicesOpen] = useState(false);

  return (
    <>
      {/* Blurred Overlay backdrop */}
      <div
        className={`hp-mobile-overlay ${isOpen ? 'is-open' : ''}`}
        onClick={onClose}
      />

      {/* Slide-in Mobile Sidebar */}
      <div className={`hp-mobile-sidebar ${isOpen ? 'is-open' : ''}`}>
        {/* Header */}
        <div className="hp-mobile-header">
          <Link to="/" className="hp-mobile-logo" onClick={onClose}>
            <img src="/images/Logo.webp" loading="lazy" alt="SSE Workforce Logo" />
          </Link>
          <button
            type="button"
            className="hp-mobile-close"
            onClick={onClose}
            aria-label="Close menu"
          >
            ✕
          </button>
        </div>

        {/* Navigation Body */}
        <div className="hp-mobile-body">
          <ul className="hp-mobile-menu">
            {/* Home */}
            <li className="hp-mobile-item">
              <Link
                to="/"
                className={`hp-mobile-link ${location.pathname === '/' ? 'active' : ''}`}
                onClick={onClose}
              >
                Home
              </Link>
            </li>

            {/* About Dropdown */}
            <li className="hp-mobile-item">
              <button
                className={`hp-mobile-dropdown-btn ${aboutOpen ? 'is-active' : ''}`}
                onClick={() => setAboutOpen(!aboutOpen)}
              >
                About Us
                <i className="fa-solid fa-chevron-down" />
              </button>
              <ul className={`hp-mobile-submenu ${aboutOpen ? 'is-open' : ''}`}>
                <li>
                  <Link
                    to="/about"
                    className={`hp-mobile-sublink ${location.pathname === '/about' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Company Profile
                  </Link>
                </li>
                <li>
                  <Link
                    to="/leadership"
                    className={`hp-mobile-sublink ${location.pathname === '/leadership' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Leadership Team
                  </Link>
                </li>
                <li>
                  <Link
                    to="/financials"
                    className={`hp-mobile-sublink ${location.pathname === '/financials' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Financials
                  </Link>
                </li>
              </ul>
            </li>

            {/* Services Dropdown */}
            <li className="hp-mobile-item">
              <button
                className={`hp-mobile-dropdown-btn ${servicesOpen ? 'is-active' : ''}`}
                onClick={() => setServicesOpen(!servicesOpen)}
              >
                Services
                <i className="fa-solid fa-chevron-down" />
              </button>
              <ul className={`hp-mobile-submenu ${servicesOpen ? 'is-open' : ''}`}>
                <li>
                  <Link
                    to="/services#manpower"
                    className={`hp-mobile-sublink ${location.pathname === '/services' && location.hash === '#manpower' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Technical Manpower Outsourcing
                  </Link>
                </li>
                <li>
                  <Link
                    to="/services#fabrication"
                    className={`hp-mobile-sublink ${location.pathname === '/services' && location.hash === '#fabrication' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Precision Job Work &amp; Fabrication
                  </Link>
                </li>
                <li>
                  <Link
                    to="/services#TalentAcquisition"
                    className={`hp-mobile-sublink ${location.pathname === '/services' && location.hash === '#TalentAcquisition' ? 'active' : ''}`}
                    onClick={onClose}
                  >
                    Strategic Talent Acquisition
                  </Link>
                </li>
              </ul>
            </li>

            {/* Gallery */}
            <li className="hp-mobile-item">
              <Link
                to="/gallery"
                className={`hp-mobile-link ${location.pathname === '/gallery' ? 'active' : ''}`}
                onClick={onClose}
              >
                Gallery
              </Link>
            </li>

            {/* Clients */}
            <li className="hp-mobile-item">
              <Link
                to="/clients"
                className={`hp-mobile-link ${location.pathname === '/clients' ? 'active' : ''}`}
                onClick={onClose}
              >
                Clients
              </Link>
            </li>

            {/* Career */}
            <li className="hp-mobile-item">
              <Link
                to="/career"
                className={`hp-mobile-link ${location.pathname === '/career' ? 'active' : ''}`}
                onClick={onClose}
              >
                Career
              </Link>
            </li>

            {/* Campus */}
            <li className="hp-mobile-item">
              <Link
                to="/campus"
                className={`hp-mobile-link ${location.pathname === '/campus' ? 'active' : ''}`}
                onClick={onClose}
              >
                Campus
              </Link>
            </li>
          </ul>

          {/* Footer Area */}
          <div className="hp-mobile-footer">
            <Link to="/contact" className="hp-mobile-cta" onClick={onClose}>
              Enquire Now
            </Link>
            <div className="hp-mobile-call-card">
              <span>Call Us Now</span>
              <a href="tel:+917498914626">+91 7498914626</a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default MobileMenu;
