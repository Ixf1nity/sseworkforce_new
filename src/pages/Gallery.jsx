import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

function Gallery() {
  useSEO({
    title: 'Our Gallery | Industrial Operations & Workforce in Action',
    description: 'View our visual gallery showcasing SSE Workforce Services Private Limited\'s skilled laborers, engineering teams, custom fabrication job sites, and industrial operations in Maharashtra.',
    keywords: 'sse workforce gallery, industrial labor images, fabrication shop photos, contract workers in action, on-site labor photos, industrial safety photos, chakan midc workplace gallery, pune labor supply photos'
  });

  const images = [
    { src: '/images/img1.webp', alt: 'Gallery 1' },
    { src: '/images/img2.webp', alt: 'Gallery 2' },
    { src: '/images/img3.webp', alt: 'Gallery 3' },
    { src: '/images/img4.webp', alt: 'Gallery 4' },
    { src: '/images/img5.webp', alt: 'Gallery 5' },
    { src: '/images/img6.webp', alt: 'Gallery 6' },
    { src: '/images/img7.webp', alt: 'Gallery 7' },
    { src: '/images/img8.webp', alt: 'Gallery 8' },
    { src: '/images/img9.webp', alt: 'Gallery 9' },
    { src: '/images/img10.webp', alt: 'Gallery 10' },
    { src: '/images/img11.webp', alt: 'Gallery 11' },
    { src: '/images/img12.webp', alt: 'Gallery 12' },
  ];

  return (
    <div className="hp-home">
      <PageBanner title="Gallery" breadcrumbs={[{ label: 'Gallery' }]} />

      <section className="hp-gallery-section">
        <div className="hp-container">
          <div className="hp-section-header" style={{ textAlign: 'center', marginBottom: '48px' }}>
            <p className="hp-section-eyebrow">Our Gallery</p>
            <h2 className="hp-section-title">Visual Journey of SSE Workforce</h2>
            <p className="hp-section-subtitle">
              A glimpse into our daily industrial operations, custom fabrication workshops, and highly trained technical manpower teams.
            </p>
          </div>

          <div className="hp-gallery-grid">
            {images.map((img, i) => (
              <div key={i} className="hp-gallery-card">
                <div className="hp-gallery-image-wrapper">
                  <img src={img.src} loading="lazy" alt={img.alt} />
                  <div className="hp-gallery-overlay">
                    <span className="hp-gallery-tag">SSE Operations</span>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}

export default Gallery;
