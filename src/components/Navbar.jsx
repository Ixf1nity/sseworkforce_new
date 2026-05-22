import { useState, useEffect } from 'react';
import { Link, NavLink, useLocation } from 'react-router-dom';
import MobileMenu from './MobileMenu';

function Navbar() {
  const location = useLocation();
  const [mobileOpen, setMobileOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 40);
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
      <header className={`hp-header ${scrolled ? 'is-sticky' : ''}`} id="navbar">
        <div className="hp-nav-container">
          {/* Logo */}
          <Link className="hp-nav-logo" to="/">
            <img src="/images/Logo.webp" loading="lazy" alt="SSE Workforce Logo" />
          </Link>

          {/* Desktop Navigation Menu */}
          <nav className="hp-nav-menu">
            <ul className="hp-nav-list">
              <li className="hp-nav-item">
                <NavLink
                  to="/"
                  className={({ isActive }) => `hp-nav-link ${isActive ? 'active' : ''}`}
                  end
                >
                  Home
                </NavLink>
              </li>

              {/* About Us Dropdown */}
              <li className="hp-nav-item">
                <Link to="/about" className={`hp-nav-link ${isAboutActive ? 'active' : ''}`}>
                  About Us <i className="fa-solid fa-chevron-down" />
                </Link>
                <ul className="hp-nav-dropdown-menu">
                  <li className="hp-nav-dropdown-item">
                    <NavLink to="/about" className={({ isActive }) => `hp-nav-dropdown-link ${isActive ? 'active' : ''}`}>
                      Company Profile
                    </NavLink>
                  </li>
                  <li className="hp-nav-dropdown-item">
                    <NavLink to="/leadership" className={({ isActive }) => `hp-nav-dropdown-link ${isActive ? 'active' : ''}`}>
                      Leadership Team
                    </NavLink>
                  </li>
                  <li className="hp-nav-dropdown-item">
                    <NavLink to="/financials" className={({ isActive }) => `hp-nav-dropdown-link ${isActive ? 'active' : ''}`}>
                      Financials
                    </NavLink>
                  </li>
                </ul>
              </li>

              {/* Services Dropdown */}
              <li className="hp-nav-item">
                <Link to="/services" className={`hp-nav-link ${isServicesActive ? 'active' : ''}`}>
                  Services <i className="fa-solid fa-chevron-down" />
                </Link>
                <ul className="hp-nav-dropdown-menu">
                  <li className="hp-nav-dropdown-item">
                    <NavLink
                      to="/services#manpower"
                      className={({ isActive }) => `hp-nav-dropdown-link ${isActive && location.hash === '#manpower' ? 'active' : ''}`}
                    >
                      Technical Manpower Outsourcing
                    </NavLink>
                  </li>
                  <li className="hp-nav-dropdown-item">
                    <NavLink
                      to="/services#fabrication"
                      className={({ isActive }) => `hp-nav-dropdown-link ${isActive && location.hash === '#fabrication' ? 'active' : ''}`}
                    >
                      Precision Job Work &amp; Fabrication
                    </NavLink>
                  </li>
                  <li className="hp-nav-dropdown-item">
                    <NavLink
                      to="/services#TalentAcquisition"
                      className={({ isActive }) => `hp-nav-dropdown-link ${isActive && location.hash === '#TalentAcquisition' ? 'active' : ''}`}
                    >
                      Strategic Talent Acquisition
                    </NavLink>
                  </li>
                </ul>
              </li>

              <li className="hp-nav-item">
                <NavLink to="/gallery" className={({ isActive }) => `hp-nav-link ${isActive ? 'active' : ''}`}>
                  Gallery
                </NavLink>
              </li>

              <li className="hp-nav-item">
                <NavLink to="/clients" className={({ isActive }) => `hp-nav-link ${isActive ? 'active' : ''}`}>
                  Clients
                </NavLink>
              </li>

              <li className="hp-nav-item">
                <NavLink to="/career" className={({ isActive }) => `hp-nav-link ${isActive ? 'active' : ''}`}>
                  Career
                </NavLink>
              </li>

              <li className="hp-nav-item">
                <NavLink to="/campus" className={({ isActive }) => `hp-nav-link ${isActive ? 'active' : ''}`}>
                  Campus Recruitment
                </NavLink>
              </li>
            </ul>

            {/* Desktop CTA */}
            <div className="hp-nav-actions">
              <Link to="/contact" className="hp-nav-cta">
                Enquire Now
              </Link>
            </div>
          </nav>

          {/* Mobile Menu Hamburger Trigger */}
          <button
            className="hp-nav-toggle"
            type="button"
            onClick={() => setMobileOpen(true)}
            aria-label="Open navigation menu"
          >
            <span />
            <span />
            <span />
          </button>
        </div>
      </header>

      <MobileMenu isOpen={mobileOpen} onClose={() => setMobileOpen(false)} />
    </>
  );
}

export default Navbar;
