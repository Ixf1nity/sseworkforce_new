<?php 
include('./common-function.php');
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect Form Data
    $representative_name = $_POST['representative_name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $college_name = $_POST['college_name'];
    $college_address = $_POST['college_address'];

    // Multi Select Qualification
    $qualifications = isset($_POST['qualification']) 
        ? implode(", ", $_POST['qualification']) 
        : '';

    $students_batch = $_POST['students_batch'];
    $recruitment_location = $_POST['recruitment_location'];
    $availability_month = $_POST['availability_month'];
    $additional_notes = $_POST['additional_notes'];

    // Receiver Email
    $to = "enquiry@sseworkforce.com";

    // Subject
    $subject = "New Campus Recruitment Form Submission";

    // Email Body
    $message = "
    <html>
    <head>
        <title>Campus Recruitment Form</title>
    </head>
    <body>
        <h2>Campus Recruitment Details</h2>

        <p><strong>College Authorised Representative Name:</strong> $representative_name</p>
        <p><strong>Designation:</strong> $designation</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>College Name:</strong> $college_name</p>
        <p><strong>College Address:</strong> $college_address</p>

        <p><strong>Student Qualification:</strong> $qualifications</p>

        <p><strong>Number of Students in Batch:</strong> $students_batch</p>
        <p><strong>Preferred Recruitment Location:</strong> $recruitment_location</p>
        <p><strong>Availability Month of Batch for Recruitment:</strong> $availability_month</p>

        <p><strong>Additional Notes:</strong> $additional_notes</p>
    </body>
    </html>
    ";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // From Email (Your Domain Email)
    $headers .= "From: SSE Workforce Services Private Limited. noreply@sseworkforce.com\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send Mail
    if(mail($to, $subject, $message, $headers)) {
        echo "Mail Sent Successfully!";
    } else {
        echo "Mail Sending Failed!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php main_links();?>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>SSE Workforce Services Private Limited</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>


/* Main Container */

.form-container{
    max-width:1400px;
    margin:auto;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

/* Header */

.form-header{
    background:whitesmoke;
    color:#fff;
    padding:25px;
    text-align:center;
}

.form-header h2{
    font-size:34px;
    margin-bottom:10px;

}

.form-header p{
    opacity:0.9;
    font-size:15px;
  
}

/* Body */

.form-body{
    padding:40px;

}

/* 4 Column Grid */

.form-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
}

/* Full Width */

.full-width{
    grid-column:1 / -1;
}

/* Form Group */

.form-group{
    display:flex;
    flex-direction:column;
}

/* Label */

label{
    margin-bottom:8px;
    font-size:14px;
    font-weight:600;
    color:#1e293b;
       font-family: 'Outfit';
}

/* Inputs */

input,
textarea,
select{
    width:100%;
    padding:14px 15px;
    border:1px solid #dbeafe;
    border-radius:12px;
    background:#f8fafc;
    font-size:14px;
    transition:0.3s;
       font-family: 'Outfit';
}

input:focus,
textarea:focus,
select:focus{
    border-color:#2563eb;
    background:#fff;
    outline:none;
    box-shadow:0 0 0 4px rgba(37,99,235,0.15);
}

/* Textarea */

textarea{
    min-height:120px;
    resize:none;
}

/* Qualification */

.qualification-box{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    border-radius:15px;
    padding:20px;
}

.checkbox-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.checkbox-grid label{
    display:flex;
    align-items:center;
    gap:8px;
    background:#fff;
    padding:12px;
    border-radius:10px;
    border:1px solid #e2e8f0;
    cursor:pointer;
    transition:0.3s;
    font-weight:500;
}

.checkbox-grid label:hover{
    border-color:#2563eb;
    background:#eff6ff;
}

.checkbox-grid input{
    width:auto;
}

/* Button */

.submit-btn{
    text-align:center;
    margin-top:35px;
}

button{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:#fff;
    border:none;
    padding:16px 50px;
    border-radius:50px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
    /* box-shadow:0 10px 25px rgba(37,99,235,0.3); */
}

button:hover{
    transform:translateY(-3px);
    /* box-shadow:0 15px 35px rgba(37,99,235,0.4); */
}

/* Responsive */

@media(max-width:1200px){

    .form-grid{
        grid-template-columns:repeat(3,1fr);
    }

}

@media(max-width:992px){

    .form-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .checkbox-grid{
        grid-template-columns:repeat(3,1fr);
    }

}

@media(max-width:768px){

    .form-grid{
        grid-template-columns:1fr;
    }

    .checkbox-grid{
        grid-template-columns:repeat(2,1fr);
    }

}

@media(max-width:500px){

    .checkbox-grid{
        grid-template-columns:1fr;
    }

    .form-body{
        padding:20px;
    }

}

</style>
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
                        <a href="./career.php" class="nav-link ">Career</a>
                    </li>
                    <li class="nav-item">
                        <a href="./campus.php" class="nav-link active">College Campus Recruitment</a>
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
                                <h2 class="title-animation">  Campus   </h2>
                                <ul class="list">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li> Campus  </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <!-- End Page Banner Area -->
<div class="form-container">

    <!-- Header -->

    <div class="form-header">
        <h2>College Recruitment Enquiry Form</h2>
        <p>Fill all details carefully for recruitment process</p>
    </div>

    <!-- Form -->

    <div class="form-body">

        <form method="POST">

            <div class="form-grid">

                <!-- Representative Name -->

                <div class="form-group">

                    <label>College Authorised Representative Name</label>

                    <input
                        type="text"
                        name="representative_name"
                        placeholder="Enter Name"
                        pattern="[A-Za-z\s]+"
                        title="Only letters allowed"
                        required
                    >

                </div>

                <!-- Designation -->

                <div class="form-group">

                    <label>Designation</label>

                    <input
                        type="text"
                        name="designation"
                        placeholder="Enter Designation"
                        pattern="[A-Za-z\s]+"
                        title="Only letters allowed"
                        required
                    >

                </div>

                <!-- Email -->

                <div class="form-group">

                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter Email"
                        required
                    >

                </div>

                <!-- Phone -->

                <div class="form-group">

                    <label>Phone Number</label>

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Enter 10 Digit Number"
                        pattern="[0-9]{10}"
                        maxlength="10"
                        minlength="10"
                        inputmode="numeric"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                        required
                    >

                </div>

                <!-- College Name -->

                <div class="form-group">

                    <label>College Name</label>

                    <input
                        type="text"
                        name="college_name"
                        placeholder="Enter College Name"
                        required
                    >

                </div>

                <!-- Students Batch -->

                <div class="form-group">

                    <label>Number of Students in Batch</label>

                    <input
                        type="text"
                        name="students_batch"
                        placeholder="Enter Number"
                        pattern="[0-9]+"
                        inputmode="numeric"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                        required
                    >

                </div>

                <!-- Recruitment Location -->

                <div class="form-group">

                    <label>Preferred Recruitment Location</label>

                    <input
                        type="text"
                        name="recruitment_location"
                        placeholder="Enter Location"
                        pattern="[A-Za-z\s]+"
                        title="Only letters allowed"
                        required
                    >

                </div>

                <!-- Month -->

                <div class="form-group">

                    <label>Availability Month of Batch</label>

                  <input
    type="month"
    name="availability_month"
    value="<?php echo date('Y-m'); ?>"
    required
>

                </div>

                <!-- Address -->

                <div class="form-group full-width">

                    <label>College Address</label>

                    <textarea
                        name="college_address"
                        placeholder="Enter Complete College Address"
                        required
                    ></textarea>

                </div>

                <!-- Qualification -->

                <div class="form-group full-width">

                    <label>Student Qualification</label>

                    <div class="qualification-box">

                        <div class="checkbox-grid">

                            <label><input type="checkbox" name="qualification[]" value="Below 10th"> Below 10th</label>

                            <label><input type="checkbox" name="qualification[]" value="10th & 12th"> 10th & 12th</label>

                            <label><input type="checkbox" name="qualification[]" value="BCom"> BCom</label>

                            <label><input type="checkbox" name="qualification[]" value="MCom"> MCom</label>

                            <label><input type="checkbox" name="qualification[]" value="BA"> BA</label>

                            <label><input type="checkbox" name="qualification[]" value="MA"> MA</label>

                            <label><input type="checkbox" name="qualification[]" value="BCA"> BCA</label>

                            <label><input type="checkbox" name="qualification[]" value="BSc"> BSc</label>

                            <label><input type="checkbox" name="qualification[]" value="Diploma"> Diploma</label>

                            <label><input type="checkbox" name="qualification[]" value="ITI"> ITI</label>

                            <label><input type="checkbox" name="qualification[]" value="BTech"> BTech</label>

                            <label><input type="checkbox" name="qualification[]" value="Welder"> Welder</label>

                            <label><input type="checkbox" name="qualification[]" value="Operator"> Operator</label>

                            <label><input type="checkbox" name="qualification[]" value="Helper"> Helper</label>

                        </div>

                    </div>

                </div>

                <!-- Notes -->

                <div class="form-group full-width">

                    <label>Additional Notes</label>

                    <textarea
                        name="additional_notes"
                        placeholder="Write Additional Notes..."
                    ></textarea>

                </div>

            </div>

            <!-- Submit -->

            <div class="submit-btn">

                <button type="submit">
                    Submit Application
                </button>

            </div>

        </form>

    </div>

</div>
 <BR><BR>
    
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