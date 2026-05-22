import { useState } from 'react';
import { Link } from 'react-router-dom';
import useSEO from '../hooks/useSEO';

function Home() {
  useSEO({
    title: 'SSE Workforce Services Private Limited | Leading Industrial Manpower Supplier & Labor Contractor in Maharashtra',
    description: 'SSE Workforce Services Private Limited is Maharashtra\'s leading industrial labor contractor. We supply skilled, semi-skilled, unskilled, and highly-skilled manpower, alongside precision fabrication and job works in Maharashtra.',
    keywords: 'sse workforce services private limited, shree swami samarth enterprises, sse workforce, manpower supplier pune, manpower supplier chakan, manpower supplier ranjangaon, manpower supplier talegaon, manpower supplier bhosari, manpower supplier maharashtra, labor contractor pune, labor contractor chakan, labor contractor midc, labor contractor ranjangaon, labor contractor talegaon, labor contractor bhosari, labor contractor maharashtra, industrial manpower supply, industrial labour supply, skilled labor supply pune, skilled labor supply chakan, semi-skilled workforce supplier, unskilled manpower outsourcing pune, highly-skilled technical manpower, factory labor contractors, precision fabrication services, job work contractor, technical staffing solutions, manpower supplier in chakan midc, manpower supplier in ranjangaon midc, labour contractor in bhosari midc, industrial workforce solutions, contract labour supply maharashtra, welder supplier pune, fitter supplier chakan, grinder supplier pune, helper supply chakan, cnc operator supplier, assembly line workers supply, warehouse staff outsourcing, logistics labor contract, storekeeper supplier, electrician supplier pune, machinist supplier chakan, technician staffing, supervisor supply, contract labor compliance pune, payroll outsourcing services maharashtra, temporary staffing agency pune, permanent recruitment solutions, temp to hire staffing, third party payroll outsourcing, manufacturing labor contractor, automobile manpower supplier, engineering workforce solutions, forging industry labour supplier, foundry worker supply, plastics industry labor, electronics assembly staffing, steel plant manpower, packers and loaders outsourcing, material handling workers supply, pimpri chinchwad manpower supplier, pcmc labour contractor, hadapsar midc manpower, hinjewadi midc staffing, wagholi industrial labor, aurangabad midc labour supply, nashik midc manpower, nagpur industrial staffing, mumbai industrial manpower, fabrication job work chakan, structural fabrication contractor, co2 welder contractor pune, arc welding services chakan, gas welder supplier, metal finishing job work, deburring services pune, fender assembly finishing, hardness punching job work, semi finished goods processing, technical talent acquisition, engineering placement agency, freshers campus recruitment, iti placement drives, diploma placement drives, btech fresher hiring, industrial training and placement, best manpower agency in pune, top labour contractor in chakan, reliable staffing partner maharashtra, verified labor contractor, esic pf compliant contractor, authorized labour supplier pune, outsourced plant operations, industrial utility workers, quality inspection staffing, production line operators, automotive assembly line manpower, flexible workforce solutions, on demand labor supply, sse chakan manpower'
  });

  const [activeFaq, setActiveFaq] = useState(null);

  const faqs = [
    {
      question: 'Technical Manpower Outsourcing',
      answer: 'We provide skilled, semi-skilled, and unskilled manpower solutions for industries including manufacturing, engineering, automotive, construction, warehousing, logistics, and industrial operations. Our workforce solutions help businesses maintain efficiency, reduce hiring challenges, and meet project timelines effectively.',
    },
    {
      question: 'Precision Job Work & Fabrication',
      answer: 'Our precision fabrication and job work services are designed to meet high industrial standards with accuracy, durability, and timely delivery. We support clients with customized fabrication solutions for various engineering and industrial applications.',
    },
    {
      question: 'Strategic Talent Acquisition',
      answer: 'We help companies identify, attract, and recruit the right talent through professional hiring and recruitment solutions. Our strategic talent acquisition services ensure businesses gain access to qualified professionals who contribute to long-term growth and organizational success.',
    },
  ];

  const industries = [
    { img: '/images/serve/serve1.webp', title: 'Engineering & Automobile' },
    { img: '/images/serve/serve2.webp', title: 'Forging Industry' },
    { img: '/images/serve/serve4.webp', title: 'Foundries' },
    { img: '/images/serve/serve6.webp', title: 'Service Industries' },
    { img: '/images/serve/mall.webp', title: 'Shopping Complexes' },
    { img: '/images/serve/rubber (2).webp', title: 'Rubber Industries' },
    { img: '/images/serve/Aluform Work.webp', title: 'Aluform Work' },
    { img: '/images/serve/plastics-industries.webp', title: 'Plastic Industries' },
    { img: '/images/serve/stiching-industries.webp', title: 'Stitching Industries' },
    { img: '/images/serve/industrial-work.webp', title: 'Industrial Work' },
    { img: '/images/serve/Electrical-Electronics-Manufacturers.webp', title: 'Electrical & Electronics' },
  ];

  const partners = [
    'partner1', 'partner2', 'partner3', 'partner4', 'partner5', 'partner6', 'partner7', 'partner25',
  ];

  const stats = [
    { value: '3000', suffix: '+', label: 'Skilled Workforce Strength' },
    { value: '15', suffix: '+', label: 'Years of Industry Experience' },
    { value: '20', suffix: '+', label: 'Industries Served' },
    { value: '25', suffix: '+', label: 'Trusted Client Partners' },
  ];

  const services = [
    {
      icon: 'fa-solid fa-users-gear',
      title: 'Manpower Outsourcing',
      desc: 'Skilled, semi-skilled, and unskilled workforce supply for manufacturing, engineering, automotive, and industrial operations.',
    },
    {
      icon: 'fa-solid fa-gears',
      title: 'Job Work & Fabrication',
      desc: 'Precision fabrication, welding, finishing, and industrial job work services meeting high industrial quality standards.',
    },
    {
      icon: 'fa-solid fa-user-tie',
      title: 'Talent Acquisition',
      desc: 'Strategic recruitment and placement solutions connecting businesses with qualified professionals for long-term growth.',
    },
  ];

  const marqueeItems = [
    { icon: 'fa fa-building', text: 'SSE Workforce Services Pvt Ltd' },
    { icon: 'fa fa-calendar', text: '15+ Years Experience' },
    { icon: 'fa fa-industry', text: '15+ Industry Sectors' },
    { icon: 'fa fa-handshake', text: '25+ Companies Served' },
    { icon: 'fa fa-users', text: 'Skilled Workforce Team' },
    { icon: 'fa fa-thumbs-up', text: 'High Client Retention' },
  ];


  return (
    <div className="hp-home">
      {/* ===== HERO ===== */}
      <section className="hp-hero" id="hero">
        <div className="hp-hero-inner">
          {/* Chevron decorations */}
          <div className="hp-chevron hp-chevron--left" aria-hidden="true" />
          <div className="hp-chevron hp-chevron--right" aria-hidden="true" />

          <div className="hp-hero-card">
            <div className="hp-hero-photo">
              <img
                src="/images/slider_img1.webp"
                alt="SSE Workforce industrial manpower services"
                loading="eager"
              />
            </div>
            <div className="hp-hero-copy">
              <p className="hp-hero-eyebrow">Welcome to SSE Workforce</p>
              <h1 className="hp-hero-title">
                Expert Manpower for Engineering & Industrial Works
              </h1>
              <p className="hp-hero-subtitle">
                Maharashtra's trusted partner for skilled workforce solutions, precision fabrication, and strategic talent acquisition since 2011.
              </p>
              <div className="hp-hero-ctas">
                <Link to="/services" className="hp-btn-primary">
                  Our Services
                </Link>
                <Link to="/about" className="hp-btn-outline">
                  Learn More
                </Link>
                <a href="/api/download-brochure" download className="hp-btn-ink">
                  <i className="fa-solid fa-download" />
                  Download Brochure
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ===== STATS (dark ink slab) ===== */}
      <section className="hp-stats" id="stats">
        <div className="hp-container">
          <div className="hp-stats-grid">
            {stats.map((stat, i) => (
              <div key={i} className="hp-stat-item">
                <p className="hp-stat-value">
                  {stat.value}<span>{stat.suffix}</span>
                </p>
                <p className="hp-stat-label">{stat.label}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ===== ABOUT ===== */}
      <section className="hp-about" id="about-preview">
        <div className="hp-container">
          <div className="hp-about-grid">
            <div className="hp-about-copy">
              <p className="hp-section-eyebrow">About SSE Workforce</p>
              <h2>
                Manpower Solutions Across All Industries
                <span>Formerly Shree Swami Samarth Enterprises</span>
              </h2>
              <p>
                Welcome to SSE Workforce Services Pvt Ltd, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm "Shree Swami Samarth Enterprises," originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.
              </p>
              <p>
                With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses.
              </p>
              <Link to="/about" className="hp-text-link">
                Explore More
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                  <path d="M3 8h10M9 4l4 4-4 4" />
                </svg>
              </Link>
            </div>

            <div className="hp-about-cards">
              <div className="hp-about-card">
                <div className="hp-about-card-icon">
                  <svg viewBox="0 0 32 32" fill="currentColor">
                    <path d="M30.9,5.6C30.8,5.2,30.4,5,30,5h-3V2c0-0.4-0.2-0.8-0.6-0.9C26,0.9,25.6,1,25.3,1.3l-4,4C21.1,5.5,21,5.7,21,6v3.6l-5.7,5.7  c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l5.7-5.7H26c0.3,0,0.5-0.1,0.7-0.3l4-4C31,6.4,31.1,6,30.9,5.6z" />
                    <path d="M18.1,18.1C17.6,18.7,16.8,19,16,19s-1.6-0.3-2.1-0.9c-1.2-1.2-1.2-3.1,0-4.2l2.8-2.8C16.5,11,16.2,11,16,11  c-2.8,0-5,2.2-5,5s2.2,5,5,5s5-2.2,5-5c0-0.2,0-0.5-0.1-0.7L18.1,18.1z" />
                    <path d="M28.1,12.1C27.6,12.7,26.8,13,26,13h-2.8l-0.7,0.7c0.3,0.7,0.4,1.5,0.4,2.3c0,3.9-3.1,7-7,7s-7-3.1-7-7s3.1-7,7-7  c0.8,0,1.6,0.2,2.3,0.4L19,8.8V6c0-0.8,0.3-1.6,0.9-2.1l1-1C19.3,2.3,17.7,2,16,2C8.3,2,2,8.3,2,16s6.3,14,14,14s14-6.3,14-14  c0-1.7-0.3-3.3-0.9-4.9L28.1,12.1z" />
                  </svg>
                </div>
                <div className="hp-about-card-body">
                  <h3>Our Mission</h3>
                  <p>To provide high-quality manpower and workforce services that meet the evolving needs of industries by ensuring professionalism, integrity, and excellence.</p>
                </div>
              </div>
              <div className="hp-about-card">
                <div className="hp-about-card-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                    <path d="M12 7C9.23858 7 7 9.23858 7 12C7 13.3613 7.54402 14.5955 8.42651 15.4972C8.77025 15.8484 9.05281 16.2663 9.14923 16.7482L9.67833 19.3924C9.86537 20.3272 10.6862 21 11.6395 21H12.3605C13.3138 21 14.1346 20.3272 14.3217 19.3924L14.8508 16.7482C14.9472 16.2663 15.2297 15.8484 15.5735 15.4972C16.456 14.5955 17 13.3613 17 12C17 9.23858 14.7614 7 12 7Z" />
                    <path d="M12 4V3" />
                    <path d="M18 6L19 5" />
                    <path d="M20 12H21" />
                    <path d="M4 12H3" />
                    <path d="M5 5L6 6" />
                    <path d="M10 17H14" />
                    <path opacity="0.15" d="M7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 13.3613 16.456 14.5955 15.5735 15.4972C15.2297 15.8484 14.9472 16.2663 14.8508 16.7482L14.8004 17H9.19961L9.14923 16.7482C9.05281 16.2663 8.77025 15.8484 8.42651 15.4972C7.54402 14.5955 7 13.3613 7 12Z" fill="currentColor" />
                  </svg>
                </div>
                <div className="hp-about-card-body">
                  <h3>Our Vision</h3>
                  <p>To be a leading workforce solutions provider recognized for delivering reliable, efficient, and innovative services across diverse industry sectors.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ===== SERVICES + FAQ ===== */}
      <section className="hp-services" id="services-preview">
        <div className="hp-container">
          <div className="hp-section-header">
            <p className="hp-section-eyebrow">What We Offer</p>
            <h2 className="hp-section-title">Comprehensive Workforce Solutions</h2>
            <p className="hp-section-subtitle">
              From technical manpower outsourcing to precision fabrication and strategic talent acquisition
            </p>
          </div>

          <div className="hp-services-grid">
            {services.map((svc, i) => (
              <div key={i} className="hp-service-card">
                <div className="hp-service-icon">
                  <i className={svc.icon} />
                </div>
                <h3>{svc.title}</h3>
                <p>{svc.desc}</p>
              </div>
            ))}
          </div>

          {/* FAQ Accordion */}
          <div className="hp-faq">
            {faqs.map((faq, i) => (
              <div
                key={i}
                className={`hp-faq-row ${activeFaq === i ? 'active' : ''}`}
              >
                <button
                  className="hp-faq-question"
                  onClick={() => setActiveFaq(activeFaq === i ? null : i)}
                  aria-expanded={activeFaq === i}
                >
                  {faq.question}
                  <svg className="hp-faq-chevron" viewBox="0 0 20 20" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                    <path d="M5 7.5L10 12.5L15 7.5" />
                  </svg>
                </button>
                <div className="hp-faq-answer">
                  <p>{faq.answer}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ===== INDUSTRIES ===== */}
      <section className="hp-industries" id="industries">
        <div className="hp-container">
          <div className="hp-section-header">
            <p className="hp-section-eyebrow">Industries We Serve</p>
            <h2 className="hp-section-title">Empowering Businesses Across Sectors</h2>
          </div>
        </div>
        <div className="hp-industries-track-wrapper">
          <div className="hp-industries-track">
            {/* Duplicate for infinite scroll */}
            {[...industries, ...industries].map((item, i) => (
              <div key={i} className="hp-industry-card">
                <img src={item.img} loading="lazy" alt={item.title} />
                <div className="hp-industry-card-body">
                  <h3>{item.title}</h3>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ===== MARQUEE STRIP ===== */}
      <div className="hp-marquee" aria-hidden="true">
        <div className="hp-marquee-track">
          {[...marqueeItems, ...marqueeItems].map((item, i) => (
            <span key={i} className="hp-marquee-item">
              {i > 0 && <span className="hp-marquee-dot" />}
              <i className={item.icon} />
              {item.text}
            </span>
          ))}
        </div>
      </div>

      {/* ===== CLIENTS ===== */}
      <section className="hp-clients" id="clients-preview">
        <div className="hp-container">
          <div className="hp-section-header">
            <p className="hp-section-eyebrow">Our Clients</p>
            <h2 className="hp-section-title">Trusted by Industry Leaders</h2>
          </div>
        </div>
        <div className="hp-clients-track-wrapper">
          <div className="hp-clients-track">
            {[...partners, ...partners].map((p, i) => (
              <div key={i} className="hp-client-card">
                <img src={`/images/partner/${p}.webp`} loading="lazy" alt={p} />
              </div>
            ))}
          </div>
        </div>
        <div className="hp-clients-cta">
          <Link to="/clients" className="hp-btn-outline">
            View All Clients
          </Link>
        </div>
      </section>

      {/* ===== PARTNER CTA ===== */}
      <section className="hp-partner-cta-sec">
        <div className="hp-container">
          <div className="hp-partner-cta-box">
            <div className="hp-partner-cta-copy">
              <span className="hp-partner-cta-eyebrow">Enterprise Solutions</span>
              <h2 className="hp-partner-cta-title">Interested in partnering with us?</h2>
              <p className="hp-partner-cta-subtitle">
                Connect with our operations controllers to request custom rates, compliant workforce structures, and formal corporate proposals.
              </p>
            </div>
            <div className="hp-partner-cta-action">
              <Link to="/contact" className="hp-partner-cta-btn">
                <span className="hp-partner-cta-btn-text">Get in Touch</span>
                <span className="hp-partner-cta-btn-circle">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.75" strokeLinecap="round" strokeLinejoin="round" className="hp-partner-cta-btn-arrow">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </span>
              </Link>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Home;
