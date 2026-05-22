import { useEffect } from 'react';
import { useLocation } from 'react-router-dom';
import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

function Services() {
  useSEO({
    title: 'Our Services | Technical Manpower Supply & Fabrication Solutions',
    description: 'We provide skilled, semi-skilled, unskilled, and highly-skilled manpower outsourcing, precision fabrication, CO2/ARC welding, and talent acquisition across Maharashtra.',
    keywords: 'technical manpower supply, labor supply services, skilled labor supply, semi-skilled workforce, unskilled manpower outsourcing, highly-skilled technical manpower, precision fabrication services, custom welding services, talent acquisition engineering, manpower pune, manpower chakan, manpower midc, manpower maharashtra, labour contractor pune, labour contractor chakan, labour contractor midc, labour contractor maharashtra, industrial manpower supply, industrial labour supply, chakan industrial area manpower, pune midc labour supplier, ranjangaon midc manpower, talegaon midc manpower supplier, bhosari midc labour contractor, welder supplier pune, fitter supplier chakan, co2 welder contractor pune, contract labour supply maharashtra, skilled worker supplier, semi skilled labour supply, helper supply chakan, workforce solutions maharashtra, fabrication job work chakan, industrial staffing supplier, plant operations manpower, sse workforce services'
  });

  const location = useLocation();

  // Scroll to hash on mount
  useEffect(() => {
    if (location.hash) {
      const el = document.getElementById(location.hash.replace('#', ''));
      if (el) {
        setTimeout(() => el.scrollIntoView({ behavior: 'smooth' }), 300);
      }
    }
  }, [location.hash]);

  const services = [
    {
      id: 'manpower',
      title: 'Technical Manpower Outsourcing',
      image: '/images/serve/Manpower Outsourcing.webp',
      description: 'This vertical addresses the critical need for skilled labor in high-stakes environments. By providing a flexible workforce, manufacturers can scale operations without the long-term overhead of permanent hiring.',
      features: [
        'Specialized Staffing: Access to certified Electricians, Fitters, Welders, and skilled Helpers.',
        'Operational Agility: Full-shift coverage (A/B/C) with rapid turnaround times for urgent requirements.',
        'Dynamic Deployment: Seamless migration of teams across different plant locations to meet fluctuating demands.',
      ],
      imageFirst: false,
    },
    {
      id: 'fabrication',
      title: 'Precision Job Work & Fabrication',
      image: '/images/serve/fabrication.webp',
      description: 'Focuses on the physical assembly and finishing of industrial components, utilizing varied welding and metal-processing techniques.',
      features: [
        'Advanced Welding: Expertise in ARC, Gas, and CO2 welding techniques for structural and component fabrication.',
        'Finishing Services: Industrial-grade grinding, deburring, and fender assembly finishing (sanding/buffing).',
        'Quality Assurance: Specialized teams for hardness punching and processing of semi-finished goods.',
      ],
      imageFirst: true,
    },
    {
      id: 'TalentAcquisition',
      title: 'Strategic Talent Acquisition',
      image: '/images/serve/talent.webp',
      description: 'A recruitment-focused service that bridges the gap between high-skill talent and the engineering/automation sectors.',
      features: [
        'Technical Recruitment: Sourcing and vetting high-skill labor for engineering and automation sectors.',
        'Scalable Hiring: Streamlined placement processes for both individual experts and large-scale technical teams.',
        'Industrial Placement: Connecting manufacturers with vetted specialists in metalwork and precision engineering.',
      ],
      imageFirst: false,
    },
  ];

  return (
    <div className="hp-home">
      <PageBanner title="Our Services" breadcrumbs={[{ label: 'Our Services' }]} />

      {services.map((service) => (
        <section key={service.id} id={service.id} className="hp-svc-section">
          <div className="hp-container">
            {service.imageFirst ? (
              <div className="hp-svc-grid">
                <div className="hp-svc-image">
                  <img src={service.image} loading="lazy" alt={service.title} />
                </div>
                <div className="hp-svc-copy">
                  <h2>{service.title}</h2>
                  <p>{service.description}</p>
                  <ul className="hp-svc-features">
                    {service.features.map((feat, i) => (
                      <li key={i}>
                        <i className="fa-solid fa-circle-check" />
                        <span>{feat}</span>
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            ) : (
              <div className="hp-svc-grid reverse">
                <div className="hp-svc-copy">
                  <h2>{service.title}</h2>
                  <p>{service.description}</p>
                  <ul className="hp-svc-features">
                    {service.features.map((feat, i) => (
                      <li key={i}>
                        <i className="fa-solid fa-circle-check" />
                        <span>{feat}</span>
                      </li>
                    ))}
                  </ul>
                </div>
                <div className="hp-svc-image">
                  <img src={service.image} loading="lazy" alt={service.title} />
                </div>
              </div>
            )}
          </div>
        </section>
      ))}
    </div>
  );
}

export default Services;
