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
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                                <h2 class="title-animation">About Us</h2>
                                <ul class="list">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>About Us</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
   <div class="recruiting-about-area ptb-120 overflow-hidden">
    <div class="container">
        <div class="section-title text-center mb-5 wow fadeInUp">
            <span class="sub wrap2  fw-bold text-uppercase" style="color: white;">Our Story</span>
            <h2 class="title-animation display-5 fw-bold mx-auto" style="max-width: 1100px;">
                SSE Workforce Services Pvt Ltd
            </h2>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-xl-6 col-lg-12">
                <div class="recruiting-about-left-content">
                    <div class="inner mb-4">
                        <p class="fs-6 text-muted mb-3" style="text-align: justify;"> 
                            Welcome to <strong>SSE Workforce Services Pvt Ltd</strong>, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm “Shree Swami Samarth Enterprises,” originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.



                        </p>
                        <p class="fs-6 text-muted mb-3" style="text-align: justify;">
                     With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses. Our expertise spans across Technical Manpower Outsourcing, Precision Job Work & Fabrication, and Strategic Talent Acquisition, helping organizations improve productivity, operational efficiency, and workforce reliability.

                        </p>
                        <p class="fs-6 text-muted" style="text-align: justify;">
                   At SSE Workforce Services, we understand that every industry requires dependable manpower and precision-driven execution. Our dedicated team works closely with clients to provide qualified technical professionals, customized fabrication support, and strategic hiring solutions that align with business goals and project requirements.
                        </p>
                    </div>
               
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <div class="recruiting-about-image-wrapper">
                    <div class="image-main">
                        <img src="assets/images/banner/about3.webp" loading="lazy" class="img-fluid rounded-4 shadow" alt="Industrial Work" >
                    </div>

                    <div class="image-sub">
                        <img src="assets/images/serve/industrial-work.webp" loading="lazy" class="img-fluid rounded-4 shadow border border-white border-5" alt="About Team">
                        
                        <div class="fun-box-overlay shadow">
                            <div class="d-flex align-items-center justify-content-center">
                                <h3 class="counter mb-0" style="color: white;">15</h3>
                                <h3 class="plus mb-0" style="color: white;">+</h3>
                            </div>
                            <span class="small fw-bold">Years Of Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Container styling */
.recruiting-about-image-wrapper {
    position: relative;
    padding: 20px;
    display: block;
}

/* Big Image Styling */
.image-main {
    width: 80%;
    margin-left: auto;
}

/* Small Overlapping Image */
.image-sub {
    position: absolute;
    width: 50%;
    bottom: -30px;
    left: 0;
    z-index: 5;
}

/* 15+ Years Box - Exactly on top of small image */
.fun-box-overlay {
    position: absolute;
    top: -20px; /* Thoda bahar nikalne ke liye */
    right: -10px;
    background: #0072BC; /* Logo Blue */
    color: white;
    padding: 15px;
    border-radius: 12px;
    text-align: center;
    min-width: 120px;
    z-index: 10;
}

.fun-box-overlay .counter { font-size: 30px; font-weight: 800; }
.fun-box-overlay .plus { color: #E31E24; font-size: 25px; margin-left: 2px; }
.fun-box-overlay span { display: block; font-size: 10px; text-transform: uppercase; line-height: 1.2; }

/* --- MOBILE VIEW RESPONSIVE --- */
@media (max-width: 991px) {
    .image-main {
        width: 100%;
        margin-bottom: 40px;
    }
    
    .image-sub {
        position: relative;
        width: 70%;
        margin-top: -60px;
        bottom: 0;
        left: 15%; /* Center alignment for mobile */
    }

    .fun-box-overlay {
        top: -30px;
        right: 0;
        min-width: 100px;
        padding: 10px;
    }

    .recruiting-about-image-wrapper {
        padding: 0;
        margin-top: 30px;
    }
}

@media (max-width: 576px) {
    .image-sub {
        width: 90%;
        left: 5%;
    }
    .display-5 { font-size: 1.8rem; }
}
</style>
    <!-- End Recruiting About Area -->

    <style>
    .view-area h1 i {
        margin-right: 8px;
        color: #00a3ff;
    }

    .view-area .gap i {
        font-size: 8px;
        color: #ccc;
    }
    </style>
    <!-- Start View Area -->
    <div class="view-area wrap-style2">
        <h1>
            <h1>
                <span><i class="fa fa-building"></i> SSE Workforce Services Pvt Ltd</span>

                <span class="gap"></span>
                <span><i class="fa fa-calendar"></i> 14+ Years Experience</span>

                <span class="gap"></span>
                <span><i class="fa fa-industry"></i> 15+ Industry Sectors</span>

                <span class="gap"></span>
                <span><i class="fa fa-handshake"></i> 100+ Companies Served</span>

                <span class="gap"></span>
                <span><i class="fa fa-users"></i> Skilled Workforce Team</span>

                <span class="gap"></span>
                <span><i class="fa fa-thumbs-up"></i> High Client Retention</span>
            </h1>

    </div>
    <!-- End View Area -->

    <br>
    <br>

<section class="why-choose-us py-5" style="background-color: #f0f4f8;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="font-family: 'Outfit', sans-serif; letter-spacing: 1px;">WHY CHOOSE SSE WORKFORCE SERVICES?</h2>
            <div class="mx-auto" style="width: 100px; height: 4px; background: #0072BC; border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Experienced Industry Presence Since 2011</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Trusted and Professional Workforce Solutions</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Skilled Technical Manpower Across Multiple Industries</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Commitment to Quality, Safety, and Timely Delivery</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Customized Staffing and Fabrication Solutions</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sse-creative-card">
                    <div class="sse-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="sse-content">
                        <h6>Client-Focused Approach with Long-Term Partnerships</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 px-lg-5">
            <p class="fst-italic text-muted" style="max-width: 900px; margin: auto; font-size: 0.95rem;">
                At SSE Workforce Services Pvt Ltd, we are committed to delivering reliable workforce and industrial solutions that empower businesses to grow efficiently and sustainably. Our mission is to become a preferred partner for manpower outsourcing, fabrication services, and talent acquisition by maintaining the highest standards of professionalism, integrity, and service excellence.
            </p>
            <h5 class="fw-bold mt-4" style="color: #0072BC; letter-spacing: 2px;">YOUR TRUSTED WORKFORCE PARTNER SINCE 2011</h5>
        </div>
    </div>
</section>
<style>
/* CSS Variable for easy color management */
:root {
    --sse-blue: #0072BC;
    --sse-light-blue: #eef7ff;
}

.sse-creative-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px 20px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 10px 25px rgba(0, 114, 188, 0.08);
    border: 1px solid rgba(0, 114, 188, 0.1);
    height: 100%;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

/* Subtle border animation */
.sse-creative-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: var(--sse-blue);
    opacity: 0;
    transition: 0.3s;
}

.sse-creative-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 114, 188, 0.15);
    border-color: var(--sse-blue);
}

.sse-creative-card:hover::before {
    opacity: 1;
}

/* Icon Container */
.sse-icon {
    min-width: 70px;
    height: 70px;
    background: var(--sse-light-blue);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.4s;
}

.sse-icon i {
    font-size: 2rem;
    color: var(--sse-blue);
}

.sse-creative-card:hover .sse-icon {
    background: var(--sse-blue);
    transform: scale(1.1) rotate(5deg);
}

.sse-creative-card:hover .sse-icon i {
    color: #ffffff;
}

/* Text Content */
.sse-content h6 {
    margin: 0;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    color: #333;
    line-height: 1.4;
    font-size: 1.05rem;
}

/* Animation on Scroll (Optional) */
@keyframes sseFloat {
    0% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0); }
}

.sse-creative-card {
    animation: sseFloat 4s ease-in-out infinite;
}

/* Mobile View Adjustments */
@media (max-width: 768px) {
    .sse-creative-card {
        padding: 20px;
        flex-direction: column;
        text-align: center;
    }
    .sse-icon {
        margin-bottom: 10px;
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