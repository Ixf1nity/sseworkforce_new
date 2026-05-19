<?php 
include('./common-function.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php main_links();?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>SSE Workforce Services Private Limited</title>

</head>

<body>
       <!-- Start Navbar Area -->
    <nav class="navbar navbar-expand-xl bg-F8FAFC" id="navbar">
        <div class="container-fluid" bis_skin_checked="1">
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/images/Logo.webp" loading="lazy" alt="logo" style="width: 170px;">
            </a>
            <!-- Toggle Button -->
        <button class="mobile-toggle-btn"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">

            <span></span>
            <span></span>
            <span></span>

        </button>
            <div class="collapse navbar-collapse" bis_skin_checked="1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./index.php" class="dropdown-toggle nav-link ">
                            Home

                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="dropdown-toggle nav-link active">
                            About Us
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu" style="width: 200px;">
                            <li class="nav-item">
                                <a href="./about-us.php" class="nav-link">Company Profile </a>
                            </li>
                            <li class="nav-item">
                                <a href="./leadership_team.php" class="nav-link">Leadership Team</a>
                            </li>
                              <li class="nav-item">
                                <a href="./financials.php" class="nav-link">Financials</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
       Services
                            <i class="ri-arrow-down-s-line"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="./services.php#manpower" class="nav-link">Technical Manpower
                                    Outsourcing</a>
                            </li>
                            <li class="nav-item">
                                <a href="./services.php#fabrication" class="nav-link">Precision Job Work &
                                    Fabrication</a>
                            </li>
                            <li class="nav-item">
                                <a href="./services.php#TalentAcquisition" class="nav-link">Strategic Talent
                                    Acquisition</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="./gallery.php" class="dropdown-toggle nav-link">
                            Gallery

                        </a>

                    </li>
                     <li class="nav-item">
                        <a href="./clients.php" class="dropdown-toggle nav-link">
                 Clients
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="./career.php" class="nav-link">Career</a>
                    </li>
                   <li class="nav-item">
                        <a href="./campus.php" class="nav-link">College Campus Recruitment</a>
                    </li>
                </ul>
                <div class="others-option d-flex align-items-center">

                

                 <div class="option-item">
    <a href="./contact-us.php" class="default-btn1 enquiry-btn-custom">Enquire Now</a>
</div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Area -->
     <style>
/* Normal State */
.navbar-nav .nav-link {
    color: #1d2d35 !important; /* Default Dark Color */
    font-weight: 500;
    transition: 0.3s;
}

/* Active State - Blue Color */
.navbar-nav .nav-link.active {
    color: #015192 !important; /* Aapka theme blue color */
    font-weight: 700;
    border-bottom: 2px solid #015192; /* Optional: Niche line dikhane ke liye */
}

/* Dropdown ke andar active item ka style */
.dropdown-menu .nav-link.active {
    background-color: #f8fafc;
    color: #015192 !important;
    border-bottom: none;
}
</style>
<style>
    
    /* New Custom Button Class */
.enquiry-btn-custom {
    color: #ffffff !important;
    background-color: #013a68; /* Deep Blue */
    letter-spacing: 0.3px;
    padding: 12px 25px;
    display: inline-block;
    text-decoration: none;
    border-radius: 5px; /* Thoda rounded look ke liye */
    transition: all 0.3s ease; /* Smooth hover transition */
    border: 1px solid transparent; /* Border layout jump rokne ke liye */
    font-weight: 500;
}

/* Hover Effect */
.enquiry-btn-custom:hover {
    background-color: #0a7dac; /* Sky Blue/Light Blue */
    color: #ffffff !important;
    transform: translateY(-2px); /* Subtle lift effect */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
</style>
<!-- ================= MOBILE MENU START ================= -->




<!-- Mobile Sidebar -->
<div class="offcanvas offcanvas-end mobile-sidebar"
    tabindex="-1"
    id="mobileMenu">

    <!-- Header -->
    <div class="offcanvas-header">

        <a href="./index.php">
            <img src="./assets/images/Logo.webp" loading="lazy"
                alt="logo"
                class="mobile-logo">
        </a>

        <button type="button"
            class="btn-close shadow-none"
            data-bs-dismiss="offcanvas">
        </button>

    </div>

    <!-- Body -->
    <div class="offcanvas-body">

        <ul class="mobile-menu">

            <!-- Home -->
            <li>
                <a href="./index.php" class="active">
                    Home
                </a>
            </li>

            <!-- About -->
            <li class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                    data-bs-toggle="collapse"
                    data-bs-target="#aboutMenu">

                    About Us
                    <span>+</span>

                </button>

                <ul class="collapse mobile-submenu"
                    id="aboutMenu">

                    <li>
                        <a href="./about-us.php">
                            Company Profile
                        </a>
                    </li>

                    <li>
                       <a href="leadership_team.php">Leadership Team</a>
                    </li>

                    <li>
                        <a href="./financials.php">
                            Financials
                        </a>
                    </li>

                </ul>

            </li>

            <!-- Services -->
            <li class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                    data-bs-toggle="collapse"
                    data-bs-target="#servicesMenu">

                    Services
                    <span>+</span>

                </button>

                <ul class="collapse mobile-submenu"
                    id="servicesMenu">

                    <li>
                        <a href="./services.php#manpower">
                            Technical Manpower Outsourcing
                        </a>
                    </li>

                    <li>
                        <a href="./services.php#fabrication">
                            Precision Job Work & Fabrication
                        </a>
                    </li>

                    <li>
                        <a href="./services.php#TalentAcquisition">
                            Strategic Talent Acquisition
                        </a>
                    </li>

                </ul>

            </li>

            <!-- Gallery -->
            <li>
                <a href="./gallery.php">
                    Gallery
                </a>
            </li>

            <!-- Clients -->
            <li>
                <a href="./clients.php">
                    Clients
                </a>
            </li>

            <!-- Career -->
            <li>
                <a href="./career.php">
                    Career
                </a>
            </li>
  <li>
                <a href="./campus.php">
                    College Campus Recruitment
                </a>
            </li>
        </ul>


        <!-- Contact Area -->
        <div class="mobile-contact-area">

            <a href="./contact-us.php"
                class="mobile-enquiry-btn">

                Enquire Now

            </a>

            <div class="mobile-call-area">

                <span>Call Us Now</span>

              
                <a href="tel:+917498914626">
                  +917498914626
                </a>

            </div>

        </div>

    </div>

</div>

<!-- ================= MOBILE MENU END ================= -->


<style>

/* ================= MOBILE NAVBAR ================= */

.mobile-navbar {
    background: #ffffff;
    padding: 12px 15px;
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.mobile-navbar-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.mobile-brand img {
    width: 140px;
}

/* ================= TOGGLE BUTTON ================= */

/* Mobile Toggle Button */
.mobile-toggle-btn{
    display: none; /* Default hidden */
    border: none;
    background: transparent;
    flex-direction: column;
    gap: 5px;
    padding: 5px;
}

/* Burger Lines */
.mobile-toggle-btn span{
    width: 28px;
    height: 3px;
    background: #013a68;
    display: block;
    border-radius: 10px;
}

/* Only Show On Mobile */
@media (max-width: 991px){

    .mobile-toggle-btn{
        display: flex;
    }

}

/* ================= SIDEBAR ================= */

.mobile-sidebar {
    width: 320px;
    background: #fff;
}

.mobile-logo {
    width: 140px;
}

/* ================= MENU ================= */

.mobile-menu {
    padding: 0;
    margin: 0;
    list-style: none;
}

.mobile-menu li {
    border-bottom: 1px solid #f1f1f1;
}

.mobile-menu li a,
.mobile-dropdown-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 5px;
    text-decoration: none;
    color: #1d2d35;
    background: transparent;
    border: none;
    font-size: 15px;
    font-weight: 500;
    transition: 0.3s;
}

.mobile-menu li a:hover,
.mobile-menu li a.active,
.mobile-dropdown-btn:hover {
    color: #015192;
    padding-left: 10px;
}

/* ================= SUBMENU ================= */

.mobile-submenu {
    list-style: none;
    padding-left: 15px;
    background: #f8fafc;
}

.mobile-submenu li {
    border-bottom: none;
}

.mobile-submenu a {
    padding: 12px 0;
    display: block;
    color: #555;
    font-size: 14px;
}

/* ================= CONTACT AREA ================= */

.mobile-contact-area {
    margin-top: 30px;
}

.mobile-enquiry-btn {
    width: 100%;
    display: block;
    background: #013a68;
    color: #fff;
    text-align: center;
    padding: 14px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

.mobile-enquiry-btn:hover {
    background: #0a7dac;
    color: #fff;
}

.mobile-call-area {
    text-align: center;
    margin-top: 25px;
}

.mobile-call-area span {
    display: block;
    color: #888;
    font-size: 13px;
    margin-bottom: 5px;
}

.mobile-call-area a {
    color: #1d2d35;
    font-weight: 600;
    text-decoration: none;
}

/* ================= RESPONSIVE ================= */

@media(min-width:1200px){
    .mobile-navbar,
    .mobile-sidebar{
        display:none;
    }
}

</style>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center g-4" data-cues="slideInUp" data-duration="1000">
                <div class="col-xl-8 col-md-12">
                    <div class="page-banner-content">

                        <div class="image">
                            <img src="./assets/images/team.webp" loading="lazy" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="page-banner-right-content">

                        <div class="page-banner-content">
                            <div class="content section-title-animation animation-style1">
                                <h2 class="title-animation"> Leadership Team</h2>
                                <ul class="list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>Leadership Team</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><section class="leadership-section">
    <div class="glass-container">
        <div class="header-box">
            <h2>Leadership Team</h2>
            <p>Combining 15+ years of collective expertise in industrial operations.</p>
        </div>

        <div class="leader-grid">
            <!-- Profile 1 -->
            <div class="leader-card">
                <div class="card-left">
                    <div class="profile-img">
                        <img src="assets/images/hanumantbawkar.jpg" loading="lazy" alt="Hanumant Bawkar">
                    </div>
                    <span class="id-tag">MD & Founder</span>
                    <h3>Hanumant Bawkar</h3>
                    <a href="mailto:hanumant.bawkar@sseworkforce.com" class="mail-link">
                        <span class="icon">✉</span> Email Me
                    </a>
                </div>
                <div class="card-right">
                    <p class="leader-bio">A founding pillar of the company with 20+ years in the automotive and engineering sectors. He leads overall operations and defines the strategic vision that drives our industrial growth. Through his technical expertise, he ensures that our workforce solutions remain aligned with the evolving demands of industrial culture.</p>
                </div>
            </div>

            <!-- Profile 2 -->
            <div class="leader-card">
                <div class="card-left">
                    <div class="profile-img">
                        <img src="assets/images/malhari_s.jpg" loading="lazy" alt="Malharee Sutar">
                    </div>
                    <span class="id-tag">Strategy Director</span>
                    <h3>Malharee Sutar</h3>
                    <a href="mailto:smalharee@sseworkforce.com" class="mail-link">
                        <span class="icon">✉</span> Email Me
                    </a>
                </div>
                <div class="card-right">
                    <p class="leader-bio">A techno-commercial expert and Pune University MBA with over two decades in business operations. He spearheads corporate expansion and strategic planning, leveraging additional leadership experience from the pharmaceutical sector.</p>
                </div>
            </div>

            <!-- Profile 3 -->
            <div class="leader-card">
                <div class="card-left">
                    <div class="profile-img">
                        <img src="assets/images/hanumantsutar.jpg" loading="lazy" alt="Hanumant Sutar">
                    </div>
                    <span class="id-tag">Operations Director</span>
                    <h3>Hanumant Sutar</h3>
                    <a href="mailto:shanumant@sseworkforce.com" class="mail-link">
                        <span class="icon">✉</span> Email Me
                    </a>
                </div>
                <div class="card-right">
                    <p class="leader-bio">A techno-commercial professional with nearly a decade of experience in the automotive and engineering sectors. He is responsible for overseeing the company's daily operations and streamlining industrial workflows.</p>
                </div>
            </div>

            <!-- Profile 4 -->
            <div class="leader-card">
                <div class="card-left">
                    <div class="profile-img">
                        <img src="assets/images/ramesh_sutar.webp" loading="lazy" alt="Hiraman Parkhi">
                    </div>
                    <span class="id-tag">Operations Controller</span>
                    <h3>Ramesh Sutar</h3>
                    <a href="mailto:sramesh@sseworkforce.com" class="mail-link">
                        <span class="icon">✉</span> Email Me
                    </a>
                </div>
                <div class="card-right">
                    <p class="leader-bio">An experienced operational leader with over 15 years of industry expertise. He manages all client site affairs and provides dedicated supervision to our on-ground teams, ensuring seamless service delivery, efficient workflows, and high-quality workforce performance at every location.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --navy: #0a192f;
    --primary-blue: #015192;
    --light-bg: #f8fafc;
    --border-color: #e2e8f0;
}

.leadership-section {
    padding: 60px 20px;
    background: #fdfdfd;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.glass-container {
    max-width: 1200px;
    margin: 0 auto;
}

.header-box {
    margin-bottom: 40px;
    border-left: 5px solid var(--primary-blue);
    padding-left: 20px;
}

.header-box h2 {
    color: var(--navy);
    font-size: 1.8rem;
    text-transform: uppercase;
    margin: 0;
}

.leader-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 Cards per row */
    gap: 30px;
}

.leader-card {
    display: flex; /* Side-by-side internal layout */
    background: #fff;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.leader-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    border-color: var(--primary-blue);
}

/* Left Section: Identity */
.card-left {
    flex: 0 0 40%; /* Left side takes 40% width */
    padding: 25px;
    background: var(--light-bg);
    text-align: center;
    border-right: 1px solid var(--border-color);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.profile-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 15px;
    border: 3px solid #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    overflow: hidden;
}

.profile-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.id-tag {
    font-size: 11px;
    font-weight: 700;
    color: var(--primary-blue);
    text-transform: uppercase;
    display: block;
    margin-bottom: 5px;
}

.card-left h3 {
    font-size: 1.1rem;
    color: var(--navy);
    margin: 0 0 15px 0;
}

.mail-link {
    font-size: 13px;
    color: #444;
    text-decoration: none;
    font-weight: 600;
    padding: 6px 12px;
    border: 1px solid #ddd;
    border-radius: 20px;
    transition: 0.3s;
}

.mail-link:hover {
    background: var(--primary-blue);
    color: #fff;
    border-color: var(--primary-blue);
}

/* Right Section: Content */
.card-right {
    flex: 1;
    padding: 30px;
    display: flex;
    align-items: center;
}

.leader-bio {
    font-size: 0.95rem;
    color: #4a5568;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Handling */
@media (max-width: 1024px) {
    .leader-grid {
        grid-template-columns: 1fr; /* Single column on tablets and mobile */
    }
}

@media (max-width: 600px) {
    .leader-card {
        flex-direction: column; /* Stack left and right on mobile */
    }
    .card-left {
        border-right: none;
        border-bottom: 1px solid var(--border-color);
        padding: 20px;
    }
}
</style>
    <!-- Start Consulting Choose Area -->

    
    <!-- Start Footer Area -->
    <footer class="footer-area pt-120">
        <div class="container">

            <div class="row  g-4" data-cues="slideInUp" data-duration="1000">
                <div class="col-lg-4 col-md-12">
                    <div class="single-footer-widget border-wrap">
                        <img src="assets/images/Logo.webp" loading="lazy" style="width: 200px;">
                        
                        <p>SSE Workforce Services Pvt Ltd is a Private Limited Company established in the year 2018.</p>
                        <br>
                        <div class="">
                            <div class="footer-top-info section-title-animation animation-style1">


                                <ul class="list">
                                

                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                            <span>LinkedIn</span>
                                        </a>
                                    </li>
                             
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
          <div class="col-lg-8 col-md-12">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-5 col-sm-4">
                            <div class="single-footer-widget ps-5">
                                <h3>Quick Links</h3>
                                <ul class="list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about-us.php">About Us</a>
                                    </li>
                                        <li>
                                        <a href="financials.php">Financials  </a>
                                    </li>
                                        <li>
                                        <a href="leadership_team.php">Leadership Team</a>
                                    </li>
                         
                                     <li>
                                        <a href="campus.php">College Campus Recruitment   </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="single-footer-widget ps-5">
                    <h3></h3>
                                <br>
                                <ul class="list">
                                
                                    <li>
                                        <a href="services.php">Services</a>
                                    </li>
                                      <li>
                                        <a href="clients.php">Clients  </a>
                                    </li>
                                    <li>
                                        <a href="career.php">Career</a>
                                    </li>
                   
                                    <li>
                                        <a href="contact-us.php">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="single-footer-widget ps-3">
                                <h3>Get In Touch</h3>
                                <ul class="info">
                                    <li>

                                        <span><a href="tel:+917498914626">+917498914626 </a></span>
                                    </li>
                                    <li>

                                      <span>
    <a href="mailto:enquiry@sseworkforce.com">
       enquiry@sseworkforce.com
    </a>
</span>
                                    </li>
                                 <li>
    <span>
        Address:
        <a href="https://maps.app.goo.gl/LMrPb2oTtVXQpgN26" target="_blank">
            ABC Palladium Shop No. 29 & 30, MIDC Chakan Mahalunge, Tal Khed, Pune - 410501 (MH) India.
        </a>
    </span>
</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-12 col-md-12">
                        <p>
                            © <span>SSE Workforce Services PVT. LTD</span>. All rights reserved. Designed by <a href=""
                                target="_blank">Design For U</a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- Back to Top -->
    <button type="button" id="back-to-top" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-s-line"></i>
    </button>
    <!-- End Back to Top -->

    <!-- Link of JS Files -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/scrollCue.min.js"></script>
    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/fslightbox.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'9f0a58d44f063bf4',t:'MTc3NjkyMDg3MQ=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

</html>