import PageBanner from '../components/PageBanner';
import ContactForm from '../components/ContactForm';

function Contact() {
  return (
    <>
      <PageBanner
        title="Contact Us"
        breadcrumbs={[{ label: 'Contact Us' }]}
        image="/images/banner/contact-us-banner.webp"
      />

      {/* Contact Section */}
      <div className="recruiting-contact-area ptb-120">
        <div className="container">
          <div className="row justify-content-center g-4">
            {/* Contact Information */}
            <div className="col-xl-5 col-md-12">
              <div className="recruiting-contact-information">
                <div className="info">
                  <h3>Get In Touch</h3>
                  <ul className="list">
                    <li>
                      <div className="icon">
                        <i className="ri-phone-line"></i>
                      </div>
                      <div className="title">
                        <a href="tel:+917498914626">+917498914626</a>
                      </div>
                    </li>
                    <li>
                      <div className="icon">
                        <i className="ri-mail-line"></i>
                      </div>
                      <div className="title">
                        <a href="mailto:enquiry@sseworkforce.com">enquiry@sseworkforce.com</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div className="offices-info">
                  <br />
                  <div className="item wrap2">
                    <h5>Corporate Office</h5>
                    <span>
                      <a
                        href="https://maps.app.goo.gl/LMrPb2oTtVXQpgN26"
                        target="_blank"
                        rel="noopener noreferrer"
                        style={{ color: 'black' }}
                      >
                        ABC Palladium Shop No. 29 &amp; 30, MIDC Chakan Mahalunge, Tal Khed, Pune - 410501 (MH) India.
                      </a>
                    </span>
                  </div>
                  <br />
                </div>
              </div>
            </div>

            {/* Contact Form */}
            <div className="col-xl-7 col-md-12">
              <div className="recruiting-contact-form">
                <div className="content">
                  <h3>Send Us A Message</h3>
                  <p>Fill out the form below and our team will get back to you within 24 hours.</p>
                </div>
                <ContactForm />
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default Contact;
