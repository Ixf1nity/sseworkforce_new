import { useState } from 'react';
import { Link, useLocation } from 'react-router-dom';

function MobileMenu({ isOpen, onClose }) {
  const location = useLocation();
  const [aboutOpen, setAboutOpen] = useState(false);
  const [servicesOpen, setServicesOpen] = useState(false);

  if (!isOpen) return null;

  return (
    <>
      {/* Overlay */}
      <div
        style={{
          position: 'fixed',
          top: 0,
          left: 0,
          right: 0,
          bottom: 0,
          background: 'rgba(0,0,0,0.5)',
          zIndex: 9998,
        }}
        onClick={onClose}
      />

      {/* Sidebar */}
      <div
        className="mobile-sidebar"
        style={{
          position: 'fixed',
          top: 0,
          right: 0,
          bottom: 0,
          zIndex: 9999,
          overflowY: 'auto',
          transform: isOpen ? 'translateX(0)' : 'translateX(100%)',
          transition: 'transform 0.3s ease',
        }}
      >
        {/* Header */}
        <div className="offcanvas-header" style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', padding: '15px 20px', borderBottom: '1px solid #f1f1f1' }}>
          <Link to="/" onClick={onClose}>
            <img src="/images/Logo.webp" loading="lazy" alt="logo" className="mobile-logo" />
          </Link>
          <button
            type="button"
            onClick={onClose}
            style={{ background: 'none', border: 'none', fontSize: '24px', cursor: 'pointer' }}
            aria-label="Close menu"
          >
            ✕
          </button>
        </div>

        {/* Body */}
        <div style={{ padding: '0 20px' }}>
          <ul className="mobile-menu">
            <li>
              <Link to="/" className={location.pathname === '/' ? 'active' : ''} onClick={onClose}>
                Home
              </Link>
            </li>

            {/* About Dropdown */}
            <li className="mobile-dropdown">
              <button className="mobile-dropdown-btn" onClick={() => setAboutOpen(!aboutOpen)}>
                About Us
                <span>{aboutOpen ? '−' : '+'}</span>
              </button>
              {aboutOpen && (
                <ul className="mobile-submenu" style={{ listStyle: 'none', paddingLeft: '15px', background: '#f8fafc' }}>
                  <li><Link to="/about" onClick={onClose}>Company Profile</Link></li>
                  <li><Link to="/leadership" onClick={onClose}>Leadership Team</Link></li>
                  <li><Link to="/financials" onClick={onClose}>Financials</Link></li>
                </ul>
              )}
            </li>

            {/* Services Dropdown */}
            <li className="mobile-dropdown">
              <button className="mobile-dropdown-btn" onClick={() => setServicesOpen(!servicesOpen)}>
                Services
                <span>{servicesOpen ? '−' : '+'}</span>
              </button>
              {servicesOpen && (
                <ul className="mobile-submenu" style={{ listStyle: 'none', paddingLeft: '15px', background: '#f8fafc' }}>
                  <li><Link to="/services#manpower" onClick={onClose}>Technical Manpower Outsourcing</Link></li>
                  <li><Link to="/services#fabrication" onClick={onClose}>Precision Job Work &amp; Fabrication</Link></li>
                  <li><Link to="/services#TalentAcquisition" onClick={onClose}>Strategic Talent Acquisition</Link></li>
                </ul>
              )}
            </li>

            <li>
              <Link to="/gallery" onClick={onClose}>Gallery</Link>
            </li>
            <li>
              <Link to="/clients" onClick={onClose}>Clients</Link>
            </li>
            <li>
              <Link to="/career" onClick={onClose}>Career</Link>
            </li>
            <li>
              <Link to="/campus" onClick={onClose}>College Campus Recruitment</Link>
            </li>
          </ul>

          {/* Contact Area */}
          <div className="mobile-contact-area">
            <Link to="/contact" className="mobile-enquiry-btn" onClick={onClose}>
              Enquire Now
            </Link>
            <div className="mobile-call-area">
              <span>Call Us Now</span>
              <a href="tel:+917498914626">+917498914626</a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default MobileMenu;
