import { useEffect } from 'react';
import { useLocation } from 'react-router-dom';
import PageBanner from '../components/PageBanner';

function Services() {
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
        'Specialized Staffing : Access to certified Electricians, Fitters, Welders, and skilled Helpers.',
        'Operational Agility : Full-shift coverage (A/B/C) with rapid turnaround times for urgent requirements.',
        'Dynamic Deployment : Seamless migration of teams across different plant locations to meet fluctuating demands.',
      ],
      bg: '',
      imageFirst: false,
    },
    {
      id: 'fabrication',
      title: 'Precision Job Work & Fabrication',
      image: '/images/serve/fabrication.webp',
      description: 'Focuses on the physical assembly and finishing of industrial components, utilizing varied welding and metal-processing techniques.',
      features: [
        'Advanced Welding : Expertise in ARC, Gas, and CO2 welding techniques for structural and component fabrication.',
        'Finishing Services: Industrial-grade grinding, deburring, and fender assembly finishing (sanding/buffing).',
        'Quality Assurance: Specialized teams for hardness punching and processing of semi-finished goods.',
      ],
      bg: '#e8f4fa',
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
      bg: '',
      imageFirst: false,
    },
  ];

  return (
    <>
      <PageBanner title="Our Services" breadcrumbs={[{ label: 'Our Services' }]} />

      {services.map((service) => (
        <section key={service.id} id={service.id}>
          <div className="service-details-area" style={service.bg ? { backgroundColor: service.bg } : {}}>
            <div className="container">
              <div className="row justify-content-center g-4">
                {service.imageFirst && (
                  <div className="col-lg-4 col-md-12">
                    <div className="service-details-image h-100">
                      <img src={service.image} loading="lazy" className="object-fit-cover h-100" alt={service.title} />
                    </div>
                  </div>
                )}

                <div className="col-lg-8 col-md-12">
                  <div className="service-details-content">
                    <h2>{service.title}</h2>
                    <p>{service.description}</p>
                    <ul className="list">
                      {service.features.map((feat, i) => (
                        <li key={i}>
                          <i className="ri-check-line"></i>
                          <span>{feat}</span>
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>

                {!service.imageFirst && (
                  <div className="col-lg-4 col-md-12">
                    <div className="service-details-image h-100">
                      <img src={service.image} loading="lazy" className="object-fit-cover h-100" alt={service.title} />
                    </div>
                  </div>
                )}
              </div>
            </div>
          </div>
        </section>
      ))}
    </>
  );
}

export default Services;
