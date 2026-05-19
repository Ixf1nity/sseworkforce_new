import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import useSEO from '../hooks/useSEO';

function Home() {
  useSEO({
    title: 'SSE Workforce Services Private Limited | Industrial Manpower Supplier & Labor Contractor in Maharashtra',
    description: 'SSE Workforce Services Private Limited is Maharashtra\'s leading industrial labor contractor. We supply skilled, semi-skilled, unskilled, and highly-skilled manpower, alongside precision fabrication and job works in Maharashtra.',
    keywords: 'sse workforce services private limited, shree swami samarth enterprises, sse workforce, manpower supplier pune, manpower supplier chakan, manpower supplier ranjangaon, manpower supplier talegaon, manpower supplier bhosari, manpower supplier maharashtra, labor contractor pune, labor contractor chakan, labor contractor midc, labor contractor ranjangaon, labor contractor talegaon, labor contractor bhosari, labor contractor maharashtra, industrial manpower supply, industrial labour supply, skilled labor supply pune, skilled labor supply chakan, semi-skilled workforce supplier, unskilled manpower outsourcing pune, highly-skilled technical manpower, factory labor contractors, precision fabrication services, job work contractor, technical staffing solutions, manpower supplier in chakan midc, manpower supplier in ranjangaon midc, labour contractor in bhosari midc, industrial workforce solutions, contract labour supply maharashtra, welder supplier pune, fitter supplier chakan, grinder supplier pune, helper supply chakan, cnc operator supplier, assembly line workers supply, warehouse staff outsourcing, logistics labor contract, storekeeper supplier, electrician supplier pune, machinist supplier chakan, technician staffing, supervisor supply, contract labor compliance pune, payroll outsourcing services maharashtra, temporary staffing agency pune, permanent recruitment solutions, temp to hire staffing, third party payroll outsourcing, manufacturing labor contractor, automobile manpower supplier, engineering workforce solutions, forging industry labour supplier, foundry worker supply, plastics industry labor, electronics assembly staffing, steel plant manpower, packers and loaders outsourcing, material handling workers supply, pimpri chinchwad manpower supplier, pcmc labour contractor, hadapsar midc manpower, hinjewadi midc staffing, wagholi industrial labor, aurangabad midc labour supply, nashik midc manpower, nagpur industrial staffing, mumbai industrial manpower, fabrication job work chakan, structural fabrication contractor, co2 welder contractor pune, arc welding services chakan, gas welder supplier, metal finishing job work, deburring services pune, fender assembly finishing, hardness punching job work, semi finished goods processing, technical talent acquisition, engineering placement agency, freshers campus recruitment, iti placement drives, diploma placement drives, btech fresher hiring, industrial training and placement, best manpower agency in pune, top labour contractor in chakan, reliable staffing partner maharashtra, verified labor contractor, esic pf compliant contractor, authorized labour supplier pune, outsourced plant operations, industrial utility workers, quality inspection staffing, production line operators, automotive assembly line manpower, flexible workforce solutions, on demand labor supply, sse chakan manpower'
  });

  const [activeFaq, setActiveFaq] = useState(0);

  // Re-initialize Swiper, Bootstrap carousel, and scroll animations after React mounts
  useEffect(() => {
    // Re-init Swiper for Industries slider (main.js ran before React mounted the DOM)
    if (window.Swiper) {
      new window.Swiper('.recruiting-serve-slider', {
        loop: true,
        spaceBetween: 25,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        breakpoints: {
          0: { slidesPerView: 1 },
          576: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          992: { slidesPerView: 2 },
          1200: { slidesPerView: 4 },
        },
      });
    }

    // Re-init Bootstrap carousel
    if (window.bootstrap) {
      const bannerEl = document.getElementById('outsourcingBanner');
      if (bannerEl) {
        new window.bootstrap.Carousel(bannerEl, { interval: 5000, ride: 'carousel' });
      }
    }

    // Re-init scrollCue animations
    if (window.scrollCue) {
      window.scrollCue.init();
    }
  }, []);

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
    { img: '/images/serve/serve1.webp', title: 'Engineering and Automobile' },
    { img: '/images/serve/serve2.webp', title: 'Forging Industry' },
    { img: '/images/serve/serve4.webp', title: 'Foundries' },
    { img: '/images/serve/serve6.webp', title: 'Service Industries' },
    { img: '/images/serve/mall.webp', title: 'Shopping Complexes' },
    { img: '/images/serve/rubber (2).webp', title: 'Rubber Industries' },
    { img: '/images/serve/Aluform Work.webp', title: 'Aluform Work' },
    { img: '/images/serve/plastics-industries.webp', title: 'Plastic Industries' },
    { img: '/images/serve/stiching-industries.webp', title: 'Stitching Industries' },
    { img: '/images/serve/industrial-work.webp', title: 'Industrial Work' },
    { img: '/images/serve/Electrical-Electronics-Manufacturers.webp', title: 'Electrical & Electronics Manufacturers' },
  ];

  const partners = [
    'partner1', 'partner2', 'partner3', 'partner4', 'partner5', 'partner6', 'partner7', 'partner25',
  ];

  const stats = [
    { value: '3000+', label: 'Skilled Workforce Strength' },
    { value: '15+', label: 'Industry Experience Since 2011' },
    { value: '20+', label: 'Trusted Across Multiple Industries' },
    { value: '25+', label: 'Total Clients Served' },
  ];

  return (
    <>
      {/* Hero Banner Carousel */}
      <div id="outsourcingBanner" className="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div className="carousel-indicators">
          <button type="button" data-bs-target="#outsourcingBanner" data-bs-slide-to="0" className="active"></button>
          <button type="button" data-bs-target="#outsourcingBanner" data-bs-slide-to="1"></button>
        </div>
        <div className="carousel-inner">
          <div className="carousel-item active">
            <div className="outsourcing-banner-area banner-1">
              <div className="container-fluid">
                <div className="outsourcing-banner-content section-title-animation animation-style1">
                  <div className="row align-items-center g-4">
                    <div className="col-lg-12 col-md-12">
                      <span className="sub">Welcome To SSE Workforce</span>
                      <h2 className="title-animation">Expert Manpower for Engineering Job Works</h2>
                      <Link to="/about" className="default-btn">Read More</Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="carousel-item">
            <div className="outsourcing-banner-area banner-2">
              <div className="container-fluid">
                <div className="outsourcing-banner-content section-title-animation animation-style1">
                  <div className="row align-items-center g-4">
                    <div className="col-lg-12 col-md-12">
                      <span className="sub">Skilled Workforce Solutions</span>
                      <h2 className="title-animation">Reliable Engineering Manpower Services</h2>
                      <Link to="/services" className="default-btn">Read More</Link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* About Section */}
      <div className="outsourcing-about-area ptb-120">
        <div className="container">
          <div className="row justify-content-center align-items-center g-4">
            <div className="col-xl-5 col-md-12">
              <div className="outsourcing-about-content section-title-animation animation-style2">
                <span className="sub">About SSE Workforce</span>
                <h2 className="mod">
                  Manpower Solutions Across All Industries
                  <br />
                  <span style={{ color: 'blue', fontWeight: 600, fontSize: '17px' }}>
                    Formerly Shree Swami Samarth Enterprises
                  </span>
                </h2>
                <p style={{ textAlign: 'justify' }}>
                  Welcome to SSE Workforce Services Pvt Ltd, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm "Shree Swami Samarth Enterprises," originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.
                </p>
                <br />
                <p style={{ textAlign: 'justify' }}>
                  With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses...
                </p>
                <br />
                <Link to="/about" className="click-btn">Explore More</Link>
              </div>
            </div>

            <div className="col-xl-7 col-md-12">
              <div className="outsourcing-about-inner-content">
                <div className="row justify-content-center g-4">
                  <div className="col-lg-6 col-md-6">
                    <div className="left">
                      <h3 className="mis">Our Mission</h3>
                      <p style={{ textAlign: 'justify' }}>
                        To provide high-quality manpower and workforce services that meet the evolving needs of industries by ensuring professionalism, integrity, and excellence in every engagement.
                      </p>
                      <img src="/images/about/about8.webp" loading="lazy" alt="Mission" />
                    </div>
                  </div>
                  <div className="col-lg-6 col-md-6">
                    <div className="right">
                      <img src="/images/about/about9.webp" loading="lazy" alt="Vision" />
                      <h3 className="mis">Our Vision</h3>
                      <p style={{ textAlign: 'justify' }}>
                        To be a leading workforce solutions provider recognized for delivering reliable, efficient, and innovative services across diverse industry sectors, while building long-term trust with our clients and partners.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Industries We Serve */}
      <div className="recruiting-serve-area ptb-120">
        <div className="container">
          <div className="section-title text-center section-title-animation animation-style2">
            <span className="sub wrap2">Industries We Serve</span>
            <h2 className="title-animation">Empowering Businesses with Skilled Manpower Across Industries</h2>
          </div>
        </div>
        <div className="container-fluid">
          <div className="swiper recruiting-serve-slider">
            <div className="swiper-wrapper">
              {industries.map((item, i) => (
                <div key={i} className="swiper-slide">
                  <div className="recruiting-serve-card">
                    <img src={item.img} loading="lazy" alt={item.title} />
                    <div className="content">
                      <h3>{item.title}</h3>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>

      {/* Stats */}
      <div className="outsourcing-fun-area pb-120">
        <div className="container">
          <div className="row justify-content-center g-4">
            {stats.map((stat, i) => (
              <div key={i} className="col-lg-3 col-sm-6">
                <div className="outsourcing-fun-card">
                  <div className="d-flex align-items-center justify-content-center">
                    <h3 className="counter">{stat.value.replace('+', '')}</h3>
                    <h3 className="plus">+</h3>
                  </div>
                  <span>{stat.label}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>

      {/* Marquee Banner */}
      <div className="view-area wrap-style2">
        <h1>
          <span><i className="fa fa-building"></i> SSE Workforce Services Pvt Ltd</span>
          <span className="gap"></span>
          <span><i className="fa fa-calendar"></i> 15+ Years Experience</span>
          <span className="gap"></span>
          <span><i className="fa fa-industry"></i> 15+ Industry Sectors</span>
          <span className="gap"></span>
          <span><i className="fa fa-handshake"></i> 25+ Companies Served</span>
          <span className="gap"></span>
          <span><i className="fa fa-users"></i> Skilled Workforce Team</span>
          <span className="gap"></span>
          <span><i className="fa fa-thumbs-up"></i> High Client Retention</span>
        </h1>
      </div>

      {/* What We Offer (FAQ) */}
      <div className="outsourcing-solutions-area ptb-120">
        <div className="container">
          <div className="row justify-content-center align-items-center g-4">
            <div className="col-lg-6 col-md-12">
              <div className="outsourcing-solutions-content section-title-animation animation-style2">
                <h2 className="title-animation">What We Offer</h2>
                <img src="/images/solutions.webp" loading="lazy" alt="Solutions" />
              </div>
            </div>
            <div className="col-lg-6 col-md-12">
              <section className="faq-section">
                {faqs.map((faq, i) => (
                  <div key={i} className={`faq-box ${activeFaq === i ? 'active' : ''}`} onClick={() => setActiveFaq(i)}>
                    <div className="faq-question">
                      {faq.question}
                      <span>{activeFaq === i ? '−' : '+'}</span>
                    </div>
                    <div className="faq-answer">
                      <p>{faq.answer}</p>
                    </div>
                  </div>
                ))}
              </section>
            </div>
          </div>
        </div>
      </div>

      {/* Clients Section */}
      <div className="outsourcing-partner-area pb-120">
        <div className="container">
          <div className="section-title text-center section-title-animation animation-style2">
            <span className="sub wrap2">Our Clients</span>
            <h2 className="title-animation">Our Valuable Clients</h2>
          </div>

          <section className="clients">
            <div className="client-slider">
              <div className="client-track">
                {/* Original + Duplicate for loop */}
                {[...partners, ...partners].map((p, i) => (
                  <div key={i} className="client-card">
                    <img src={`/images/partner/${p}.webp`} loading="lazy" alt={p} />
                  </div>
                ))}
              </div>
            </div>

            <div className="view-more-btn">
              <Link to="/clients">
                View More <i className="fa-solid fa-arrow-right"></i>
              </Link>
            </div>
          </section>
        </div>
      </div>
    </>
  );
}

export default Home;
