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

    <!-- Start Preloader Area -->
    <!-- <div class="preloader-area text-center position-fixed top-0 bottom-0 start-0 end-0" id="preloader">
        <div class="loader position-absolute start-0 end-0">
            <img src="assets/images/favicon.svg" alt="favicon">
            <div class="waviy position-relative">
                <span class="d-inline-block">T</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">M</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">D</span>
                <span class="d-inline-block">O</span>
            </div>
        </div>
    </div> -->
    <!-- End Preloader Area -->

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
                        <a href="./index.php" class="dropdown-toggle nav-link active ">
                            Home

                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="dropdown-toggle nav-link ">
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

    <!-- End Responsive Sidebar Menu Area -->

    <!-- Start Search Popup -->
    <div class="search-popup">
        <div class="search-popup-overlay search-toggler"></div>
        <div class="search-popup-content">
            <form class="search-popup-form">
                <input type="text" class="form-control" placeholder="Search here">
                <button type="submit"><i class="ri-search-line"></i></button>
            </form>
        </div>
    </div>
    <!-- End Search Popup -->

    <!-- Start Outsourcing Banner Area -->
    <!-- <div class="outsourcing-banner-area ">
        <div class="container-fluid">
          
            <div class="outsourcing-banner-content section-title-animation animation-style1">
                <div class="row justify-content-center align-items-center g-4" data-cues="slideInUp"
                    data-duration="1000">
                    <div class="col-lg-12 col-md-12">
                        <span class="sub">Welcome To SSE Workforce</span>
                        <h2 class="title-animation">Expert Manpower for Engineering Job Works</h2>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="outsourcingBanner" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#outsourcingBanner" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#outsourcingBanner" data-bs-slide-to="1"></button>
            <!-- <button type="button" data-bs-target="#outsourcingBanner" data-bs-slide-to="2"></button> -->
        </div>

        <!-- Slides -->
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="outsourcing-banner-area banner-1">
                    <div class="container-fluid">
                        <div class="outsourcing-banner-content section-title-animation animation-style1">
                            <div class="row  align-items-center g-4">
                                <div class="col-lg-12 col-md-12">
                                    <span class="sub">Welcome To SSE Workforce</span>
                                    <h2 class="title-animation">Expert Manpower for Engineering Job Works</h2>
                                    <a href="#" class="default-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="outsourcing-banner-area banner-2">
                    <div class="container-fluid">
                        <div class="outsourcing-banner-content section-title-animation animation-style1">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-12 col-md-12">
                                    <span class="sub">Skilled Workforce Solutions</span>
                                    <h2 class="title-animation">Reliable Engineering Manpower Services</h2>
                                    <a href="#" class="default-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <!-- <div class="carousel-item">
                <div class="outsourcing-banner-area banner-3">
                    <div class="container-fluid">
                        <div class="outsourcing-banner-content section-title-animation animation-style1">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-12 col-md-12">
                                    <span class="sub">Skilled Workforce Solutions</span>
                                    <h2 class="title-animation">Reliable Engineering Manpower Services</h2>
                                    <a href="#" class="default-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    </div>


    <!-- End Outsourcing Banner Area -->
    <style>
    .mod {
        background: linear-gradient(92deg, #004781, #03A9F4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .mis {
        font-family: Rubik, sans-serif;
        font-weight: 500;
        color: #0b83b4;
        font-size: 21px;
    }

    /* Button CSS */
.click-btn{
    display:inline-block;
    padding:14px 30px;
    background:#004781;
    color:#fff;
    text-decoration:none;
    font-size:16px;
    font-weight:600;
    border-radius:6px;
    transition:0.3s ease;
    padding: 9px 30px;;
    
}

.click-btn:hover{
    background:#004781;
    transform:translateY(-3px);
}
    </style>
    <!-- Start Outsourcing About Area -->
    <div class="outsourcing-about-area ptb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4" data-cues="slideInUp" data-duration="1000">
                <div class="col-xl-5 col-md-12">
                    <div class="outsourcing-about-content section-title-animation animation-style2">
                        <span class="sub">About SSE Workforce</span>

                        <h2 class="mod">Manpower Solutions Across All Industries
                            <br>
                            <span style="color:blue;font-weight:600;font-size:17px;">Formerly Shree Swami Samarth
                                Enterprises</span>
                        </h2>
                        <p style="text-align: justify;">
                            Welcome to SSE Workforce Services Pvt Ltd, a trusted name in workforce management, technical staffing, and industrial support services. Established in 2018 as a Private Limited Company, SSE Workforce Services Pvt Ltd was formed through the successful expansion of the 8-year-old firm “Shree Swami Samarth Enterprises,” originally founded in 2011 with a vision to deliver reliable manpower and engineering solutions across industries.
                        </p>
                        <br>
                        <P style="text-align: justify;">With years of industry experience and a commitment to quality, we specialize in providing skilled workforce solutions tailored to the evolving needs of modern businesses...
                        </P>
                        <br>

                        <!-- Click Button -->
                        <a href="about-us.php" class="click-btn">Explore More</a>
                    </div>
                </div>

                
                <div class="col-xl-7 col-md-12">
                    <div class="outsourcing-about-inner-content">
                        <div class="row justify-content-center g-4">
                            <div class="col-lg-6 col-md-6">
                                <div class="left">
                                    <h3 class="mis">Our Mission</h3>
                                    <p style="text-align: justify;">To provide high-quality manpower and workforce services that meet the evolving
                                        needs of industries by ensuring professionalism, integrity, and excellence in
                                        every engagement. </p>
                                    <img src="assets/images/about/about8.webp" loading="lazy" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="right">
                                    <img src="assets/images/about/about9.webp" loading="lazy" alt="image">
                                    <h3 class="mis">Our Vision</h3>
                                    <p style="text-align: justify;">To be a leading workforce solutions provider recognized for delivering reliable,
                                        efficient, and innovative services across diverse industry sectors, while
                                        building long-term trust with our clients and partners.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="circle-wrap">
                            <a href="about-us.html">
                                <img src="assets/images/about/circle.png" alt="image">
                                <div class="icon">
                                    <img src="assets/images/about/icon.png" alt="image">
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Outsourcing About Area -->
     


    <!-- Start Recruiting Serve Area -->
    <div class="recruiting-serve-area ptb-120">
        <div class="container">
            <div class="section-title text-center section-title-animation animation-style2">
                <span class="sub wrap2">Industries We Serve</span>
                <h2 class="title-animation">Empowering Businesses with Skilled Manpower Across Industries</span></h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="swiper recruiting-serve-slider">
                <div class="swiper-wrapper" data-cues="slideInUp" data-duration="1000">
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="./assets/images/serve/serve1.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Engineering and Automobile </h3>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/serve2.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Forging Industry</h3>

                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/serve4.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Foundries</h3>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/serve3.webp" alt="image">
                            <div class="content">
                                <h3>Finance & Banking</h3>

                            </div>
                        </div>
                    </div> -->
                   
                    <!-- <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/serve5.webp" alt="image">
                            <div class="content">
                                <h3>Government Organizations</h3>

                            </div>
                        </div>
                    </div> -->
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/serve6.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Service Industries</h3>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/mall.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Shopping Complexes</h3>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card"> 
                            <img src="assets/images/serve/rubber (2).webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Rubber Industries</h3>
                            </div>
                        </div>
                    </div>
                   
                     <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/Aluform Work.webp"  loading="lazy" alt="image">
                            <div class="content">
                                <h3>Aluform Work</h3>
                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/plastics-industries.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Plastic Industries</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/stiching-industries.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Stitching Industries</h3>
                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/industrial-work.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Industrial Work</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="recruiting-serve-card">
                            <img src="assets/images/serve/Electrical-Electronics-Manufacturers.webp" loading="lazy" alt="image">
                            <div class="content">
                                <h3>Electrical & Electronics Manufacturers</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recruiting Serve Area -->



    <!-- Start Outsourcing Fun Area -->
    <div class="outsourcing-fun-area pb-120">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="outsourcing-fun-card">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="counter">3000</h3>
                            <h3 class="plus">+</h3>
                        </div>
                        <span>Skilled Workforce Strength</span>
                    </div>
                </div>
             
                <div class="col-lg-3 col-sm-6">
                    <div class="outsourcing-fun-card">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="counter">15</h3>
                            <h3 class="plus">+</h3>
                        </div>
                        <span>Industry Experience Since 2011</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="outsourcing-fun-card">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="counter">20</h3>
                            <h3 class="plus">+</h3>
                        </div>
                        <span>Trusted Across Multiple Industries</span>
                    </div>
                </div>
                   <div class="col-lg-3 col-sm-6">
                    <div class="outsourcing-fun-card">
                        <div class="d-flex align-items-center justify-content-center">
                            <h3 class="counter">25</h3>
                            <h3 class="plus">+</h3>
                        </div>
                        <span>Total Clients Served</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Outsourcing Fun Area -->
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
                <span><i class="fa fa-calendar"></i> 15+ Years Experience</span>

                <span class="gap"></span>
                <span><i class="fa fa-industry"></i> 15+ Industry Sectors</span>

                <span class="gap"></span>
                <span><i class="fa fa-handshake"></i> 25+ Companies Served</span>

                <span class="gap"></span>
                <span><i class="fa fa-users"></i> Skilled Workforce Team</span>

                <span class="gap"></span>
                <span><i class="fa fa-thumbs-up"></i> High Client Retention</span>
            </h1>

    </div>
    <!-- End View Area -->





    <!-- Start Outsourcing Solutions Area -->
    <div class="outsourcing-solutions-area ptb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4" data-cues="slideInUp">
                <div class="col-lg-6 col-md-12">
                    <div class="outsourcing-solutions-content section-title-animation animation-style2">
                        <h2 class="title-animation">What We Offer</h2>
                        <img src="assets/images/solutions.webp" loading="lazy" alt="image">
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row justify-content-center g-4">


<style>


.faq-section{
    max-width:800px;
    margin:auto;
}

.faq-box{
    background:#FFF;
    border-radius:10px;
    margin-bottom:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    overflow:hidden;
}

.faq-question{
    padding:20px;
    cursor:pointer;
    font-size:18px;
    font-weight:600;
    background:#013a68;
    color:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.faq-answer{
    display:none;
    padding:20px;
    font-size:15px;
    color:#555;
    line-height:1.7;
    background:#fff;
}

/* FIRST FAQ OPEN BY DEFAULT */
.faq-box.active .faq-answer{
    display:block;
}

@media(max-width:768px){

    .faq-question{
        font-size:16px;
        padding:15px;
    }

}

</style>
</head>

<section class="faq-section">

    <!-- FIRST FAQ ACTIVE -->
    <div class="faq-box active">
        <div class="faq-question">
            Technical Manpower Outsourcing
            <span>+</span>
        </div>


        <div class="faq-answer">
            <p>
            We provide skilled, semi-skilled, and unskilled manpower solutions for industries including manufacturing, engineering, automotive, construction, warehousing, logistics, and industrial operations. Our workforce solutions help businesses maintain efficiency, reduce hiring challenges, and meet project timelines effectively.
            </p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-question">
            Precision Job Work & Fabrication
            <span>+</span>
        </div>

        <div class="faq-answer">
            <p>
            Our precision fabrication and job work services are designed to meet high industrial standards with accuracy, durability, and timely delivery. We support clients with customized fabrication solutions for various engineering and industrial applications.
            </p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-question">
            Strategic Talent Acquisition
            <span>+</span>
        </div>

        <div class="faq-answer">
            <p>
            We help companies identify, attract, and recruit the right talent through professional hiring and recruitment solutions. Our strategic talent acquisition services ensure businesses gain access to qualified professionals who contribute to long-term growth and organizational success.
            </p>
        </div>
    </div>

</section>

<script>

const faqBox = document.querySelectorAll(".faq-box");

faqBox.forEach(box => {

    box.addEventListener("click", () => {

        // CLOSE ALL FAQ
        faqBox.forEach(item => {
            item.classList.remove("active");
        });

        // OPEN CLICKED FAQ
        box.classList.add("active");

    });

});

</script>
</html>

                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-user-gear"></i>
                                <h3>Technical Manpower </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-industry"></i>
                                <h3>Production Work Services</h3>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-bus"></i>
                                <h3>Tours & Transport Services</h3>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-users"></i>
                                <h3>Industrial Staffing Solutions</h3>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-briefcase"></i>
                                <h3>Placement Services</h3>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="outsourcing-solutions-card">
                                <i class="fa-solid fa-handshake"></i>
                                <h3>Contract & Outsourcing </h3>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Outsourcing Solutions Area -->

  <style>

/* ================= CLIENT SECTION ================= */

.clients{
    width:100%;
    padding:0;
    overflow:hidden;
}

.clients-title{
    text-align:center;
    margin-bottom:40px;
}

.clients-title span{
    color:#013a68;
    font-size:16px;
    font-weight:600;
    text-transform:uppercase;
}

.clients-title h1{
    font-size:40px;
    color:#111;
    margin-top:10px;
}

/* ================= SLIDER ================= */

.client-slider{
    overflow:hidden;
    position:relative;
    width:100%;
}

.client-track{
    display:flex;
    gap:20px;
    width:max-content;
    animation:scroll 25s linear infinite;
}

.client-slider:hover .client-track{
    animation-play-state:paused;
}

@keyframes scroll{
    0%{
        transform:translateX(0);
    }
    100%{
        transform:translateX(-50%);
    }
}

/* ================= CARD ================= */

.client-card{
    width:220px;
    background:#fff;
    border-radius:12px;
    text-align:center;
    padding:20px;
    border:1px solid #eee;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
    transition:0.4s;
    flex-shrink:0;
}

.client-card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

.client-card img{
    width:140px;
    height:80px;
    object-fit:contain;
}

/* ================= BUTTON ================= */

.view-more-btn{
    text-align:center;
    margin-top:40px;
}

.view-more-btn a{
    display:inline-block;
    padding:14px 35px;
    background:#013a68;
    color:#fff;
    text-decoration:none;
    border-radius:6px;
    font-size:16px;
    font-weight:600;
    transition:0.3s;
}

.view-more-btn a:hover{
    background:#0056a3;
    transform:translateY(-3px);
}

/* ================= MOBILE ================= */

@media(max-width:768px){

    .clients-title h1{
        font-size:30px;
    }

    .client-card{
        width:160px;
        padding:15px;
    }

    .client-card img{
        width:100px;
        height:60px;
    }

}

</style>
   <div class="outsourcing-partner-area pb-120" >
        <div class="container">
            <div class="section-title text-center section-title-animation animation-style2">
                <span class="sub wrap2">Our Clients</span>
                <h2 class="title-animation">Our Valuable Clients</span></h2>
            </div>

  <!-- CLIENT SECTION -->
  <!-- ================= CLIENT SECTION ================= -->

<section class="clients">

    <!-- SLIDER -->
    <div class="client-slider">

        <div class="client-track">

            <!-- CLIENTS -->

            <div class="client-card">
                <img src="assets/images/partner/partner1.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner2.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner3.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner4.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner5.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner6.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner7.webp" loading="lazy" alt="">
            </div>

         

       
            <div class="client-card">
                <img src="assets/images/partner/partner25.webp" loading="lazy" alt="">
            </div>

            <!-- DUPLICATE FOR SMOOTH LOOP -->

            <div class="client-card">
                <img src="assets/images/partner/partner1.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner2.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner3.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner4.webp" loading="lazy" alt="">
            </div>

            <div class="client-card">
                <img src="assets/images/partner/partner5.webp"  loading="lazy" alt="">
            </div>

        </div>

    </div>

    <!-- BUTTON -->

    <div class="view-more-btn">
        <a href="clients.php">
            View More
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

</section>

</div>
</div>


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