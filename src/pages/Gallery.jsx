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
    <>
      <PageBanner title="Gallery" breadcrumbs={[{ label: 'Gallery' }]} />

      <div className="ptb-120">
        <div className="container">
          <div className="section-title text-center mb-5">
            <span className="sub wrap2">Our Gallery</span>
            <h2 className="title-animation">Visual Journey of SSE Workforce</h2>
          </div>

          <div className="gallery-grid">
            {images.map((img, i) => (
              <div key={i} className="gallery-item">
                <img src={img.src} loading="lazy" alt={img.alt} />
              </div>
            ))}
          </div>
        </div>
      </div>
    </>
  );
}

export default Gallery;
