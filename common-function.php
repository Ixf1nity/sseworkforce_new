<?php 
function main_links(){
    ?>
<!-- Link of CSS Files -->
<link  rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/flaticon_mycollection.css">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/scrollCue.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="icon" type="image/png" href="assets/images/favicon.jpg">



<?php
}
function main_scripts(){
    ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

</html>
<?php
}

function main_header(){
    ?>
<div class="container-fluid">
    <div class="wrap-inner">
        <a class="navbar-brand" href="./index.php">
            <img src="./assets/images/Logo.webp" loading="lazy" alt="logo" style="width: 170px;">
        </a>
        <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
            <span class="burger-menu">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./index.php" class="dropdown-toggle nav-link active">
                        Home

                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="dropdown-toggle nav-link">
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
                    <a href="#" class="dropdown-toggle nav-link">
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
</div>
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
<?php
}

function SidebarMenu(){
?>
<div class="offcanvas-header">
    <a href="#">
        <img src="assets/images/logo2.svg" loading="lazy" alt="logo">
    </a>
    <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="close-btn">
        <i class="ri-close-line"></i>
    </button>
</div>
<div class="offcanvas-body">
    <div class="accordion" id="sidebarAccordion">
        <div class="accordion-item">
            <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Home
            </button>

        </div>
        <div class="accordion-item">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                About Us
            </button>

        </div>
        <div class="accordion-item">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Services
            </button>

        </div>
        <div class="accordion-item">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Gallery
            </button>

        </div>
    
        <div class="accordion-item">
            <a class="accordion-button without-icon" href="./contact-us.php">
                Contact Us
            </a>
        </div>
    </div>
    
</div>
<?php
}


?>