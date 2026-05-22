import { Link } from 'react-router-dom';

function PageBanner({ title, breadcrumbs = [] }) {
  return (
    <div className="hp-page-header">
      <div className="hp-container hp-page-header-inner">
        <ul className="hp-breadcrumb">
          <li>
            <Link to="/">Home</Link>
          </li>
          {breadcrumbs.map((crumb, i) => (
            <span key={i} style={{ display: 'contents' }}>
              <span className="hp-breadcrumb-sep">/</span>
              <li>
                {crumb.link ? (
                  <Link to={crumb.link}>{crumb.label}</Link>
                ) : (
                  crumb.label
                )}
              </li>
            </span>
          ))}
        </ul>
        <h1 className="hp-page-title">{title}</h1>
      </div>
    </div>
  );
}

export default PageBanner;
