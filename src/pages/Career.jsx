import PageBanner from '../components/PageBanner';
import CareerForm from '../components/CareerForm';
import useSEO from '../hooks/useSEO';

function Career() {
  useSEO({
    title: 'Careers & Job Openings | Join Our Workforce Team',
    description: 'Apply for job openings at SSE Workforce Services Private Limited. We hire skilled, semi-skilled, and technical professionals for top industries in Pune, Chakan, and Maharashtra.',
    keywords: 'sse workforce careers, job openings pune, chakan industrial jobs, recruitment labour pune, hire welders fitters helpers, apply for factory jobs, contract labor jobs chakan midc, career opportunities'
  });

  return (
    <div className="hp-home">
      <PageBanner title="Career" breadcrumbs={[{ label: 'Career' }]} />

      <section className="hp-form-section">
        <div className="hp-container">
          <div className="hp-section-header" style={{ textAlign: 'center', marginBottom: '40px' }}>
            <p className="hp-section-eyebrow">Careers at SSE</p>
            <h2 className="hp-section-title">Join Our Professional Workforce</h2>
            <p className="hp-section-subtitle">
              Build a successful career with Maharashtra's leading labor contractor. Apply for technical, engineering, fabrication, and manufacturing roles.
            </p>
          </div>
          <CareerForm />
        </div>
      </section>
    </div>
  );
}

export default Career;
