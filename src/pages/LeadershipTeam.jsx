import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

function LeadershipTeam() {
  useSEO({
    title: 'Our Leadership | Consolidated experience of over 40+ years',
    description: 'Meet the executive leadership team, directors, and operations managers of SSE Workforce Services, bringing a consolidated experience of over 40+ years in industrial workforce management across Maharashtra.',
    keywords: 'our leadership, sse workforce directors, hanumant bawkar, malharee sutar, hanumant sutar, ramesh sutar, industrial management team, workforce operations maharashtra, executive board'
  });

  const leaders = [
    {
      name: 'Hanumant Bawkar',
      role: 'MD & Founder',
      image: '/images/hanumantbawkar.jpg',
      email: 'hanumant.bawkar@sseworkforce.com',
      bio: 'A founding pillar of the company with 20+ years in the automotive and engineering sectors. He leads overall operations and defines the strategic vision that drives our industrial growth. Through his technical expertise, he ensures that our workforce solutions remain aligned with the evolving demands of industrial culture.',
    },
    {
      name: 'Malharee Sutar',
      role: 'Strategy Director',
      image: '/images/malhari_s.jpg',
      email: 'smalharee@sseworkforce.com',
      bio: 'A techno-commercial expert and Pune University MBA with over two decades in business operations. He spearheads corporate expansion and strategic planning, leveraging additional leadership experience from the pharmaceutical sector.',
    },
    {
      name: 'Hanumant Sutar',
      role: 'Operations Director',
      image: '/images/hanumantsutar.jpg',
      email: 'shanumant@sseworkforce.com',
      bio: 'A techno-commercial professional with nearly a decade of experience in the automotive and engineering sectors. He is responsible for overseeing the company\'s daily operations and streamlining industrial workflows.',
    },
    {
      name: 'Ramesh Sutar',
      role: 'Operations Controller',
      image: '/images/ramesh_sutar.webp',
      email: 'sramesh@sseworkforce.com',
      bio: 'An experienced operational leader with over 15 years of industry expertise. He manages all client site affairs and provides dedicated supervision to our on-ground teams, ensuring seamless service delivery, efficient workflows, and high-quality workforce performance at every location.',
    },
  ];

  return (
    <div className="hp-home">
      <PageBanner title="Leadership Team" breadcrumbs={[{ label: 'Leadership Team' }]} />

      <section className="hp-leadership">
        <div className="hp-container">
          <div className="hp-section-header" style={{ marginBottom: '48px' }}>
            <p className="hp-section-eyebrow">Our Executive Board</p>
            <h2 className="hp-section-title">Leadership Team</h2>
            <p className="hp-section-subtitle">
              Combining collective expertise in industrial operations, corporate strategy, and workforce administration.
            </p>
          </div>

          <div className="hp-leader-grid">
            {leaders.map((leader, i) => (
              <div key={i} className="hp-leader-card">
                <div className="hp-leader-left">
                  <div className="hp-leader-avatar">
                    <img src={leader.image} loading="lazy" alt={leader.name} />
                  </div>
                  <span className="hp-leader-role">{leader.role}</span>
                  <h3 className="hp-leader-name">{leader.name}</h3>
                  <a href={`mailto:${leader.email}`} className="hp-leader-email">
                    <i className="fa-solid fa-envelope" /> Email Me
                  </a>
                </div>
                <div className="hp-leader-right">
                  <p className="hp-leader-bio">{leader.bio}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}

export default LeadershipTeam;
