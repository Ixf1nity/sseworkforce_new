import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

function About() {
  useSEO({
    title: 'About Us | 15+ Years of Workforce Excellence',
    description: 'Learn about SSE Workforce Services Pvt Ltd (est. 2011). We specialize in skilled, semi-skilled, unskilled, and highly-skilled manpower supply, alongside industrial fabrication and job works.',
    keywords: 'industrial workforce solutions, skilled labor supply, semi-skilled workforce, unskilled manpower outsourcing, highly-skilled technical manpower, industrial staffing services, factory labor contractors, precision fabrication services, job work contractor, technical staffing solutions, SSE Workforce, manpower supplier, manpower pune, labour contractor pune, chakan, midc, workforce, manpower'
  });

  const whyChooseUs = [
    { icon: 'fas fa-history', text: 'Experienced Industry Presence Since 2011' },
    { icon: 'fas fa-user-shield', text: 'Trusted and Professional Workforce Solutions' },
    { icon: 'fas fa-users-cog', text: 'Skilled Technical Manpower Across Multiple Industries' },
    { icon: 'fas fa-check-circle', text: 'Commitment to Quality, Safety, and Timely Delivery' },
    { icon: 'fas fa-tools', text: 'Customized Staffing and Fabrication Solutions' },
    { icon: 'fas fa-handshake', text: 'Client-Focused Approach with Long-Term Partnerships' },
  ];

  const marqueeItems = [
    { icon: 'fa fa-building', text: 'SSE Workforce Services Pvt Ltd' },
    { icon: 'fa fa-calendar', text: '15+ Years Experience' },
    { icon: 'fa fa-industry', text: '15+ Industry Sectors' },
    { icon: 'fa fa-handshake', text: '100+ Companies Served' },
    { icon: 'fa fa-users', text: 'Skilled Workforce Team' },
    { icon: 'fa fa-thumbs-up', text: 'High Client Retention' },
  ];

  return (
    <div className="hp-home">
      <PageBanner title="Company Profile" breadcrumbs={[{ label: 'Company Profile' }]} />

      {/* Our Story */}
      <div className="hp-about-page-story">
        <div className="hp-container">
          <div className="hp-story-grid">
            <div className="hp-story-copy">
              <h2>SSE Workforce Services Pvt Ltd</h2>
              <p>
                Welcome to <strong>SSE Workforce Services Pvt Ltd</strong>, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm "Shree Swami Samarth Enterprises," originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.
              </p>
              <p>
                With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses. Our expertise spans across Technical Manpower Outsourcing, Precision Job Work &amp; Fabrication, and Strategic Talent Acquisition, helping organizations improve productivity, operational efficiency, and workforce reliability.
              </p>
              <p>
                At SSE Workforce Services, we understand that every industry requires dependable manpower and precision-driven execution. Our dedicated team works closely with clients to provide qualified technical professionals, customized fabrication support, and strategic hiring solutions that align with business goals and project requirements.
              </p>
            </div>

            <div className="hp-story-images">
              <div className="hp-story-img-main">
                <img src="/images/banner/about3.webp" loading="lazy" alt="Industrial Work" />
              </div>
              <div className="hp-story-img-sub">
                <img src="/images/serve/industrial-work.webp" loading="lazy" alt="About Team" />
              </div>
              <div className="hp-story-badge">
                <div className="hp-story-badge-value">
                  15<span>+</span>
                </div>
                <div className="hp-story-badge-label">Years Of Excellence</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Marquee */}
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

      {/* Why Choose Us */}
      <section className="hp-why">
        <div className="hp-container">
          <div className="hp-section-header" style={{ textAlign: 'center', marginBottom: '48px' }}>
            <p className="hp-section-eyebrow">Why Choose Us</p>
            <h2 className="hp-section-title">WHY CHOOSE SSE WORKFORCE SERVICES?</h2>
          </div>

          <div className="hp-why-grid">
            {whyChooseUs.map((item, i) => (
              <div key={i} className="hp-why-card">
                <div className="hp-why-icon">
                  <i className={item.icon}></i>
                </div>
                <h3>{item.text}</h3>
              </div>
            ))}
          </div>

          <div className="hp-about-closing">
            <p>
              At SSE Workforce Services Pvt Ltd, we are committed to delivering reliable workforce and industrial solutions that empower businesses to grow efficiently and sustainably. Our mission is to become a preferred partner for manpower outsourcing, fabrication services, and talent acquisition by maintaining the highest standards of professionalism, integrity, and service excellence.
            </p>
            <h4>YOUR TRUSTED WORKFORCE PARTNER SINCE 2011</h4>
          </div>
        </div>
      </section>
    </div>
  );
}

export default About;
