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
                <img src="./assets/images/Logo.webp" loading="lazy"  alt="logo" style="width: 170px;">
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
  
<section class="financials-page py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7">
                <div class="header-border-left">
                    <span class="sub-title">Corporate Transparency</span>
                    <h2 class="display-5 fw-bold text-navy">Financial Performance</h2>
                    <p class="lead text-muted">A comprehensive overview of our fiscal growth and operational scale over the recent years.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left Table -->
            <div class="col-md-6 mb-4">
                <div class="table-card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="table-header-gradient p-4">
                        <h4 class="text-white m-0 text-center"><i class="fas fa-chart-line me-2"></i>  Year-on-Year Growth Table </h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 custom-financial-table">
                            <thead>
                                <tr>
                                    <th>Financial Year</th>
                                    <th>Annual Revenue (INR)</th>
                                    <th class="text-center">Annual Growth</th>
                                    <th class="text-center">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="year-badge">2025 - 2026</span></td>
                                    <td class="fw-bold">₹ 83.27 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+50.6%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2024 - 2025</span></td>
                                    <td class="fw-bold">₹ 55.30 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+36.5%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2023 - 2024</span></td>
                                    <td class="fw-bold">₹ 40.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+32.8%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2022 - 2023</span></td>
                                    <td class="fw-bold">₹ 30.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+10.9%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2021 - 2022</span></td>
                                    <td class="fw-bold">₹ 27.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+31.0%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                    <tr>
                                    <td><span class="year-badge">2020 - 2021</span></td>
                                    <td class="fw-bold">₹ 21.00 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+18.3%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2019 - 2020</span></td>
                                    <td class="fw-bold">₹ 17.75 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+34.0%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2018 - 2019</span></td>
                                    <td class="fw-bold">₹ 13.25 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+51.4%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Table -->
            <div class="col-md-6 mb-4">
                <div class="table-card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="table-header-gradient p-4">
                        <h4 class="text-white m-0 text-center"><i class="fas fa-chart-line me-2"></i>  Year-on-Year Growth Table </h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 custom-financial-table">
                            <thead>
                                <tr>
                                    <th>Financial Year</th>
                                    <th>Annual Revenue (INR)</th>
                                    <th class="text-center">Annual Growth</th>
                                    <th class="text-center">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td><span class="year-badge">2017 - 2018</span></td>
                                    <td class="fw-bold">₹ 8.75 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+34.6%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2016 - 2017</span></td>
                                    <td class="fw-bold">₹ 6.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+44.4%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2015 - 2016</span></td>
                                    <td class="fw-bold">₹ 4.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+63.6%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2014 - 2015</span></td>
                                    <td class="fw-bold">₹ 2.75 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+10.0%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2013 - 2014</span></td>
                                    <td class="fw-bold">₹ 2.50 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+7.3%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2012 - 2013</span></td>
                                    <td class="fw-bold">₹ 2.33 Cr</td>
                                    <td class="text-center"><span class="growth-label positive">+34.7%</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                                <tr>
                                    <td><span class="year-badge">2011 - 2012</span></td>
                                    <td class="fw-bold">₹ 1.73 Cr</td>
                                    <td class="text-center"><span class="growth-label neutral">Base Year</span></td>
                                    <td class="text-center">Audited</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --navy: #0a192f;
    --primary-blue: #015192;
    --accent-sky: #0a7dac;
    --success-green: #28a745;
}

.text-navy { color: var(--navy); }

.header-border-left {
    border-left: 6px solid var(--primary-blue);
    padding-left: 25px;
}

.sub-title {
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--accent-sky);
    font-weight: 700;
    font-size: 13px;
}

/* Table Design */
.table-card {
    background: #fff;
    border: 1px solid #eee;
}

.table-header-gradient {
    background: linear-gradient(135deg, var(--navy) 0%, var(--primary-blue) 100%);
}

.custom-financial-table thead th {
    background-color: #f8f9fa;
    color: var(--navy);
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    padding: 20px;
    border-bottom: 2px solid #dee2e6;
}

.custom-financial-table tbody td {
    padding: 20px;
    font-size: 15px;
    border-bottom: 1px solid #f1f1f1;
}

.year-badge {
    background: #eef2f7;
    color: var(--primary-blue);
    padding: 6px 12px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 14px;
}

.growth-label {
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
}

.growth-label.positive {
    background-color: rgba(40, 167, 69, 0.1);
    color: var(--success-green);
}

.growth-label.neutral {
    background-color: #f0f0f0;
    color: #666;
}

/* Hover Effect */
.custom-financial-table tbody tr:hover {
    background-color: #fdfdfd;
    transition: 0.3s;
}

@media (max-width: 768px) {
    .header-box h2 { font-size: 1.5rem; }
    .custom-financial-table { min-width: 600px; } /* Horizontal scroll on mobile */
}
</style>
    <br>
    <br>


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