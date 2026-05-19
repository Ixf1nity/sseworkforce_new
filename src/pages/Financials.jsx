import PageBanner from '../components/PageBanner';
import useSEO from '../hooks/useSEO';

const financialData = [
  { year: '2025-26', revenue: '₹83.27 Cr', growth: '+50.6%', label: 'Audited' },
  { year: '2024-25', revenue: '₹55.30 Cr', growth: '+36.5%', label: 'Audited' },
  { year: '2023-24', revenue: '₹40.50 Cr', growth: '+32.8%', label: 'Audited' },
  { year: '2022-23', revenue: '₹30.50 Cr', growth: '+10.9%', label: 'Audited' },
  { year: '2021-22', revenue: '₹27.50 Cr', growth: '+31.0%', label: 'Audited' },
  { year: '2020-21', revenue: '₹21.00 Cr', growth: '+18.3%', label: 'Audited' },
  { year: '2019-20', revenue: '₹17.75 Cr', growth: '+34.0%', label: 'Audited' },
  { year: '2018-19', revenue: '₹13.25 Cr', growth: '+51.4%', label: 'Audited' },
  { year: '2017-18', revenue: '₹8.75 Cr', growth: '+34.6%', label: 'Audited' },
  { year: '2016-17', revenue: '₹6.50 Cr', growth: '+44.4%', label: 'Audited' },
  { year: '2015-16', revenue: '₹4.50 Cr', growth: '+63.6%', label: 'Audited' },
  { year: '2014-15', revenue: '₹2.75 Cr', growth: '+10.0%', label: 'Audited' },
  { year: '2013-14', revenue: '₹2.50 Cr', growth: '+7.3%', label: 'Audited' },
  { year: '2012-13', revenue: '₹2.33 Cr', growth: '+34.7%', label: 'Audited' },
  { year: '2011-12', revenue: '₹1.73 Cr', growth: 'N/A', label: 'Audited' },
];

function Financials() {
  useSEO({
    title: 'Our Financials | Solid Financial Standing & Solvency',
    description: 'Review the audited financial performance of SSE Workforce Services Private Limited. Discover our solid financial standing with revenue reaching ₹83.27 Cr in FY 2025-26.',
    keywords: 'sse workforce financials, corporate revenue, audited financial statements, labor contractor growth, financial stability labor supplier, financial records'
  });

  return (
    <>
      <PageBanner title="Financials" breadcrumbs={[{ label: 'Financials' }]} />

      <section className="finance-section">
        <div className="finance-inner">
          {/* Vertical Sidebar Text */}
          <div className="finance-sidebar">
            <h2 className="vertical-text">FINANCIAL GROWTH</h2>
          </div>

          <div className="finance-content">


            {/* Controls */}
            <div className="finance-controls">
              <div className="finance-controls-copy">
                <span className="finance-controls-label">
                  Showing complete fiscal data history
                </span>
                <p className="finance-controls-note">
                  Starts with the latest audited performance, then moves through earlier years.
                </p>
              </div>
            </div>

            {/* Grid Table */}
            <div className="finance-grid">
              <div className="grid-header">
                <div>Fiscal Year</div>
                <div>Revenue</div>
                <div>YoY Growth</div>
                <div>Verification</div>
              </div>

              {financialData.map((item, i) => (
                <div className="grid-row" key={i}>
                  <div className="year-col">{item.year}</div>
                  <div className="revenue-col">{item.revenue}</div>
                  <div className={`growth-col ${item.growth === 'N/A' ? 'neutral' : ''}`}>
                    {item.growth !== 'N/A' && <span className="growth-indicator"></span>}
                    {item.growth === 'N/A' ? 'Base Year' : item.growth}
                  </div>
                  <div className="status-col">
                    <span className={`status-dot ${item.label.toLowerCase()}`}></span>
                    {item.label}
                  </div>
                </div>
              ))}
            </div>

            <p className="finance-footer-note">
              * Figures represented in Indian Crores (Cr). Full audit reports available upon request.
            </p>
          </div>
        </div>
      </section>
    </>
  );
}

export default Financials;
