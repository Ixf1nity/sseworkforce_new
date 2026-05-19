import { useState, useEffect } from 'react';
import { Link, NavLink, useLocation } from 'react-router-dom';
import MobileMenu from './MobileMenu';

function Navbar() {
  const location = useLocation();
  const [mobileOpen, setMobileOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  // Close mobile menu on route change
  useEffect(() => {
    setMobileOpen(false);
  }, [location.pathname]);

  const isAboutActive = ['/about', '/leadership', '/financials'].includes(location.pathname);
  const isServicesActive = location.pathname === '/services';

  return (
    <>
      <nav className={`navbar navbar-expand-xl bg-F8FAFC ${scrolled ? 'is-sticky' : ''}`} id="navbar">
        <div className="container-fluid">
          <Link className="navbar-brand" to="/">
            <img src="/images/Logo.webp" loading="lazy" alt="SSE Workforce Logo" style={{ width: '170px' }} />
          </Link>

          {/* Mobile Toggle */}
          <button
            className="mobile-toggle-btn"
            type="button"
            onClick={() => setMobileOpen(true)}
            aria-label="Open menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>

          <div className="collapse navbar-collapse">
            <ul className="navbar-nav">
              <li className="nav-item">
                <NavLink
                  to="/"
                  className={({ isActive }) => `dropdown-toggle nav-link ${isActive ? 'active' : ''}`}
                  end
                >
                  Home
                </NavLink>
              </li>

              <li className="nav-item">
                <a
                  href="#"
                  className={`dropdown-toggle nav-link ${isAboutActive ? 'active' : ''}`}
                  onClick={(e) => e.preventDefault()}
                >
                  About Us <i className="ri-arrow-down-s-line"></i>
                </a>
                <ul className="dropdown-menu" style={{ width: '200px' }}>
                  <li className="nav-item">
                    <Link to="/about" className="nav-link">Company Profile</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/leadership" className="nav-link">Leadership Team</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/financials" className="nav-link">Financials</Link>
                  </li>
                </ul>
              </li>

              <li className="nav-item">
                <a
                  href="#"
                  className={`dropdown-toggle nav-link ${isServicesActive ? 'active' : ''}`}
                  onClick={(e) => e.preventDefault()}
                >
                  Services <i className="ri-arrow-down-s-line"></i>
                </a>
                <ul className="dropdown-menu">
                  <li className="nav-item">
                    <Link to="/services#manpower" className="nav-link">Technical Manpower Outsourcing</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/services#fabrication" className="nav-link">Precision Job Work &amp; Fabrication</Link>
                  </li>
                  <li className="nav-item">
                    <Link to="/services#TalentAcquisition" className="nav-link">Strategic Talent Acquisition</Link>
                  </li>
                </ul>
              </li>

              <li className="nav-item">
                <NavLink to="/gallery" className={({ isActive }) => `dropdown-toggle nav-link ${isActive ? 'active' : ''}`}>
                  Gallery
                </NavLink>
              </li>

              <li className="nav-item">
                <NavLink to="/clients" className={({ isActive }) => `dropdown-toggle nav-link ${isActive ? 'active' : ''}`}>
                  Clients
                </NavLink>
              </li>

              <li className="nav-item">
                <NavLink to="/career" className={({ isActive }) => `nav-link ${isActive ? 'active' : ''}`}>
                  Career
                </NavLink>
              </li>

              <li className="nav-item">
                <NavLink to="/campus" className={({ isActive }) => `nav-link ${isActive ? 'active' : ''}`}>
                  College Campus Recruitment
                </NavLink>
              </li>
            </ul>

            <div className="others-option d-flex align-items-center">
              <div className="option-item">
                <Link to="/contact" className="default-btn1 enquiry-btn-custom">Enquire Now</Link>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <MobileMenu isOpen={mobileOpen} onClose={() => setMobileOpen(false)} />
    </>
  );
}

export default Navbar;
