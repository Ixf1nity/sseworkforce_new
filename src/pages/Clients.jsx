import PageBanner from '../components/PageBanner';

function Clients() {
  const partners = [
    { src: 'partner1.webp' },
    { src: 'partner2.webp' },
    { src: 'partner3.webp' },
    { src: 'partner4.webp' },
    { src: 'partner5.webp' },
    { src: 'partner6.webp' },
    { src: 'partner7.webp' },
    { src: 'partner26.webp' },
    { src: 'partner25.webp' },
    { src: 'partner11.webp' },
    { src: 'partner12.webp' },
    { src: 'partner13.webp' },
    { src: 'partner14.webp' },
    { src: 'partner15.webp' },
    { src: 'partner16.webp' },
    { src: 'partner28.webp' },
    { src: 'partner21.webp' },
    { src: 'partner18.webp' },
    { src: 'partner19.webp' },
    { src: 'partner27.webp' },
    { src: 'partner30.jpg' },
    { src: 'partner29.png', bg: '#63cdfa' },
  ];

  return (
    <>
      <PageBanner title="Our Clients" breadcrumbs={[{ label: 'Clients' }]} />

      <div className="outsourcing-partner-area pb-120">
        <div className="container">
          <div className="clients-page-grid">
            {partners.map((p, i) => (
              <div
                key={i}
                className="clients-page-card"
                style={p.bg ? { backgroundColor: p.bg } : undefined}
              >
                <img
                  src={`/images/partner/${p.src}`}
                  loading="lazy"
                  alt={`Client ${i + 1}`}
                />
              </div>
            ))}
          </div>
        </div>
      </div>
    </>
  );
}

export default Clients;
