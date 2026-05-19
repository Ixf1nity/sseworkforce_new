import PageBanner from '../components/PageBanner';
import CareerForm from '../components/CareerForm';

function Career() {
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
