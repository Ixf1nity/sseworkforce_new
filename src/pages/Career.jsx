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
    <>
      <PageBanner title="Career" breadcrumbs={[{ label: 'Career' }]} />

      <section style={{ backgroundColor: 'whitesmoke', padding: '60px 0' }}>
        <div className="container">
          <CareerForm />
        </div>
      </section>
    </>
  );
}

export default Career;
