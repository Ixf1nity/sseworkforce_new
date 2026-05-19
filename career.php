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
                        <a href="./career.php" class="nav-link active">Career</a>
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
                                <h2 class="title-animation">Career</h2>
                                <ul class="list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>Career</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Main Career Section -->
 <section style="background-color: whitesmoke;"><section class="career-form-section" style="background-color: whitesmoke;">
    <div class="container">
        <div class="form-container">
            <div class="section-title text-center">
                <h2 class="title-animation">Join Our Team</h2>
                <p>Fill out the form below to apply for current openings at SSE Workforce Services.</p>
            </div>
<form action="process-career.php" method="POST" enctype="multipart/form-data" class="mt-4">

    <div class="row">

        <!-- Full Name -->
        <div class="col-md-6 mb-3">
            <label class="form-label">
                Full Name <span class="required">*</span>
            </label>

            <input type="text"
                   name="full_name"
                   class="form-control"
                   placeholder="Enter your full name"
                   pattern="[A-Za-z\s]+"
                   title="Only letters and spaces are allowed"
                   required
                   oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'')">
        </div>

        <!-- Email -->
        <div class="col-md-6 mb-3">
            <label class="form-label">
                Email Address <span class="required">*</span>
            </label>

            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="example@mail.com"
                   required>
        </div>

        <!-- Phone -->
        <div class="col-md-6 mb-3">
            <label class="form-label">
                Phone Number <span class="required">*</span>
            </label>

            <input type="tel"
                   name="phone"
                   class="form-control"
                   placeholder="10-digit mobile number"
                   pattern="[0-9]{10}"
                   maxlength="10"
                   title="Enter valid 10 digit mobile number"
                   required
                   oninput="this.value=this.value.replace(/[^0-9]/g,'')">
        </div>

        <!-- Gender -->
        <div class="col-md-3 col-6 mb-3">
            <label class="form-label">
                Gender <span class="required">*</span>
            </label>

            <select name="gender" class="form-select" required>
                <option value="" selected disabled>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <!-- Age -->
        <div class="col-md-3 col-6 mb-3">
            <label class="form-label">
                Age <span class="required">*</span>
            </label>

            <input type="number"
                   name="age"
                   class="form-control"
                   min="18"
                   max="60"
                   required
                   oninput="this.value=this.value.replace(/[^0-9]/g,'')">
        </div>

        <!-- Qualification -->
        <div class="col-md-6 mb-3">
            <label class="form-label">
                Highest Qualification <span class="required">*</span>
            </label>

            <select name="qualification" class="form-select" required>
                <option value="" selected disabled>Choose Qualification</option>

                <option value="10th">10th</option>
                <option value="10th & 12th">10th & 12th</option>
                <option value="BCom">BCom</option>
                <option value="MCom">MCom</option>
                <option value="BA">BA</option>
                <option value="MA">MA</option>
                <option value="BCA">BCA</option>
                <option value="BSc">BSc</option>
                <option value="Diploma">Diploma</option>
                <option value="ITI">ITI</option>
                <option value="BTech">BTech</option>
                <option value="Welder">Welder</option>
                <option value="Operator">Operator</option>
                <option value="Helper">Helper</option>

                <option value="Other">Other</option>
            </select>
        </div>

        <!-- Additional Note -->
        <div class="col-12 mb-4">
            <label class="form-label">
                Additional Note / Experience
            </label>

            <textarea name="additional_note"
                      class="form-control"
                      rows="4"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center">
            <button type="submit"
                    name="submit_application"
                    class="btn submit-btn">
                Submit Application
            </button>
        </div>

    </div>
</form>
        </div>
    </div>
</section>
</section>
<style>
    .career-form-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .form-container {
        max-width: 900px;
        margin: 0 auto;
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.23);
    }

    .required {
        color: red;
        font-weight: bold;
    }

    .form-control, .form-select {
        border-radius: 8px;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #004a99;
        box-shadow: 0 0 0 0.2rem rgba(0, 74, 153, 0.25);
    }

    .submit-btn {
        background-color: #004a99;
        border: none;
        color: white;
        padding: 12px 40px;
        font-size: 18px;
        border-radius: 50px;
        transition: 0.3s;
    }

    .submit-btn:hover {
        background-color: #003366;
         color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        .form-container {
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