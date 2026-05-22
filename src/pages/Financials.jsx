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
    <div className="hp-home">
      <PageBanner title="Financials" breadcrumbs={[{ label: 'Financials' }]} />

      <section className="hp-financials">
        <div className="hp-container">
          <div className="hp-fin-inner">
            <div className="hp-fin-content">
              {/* Table Controls / Copy */}
              <div className="hp-fin-controls">
                <div>
                  <span className="hp-fin-label">Audited Fiscal Data History</span>
                  <p className="hp-fin-note">
                    Official financial performance records of SSE Workforce Services Pvt Ltd since our base year in 2011.
                  </p>
                </div>
              </div>

              {/* Polished Table */}
              <table className="hp-fin-table">
                <thead>
                  <tr>
                    <th>Fiscal Year</th>
                    <th>Revenue</th>
                    <th>YoY Growth</th>
                    <th>Verification</th>
                  </tr>
                </thead>
                <tbody>
                  {financialData.map((item, i) => (
                    <tr key={i}>
                      <td className="hp-fin-year">{item.year}</td>
                      <td className="hp-fin-revenue">{item.revenue}</td>
                      <td>
                        <span className={`hp-fin-growth ${item.growth === 'N/A' ? 'neutral' : ''}`}>
                          <span className="hp-fin-growth-arrow" />
                          {item.growth === 'N/A' ? 'Base Year' : item.growth}
                        </span>
                      </td>
                      <td>
                        <span className="hp-fin-status">
                          <span className="hp-fin-dot" />
                          {item.label}
                        </span>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>

              <p className="hp-fin-footer">
                * Figures represented in Indian Crores (Cr). All statements are verified by independent chartered accountants. Full audited reports are available to partners upon request.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default Financials;
