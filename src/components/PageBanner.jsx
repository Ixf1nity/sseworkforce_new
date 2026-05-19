import { Link } from 'react-router-dom';

function PageBanner({ title, breadcrumbs = [], image = '/images/team.webp' }) {
  return (
    <div className="page-banner-area">
      <div className="container-fluid">
        <div className="row justify-content-center align-items-center g-4">
          <div className="col-xl-8 col-md-12">
            <div className="page-banner-content">
              <div className="image">
                <img src={image} loading="lazy" alt={title} />
              </div>
            </div>
          </div>
          <div className="col-xl-4 col-md-12">
            <div className="page-banner-right-content">
              <div className="page-banner-content">
                <div className="content section-title-animation animation-style1">
                  <h2 className="title-animation">{title}</h2>
                  <ul className="list">
                    <li><Link to="/">Home</Link></li>
                    {breadcrumbs.map((crumb, i) => (
                      <li key={i}>
                        {crumb.link ? (
                          <Link to={crumb.link}>{crumb.label}</Link>
                        ) : (
                          crumb.label
                        )}
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default PageBanner;
