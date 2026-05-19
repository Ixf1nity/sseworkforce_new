import PageBanner from '../components/PageBanner';

function About() {
  const whyChooseUs = [
    { icon: 'fas fa-history', text: 'Experienced Industry Presence Since 2011' },
    { icon: 'fas fa-user-shield', text: 'Trusted and Professional Workforce Solutions' },
    { icon: 'fas fa-users-cog', text: 'Skilled Technical Manpower Across Multiple Industries' },
    { icon: 'fas fa-check-circle', text: 'Commitment to Quality, Safety, and Timely Delivery' },
    { icon: 'fas fa-tools', text: 'Customized Staffing and Fabrication Solutions' },
    { icon: 'fas fa-handshake', text: 'Client-Focused Approach with Long-Term Partnerships' },
  ];

  return (
    <>
      <PageBanner title="About Us" breadcrumbs={[{ label: 'About Us' }]} />

      {/* Our Story */}
      <div className="recruiting-about-area ptb-120 overflow-hidden">
        <div className="container">
          <div className="section-title text-center mb-5">
            <span className="sub wrap2 fw-bold text-uppercase" style={{ color: 'white' }}>Our Story</span>
            <h2 className="title-animation display-5 fw-bold mx-auto" style={{ maxWidth: '1100px' }}>
              SSE Workforce Services Pvt Ltd
            </h2>
          </div>

          <div className="row align-items-center g-5">
            <div className="col-xl-6 col-lg-12">
              <div className="recruiting-about-left-content">
                <div className="inner mb-4">
                  <p className="fs-6 text-muted mb-3" style={{ textAlign: 'justify' }}>
                    Welcome to <strong>SSE Workforce Services Pvt Ltd</strong>, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm "Shree Swami Samarth Enterprises," originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.
                  </p>
                  <p className="fs-6 text-muted mb-3" style={{ textAlign: 'justify' }}>
                    With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses. Our expertise spans across Technical Manpower Outsourcing, Precision Job Work &amp; Fabrication, and Strategic Talent Acquisition, helping organizations improve productivity, operational efficiency, and workforce reliability.
                  </p>
                  <p className="fs-6 text-muted" style={{ textAlign: 'justify' }}>
                    At SSE Workforce Services, we understand that every industry requires dependable manpower and precision-driven execution. Our dedicated team works closely with clients to provide qualified technical professionals, customized fabrication support, and strategic hiring solutions that align with business goals and project requirements.
                  </p>
                </div>
              </div>
            </div>

            <div className="col-xl-6 col-lg-12">
              <div className="recruiting-about-image-wrapper">
                <div className="image-main">
                  <img src="/images/banner/about3.webp" loading="lazy" className="img-fluid rounded-4 shadow" alt="Industrial Work" />
                </div>
                <div className="image-sub">
                  <img src="/images/serve/industrial-work.webp" loading="lazy" className="img-fluid rounded-4 shadow border border-white border-5" alt="About Team" />
                  <div className="fun-box-overlay shadow">
                    <div className="d-flex align-items-center justify-content-center">
                      <h3 className="counter mb-0" style={{ color: 'white' }}>15</h3>
                      <h3 className="plus mb-0" style={{ color: 'white' }}>+</h3>
                    </div>
                    <span className="small fw-bold">Years Of Excellence</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Marquee */}
      <div className="view-area wrap-style2">
        <h1>
          <span><i className="fa fa-building"></i> SSE Workforce Services Pvt Ltd</span>
          <span className="gap"></span>
          <span><i className="fa fa-calendar"></i> 14+ Years Experience</span>
          <span className="gap"></span>
          <span><i className="fa fa-industry"></i> 15+ Industry Sectors</span>
          <span className="gap"></span>
          <span><i className="fa fa-handshake"></i> 100+ Companies Served</span>
          <span className="gap"></span>
          <span><i className="fa fa-users"></i> Skilled Workforce Team</span>
          <span className="gap"></span>
          <span><i className="fa fa-thumbs-up"></i> High Client Retention</span>
        </h1>
      </div>

      <br /><br />

      {/* Why Choose Us */}
      <section className="why-choose-us py-5" style={{ backgroundColor: '#f0f4f8' }}>
        <div className="container py-5">
          <div className="text-center mb-5">
            <h2 className="fw-bold mb-3" style={{ fontFamily: "'Outfit', sans-serif", letterSpacing: '1px' }}>
              WHY CHOOSE SSE WORKFORCE SERVICES?
            </h2>
            <div className="mx-auto" style={{ width: '100px', height: '4px', background: '#0072BC', borderRadius: '2px' }}></div>
          </div>

          <div className="row g-4">
            {whyChooseUs.map((item, i) => (
              <div key={i} className="col-lg-4 col-md-6">
                <div className="sse-creative-card">
                  <div className="sse-icon">
                    <i className={item.icon}></i>
                  </div>
                  <div className="sse-content">
                    <h6>{item.text}</h6>
                  </div>
                </div>
              </div>
            ))}
          </div>

          <div className="text-center mt-5 px-lg-5">
            <p className="fst-italic text-muted" style={{ maxWidth: '900px', margin: 'auto', fontSize: '0.95rem' }}>
              At SSE Workforce Services Pvt Ltd, we are committed to delivering reliable workforce and industrial solutions that empower businesses to grow efficiently and sustainably. Our mission is to become a preferred partner for manpower outsourcing, fabrication services, and talent acquisition by maintaining the highest standards of professionalism, integrity, and service excellence.
            </p>
            <h5 className="fw-bold mt-4" style={{ color: '#0072BC', letterSpacing: '2px' }}>
              YOUR TRUSTED WORKFORCE PARTNER SINCE 2011
            </h5>
          </div>
        </div>
      </section>
    </>
  );
}

export default About;
