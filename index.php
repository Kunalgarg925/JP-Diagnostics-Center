<!-- Mobile SMS Code -->

<?php

/* if (isset($_POST['submit'])) {
    $mobile = $_POST['phone'];
    $name = $_POST['name'];
    $date = $_POST['apn-date'];
    $Email = $_POST['email'];


    // Account details
    $apikey = urlencode('yourapikey');

    $numbers = array(917579470000, $mobile);
    $sender = urlencode('TXTLCL');
    $message = rawurldecode('Sucessfully! Appointment has been booked of' . $name . 'on date' . $date . '.');
    $numbers = implode(',', $numbers);
    $data = array('apikey' => $apikey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
} */
?>

<!-- Mobile SMS Code End -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JP Daignostics - Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D Ultrasound |
        ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" JP Diagnostics is one of the most trusted Pathology & Radiology centers in Mathura for silent MRI scan, CT scan, 3D/4D Ultrasounds, X-Ray scans, DEXA scans, Bone density scans, etc. " name="description">
    <meta content="MRI, CT-Scan, X-ray, Diagnostics, Diagnose, Testing, Test, Medical Test, Blood Test, Liver Testing, Kidney Testing, Diagnose Center, Appointment, Reports, HRCT Test, CBC Test, Radiology, Pathology, Ultrasound, Lab, Health Care, Body Check Up, Full check up, Advance pathology & radiology testing" name="keywords">


    <!-- Favicons -->
    <link href="./JP Diagnostic pics/jplg.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="contact_us.php" type="text/hypertext_preprocessor">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <i class="icofont-clock-time"></i> Monday - Sunday, 8AM to 8PM
            </div>
            <div class="d-flex align-items-center">
                <i class="icofont-phone"></i> <a class="btn btn-success" href="tel:+91-75794-70000">Call us now</a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.php" class="logo me-auto"><img src="./JP Diagnostic pics/logojp.png" width="430vm" height="70px" alt=""></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li class="drop-down"><a href="#departments">Departments</a>
                        <ul>
                            <li><a href="#Radiology">Radiology</a></li>
                            <li><a href="#Pathology">Pathology</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/Admin_partials/_Login_credentails/login.php">Admin</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
                Appointment</a>
        </div>
    </header><!-- End Header -->

    
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            
            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>JP Diagnostics</span></h2>
                        <h6><span>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D
                                Ultrasound | ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</span></h6>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-4.jpeg)">
                    <div class="container">
                        <h2>JP Diagnostics</h2>
                        <h6><span>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D
                                Ultrasound | ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</span></h6>
                                <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-5.jpg)"> 
                 <div class="container">
                    <h2>JP Diagnostics</h2>
                        <p>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D Ultrasound | ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                 </div>
                </div>
        </div>

    </div>
    
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
    </div>
</section><!-- End Hero -->
<section id="marquee" style="padding: 10px;"> <!-- Marquee Start -->
<marquee behaviour="scroll"  direction="left" width="100%" height="100%" scrollamount="8" style="background-color: #3fbbc0; color: #fff; margin-top: 10px; padding-top:15px">
<p><img src="/JP Diagnostic pics/new-icon-gif-9.jpg" width="50px" height="35px" style="padding-right: 12px; "><b><i>50 % off on PATHOLOGY</i></b></p>
</img></marquee><!-- Marquee End -->
</section>
<main id="main">
    
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="padding: 20px 0px 30px 0px; ">
        <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <!-- <div class="icon"><i class="icofont-heart-beat"></i></div> -->
                            <div class="icon"><img src="JP Diagnostic pics/tube.png" width="80px"></img></div>
                            <h4 class="title"><a href="">Pathology Lab</a></h4>
                            <p class="description">Lab Tests Online is an award-winning health information web resource
                                designed to help patients and caregivers understand the many lab tests that are a vital
                                part of medical care.</p>
                            </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-drug"></i></div>
                            <h4 class="title"><a href="">Prescription</a></h4>
                            <p class="description"> Paper on which a doctor has written the name of the medicine that
                                you need. You take your prescription to the chemist's and get the medicine there</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <!-- <div class="icon"><i class="icofont-thermometer-alt"></i></div> -->
                            <div class="icon"><img src="JP Diagnostic pics/radio3.png" width="45px"></img></div>
                            <h4 class="title"><a href="">Radiology</a></h4>
                            <p class="description">Radiologists are medical doctors that specialize in diagnosing and
                                treating injuries and diseases using medical imaging </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="icofont-dna-alt-1"></i></div>
                            <h4 class="title"><a href="">DNA</a></h4>
                            <p class="description">DNA, short for deoxyribonucleic acid, is the molecule that contains
                                the genetic code of organisms.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>In an emergency? Need help now?</h3>
                    <p> A JP Diagnostics Center stand here for everything, we providing the facility of ambulance
                        (011-8149856), Book Your Appointment Today </p>
                    <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D Ultrasound |
                        ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <video width="600" height="400" controls style="max-width: 100%">
                            <source src="JP Diagnostic pics/JP Diagnostics - Silent MRI 3 Tesla Platform - CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) - 4D Ultrasound - ADVANCED PATHOLOGY LAB.mp4" type="video/mp4" class="img-fluid" alt="">
                            <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                            Your browser does not support HTML video.
                        </video>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>JP Diagnostics</h3>
                        <p class="font-italic">
                            If you're looking for a comfortable & patient-friendly home sample collection, look no
                            further!
                            JP Diagnostics provides home sample collection for our patients' safety during the pandemic.
                            Our experienced phlebotomists will collect your samples at the comfort of your home. Get
                            100% accurate reports under 6 hours via Email or SMS.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Radiology(X-rays, computed tomography (CT),
                                magnetic resonance imaging (MRI), nuclear medicine, positron emission tomography (PET)
                                and 4D Ultrasound, etc...)</li>
                            <li><i class="icofont-check-circled"></i>Pathology(HRCT Chest, Complete Blood Test(CBC),
                                Vitamin D25(Total), Kidney Function Test(LFT),etc...)</li>
                            <li><i class="icofont-check-circled"></i> Dental check up (Coming Soon)
                            </li>
                        </ul>
                        <p>
                            If you're looking for a comfortable & patient-friendly home sample collection, look no
                            further!
                            JP Diagnostics provides home sample collection for our patients' safety during the pandemic.
                            Our experienced phlebotomists will collect your samples at the comfort of your home. Get
                            100% accurate reports under 6 hours via Email or SMS.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-doctor-alt"></i>
                            <span data-toggle="counter-up">85</span>
                            <p><strong>Doctors</strong> are here for your health</p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-patient-bed"></i>
                            <span data-toggle="counter-up">18</span>
                            <p><strong>Departments</strong> to check in better way </p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-laboratory"></i>
                            <span data-toggle="counter-up">150</span>
                            <p><strong>Research Lab</strong> for knowing your proper health condition.</p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-award"></i>
                            <span data-toggle="counter-up">50</span>
                            <p><strong>Awards</strong> acheived by JP Diagnostics for quality check-up.</p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bx bx-receipt"></i>
                            <h4>HRCT Test</h4>
                            <p>High-resolution CT (HRCT) of the chest, also referred to as HRCT chest or HRCT of the
                                lungs, refers to a CT technique in which thin-slice chest images are obtained and
                                post-processed in a high-spatial-frequency reconstruction algorithm. </p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Complete Blood Test</h4>
                            <p>A complete blood count, also known as a full blood count, is a set of medical laboratory
                                tests that provide information about the cells in a person's blood.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-images"></i>
                            <h4>Liver Function Test</h4>
                            <p>Liver function tests, also referred to as a hepatic panel, are groups of blood tests that
                                provide information about the state of a patient's liver.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-shield"></i>
                            <h4>4D Ultrasound</h4>
                            <p>4D ultrasound is a medical ultrasound technique, often used in fetal, cardiac,
                                trans-rectal and intra-vascular applications.</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <!-- <div class="icon"><i class="icofont-heart-beat"></i></div> -->
                        <div class="icon"><img src="JP Diagnostic pics/tube.png" width="100px"></div>
                        <h4 class="title"><a href="">laboratory</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><img src="JP Diagnostic pics/oval.png" width="100px"></div>
                        <h4 class="title"><a href="">CT-Scan</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><img src="JP Diagnostic pics/radio3.png" width="85px"></div>
                        <h4 class="title"><a href="">4D Ultrasound</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="icofont-heartbeat"></i></div>
                        <h4 class="title"><a href="">X-ray</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="icofont-disabled"></i></div>
                        <h4 class="title"><a href="">HRCT Chest</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="icofont-autism"></i></div>
                        <h4 class="title"><a href="">MRI</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Appointment Section ======= -->

        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D Ultrasound |
                        ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</p>
                </div>

                <form action="/assets/files/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" default="">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <label>Phone no.</label>
                            <input type="tel" class="form-control" name="phone" maxlength="10" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label>Appointment Date</label>
                            <input type="date" name="apn-date" class="form-control datepicker"  id="date" placeholder="Appointment Date" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label>Department</label>
                            <select name="department" id="department" class="form-select">
                                <option value="">Select Department</option>
                                <option value="Radiology">Radiology</option>
                                <option value="Pathology">Pathology</option>
                                <!-- <option value="Department 3">Department 3</option> -->
                            </select>
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <label>Doctor</label>
                            <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                <option value="Dr. Deepak Aggarwal">Dr. Deepak Aggarwal</option>
                                <option value="Dr. Nidhi Aggarwal">Dr. Nidhi Aggarwal</option>
                                <!-- <option value="Doctor 3">Doctor 3</option> -->
                            </select>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label>Message</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div name="sent-message" class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center mb-3"><button type="submit" name="make_an_appointment">Make an
                            Appointment</button></div>
                </form>

            </div>
        </section>
        <!-- End Appointment Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Departments</h2>
                    <p>Radiology | Pathology</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item mt" id="Radiology">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Radiology</h4>
                                    <p>Radiology is the medical discipline that uses medical imaging to diagnose and
                                        treat diseases within the bodies of animals, including humans..</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" id="Pathology">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Pathology</h4>
                                    <p>Pathology is the study of the causes and effects of disease or injury. </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Radiology</h3>
                                <p class="font-italic">Radiology is the medical discipline that uses medical imaging to
                                    diagnose and treat diseases within the bodies of animals, including humans.</p>
                                <img src="assets/img/departments-R.jpg" alt="" class="img-fluid">
                                <p>A variety of imaging techniques such as X-ray radiography, ultrasound, computed
                                    tomography (CT), nuclear medicine including positron emission tomography (PET),
                                    fluoroscopy, and magnetic resonance imaging (MRI) are used to diagnose or treat
                                    diseases. Interventional radiology is the performance of usually minimally invasive
                                    medical procedures with the guidance of imaging technologies such as those mentioned
                                    above.</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Pathology</h3>
                                <p class="font-italic">Pathology is the study of the causes and effects of disease or
                                    injury. </p>
                                <img src="assets/img/departments-p.jpg" alt="" class="img-fluid">
                                <p> The word pathology also refers to the study of disease in general, incorporating a
                                    wide range of biology research fields and medical practices. However, when used in
                                    the context of modern medical treatment, the term is often used in a more narrow
                                    fashion to refer to processes and tests which fall within the contemporary medical
                                    field of "general pathology", an area which includes a number of distinct but
                                    inter-related medical specialties that diagnose disease, mostly through analysis of
                                    tissue, cell, and body fluid samples.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p></p>
                </div>

                <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            HR CT center in Mathura JP Diagnostics has state of the art machinery and is best for DEXA
                            scan and bone density scan Best pathology lab in mathura best blood test center in mathura.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="./JP Diagnostic pics/user/user.jpg" class="testimonial-img" alt="">
                        <h3>Mudasir</h3>
                        <h4></h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Best full body check up / checkup in Mathura. We saw JP Diagnostics pathology ad in
                            newspaper and their packages are good for full body health checkups
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="./JP Diagnostic pics/user/user.jpg" class="testimonial-img" alt="">
                        <h3>Lavina</h3>
                        <h4></h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Dr Deepak is a really good. Staff behaviour is also good they are very well trained. Best
                            one Ct Scan, Xray Diagnostics center in Mathura..
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="./JP Diagnostic pics/user/user.jpg" class="testimonial-img" alt="">
                        <h3>Charmy</h3>
                        <h4></h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            `I've visited for my ct scan . Technitian were polite. They treated so well in waiting room
                            and gave quick report . So i dont have to come again n again. Thanks`.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="./JP Diagnostic pics/user/user.jpg" class="testimonial-img" alt="">
                        <h3>Aditya</h3>
                        <h4></h4>
                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Doctors</h2>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="/JP Diagnostic pics/Dr. Deepak Aggarwal2.jpeg"  class="img-fluid" alt="">
                                <div class="social">
                                    <!-- <a href=""><i class="icofont-twitter"></i></a>
                                    <a href="https://www.facebook.com/jpdiagnostics.drdeepak"><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a> -->
                                <span>RADIOLOGY</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4><b>Dr. Deepak Aggarwal</b></h4>
                                <span><b>M.D.(Radiology) Gold Medalist</b></span>
                                <span><b>Director, Consultant Radiologists</b></span>
                                <span><b>& Fetal Medicine Specialist</b></span>
                                <span><b>Imaging Specialist</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="/JP Diagnostic pics/Dr. Nidhi Singh.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <span>RADIOLOGY</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dr. Nidhi Aggarwal</h4>
                                <span><b>M.D.(Radiology)</b></span>
                                <span><b>Director, Consultant Radiologists</b></span>
                                <span><b>CT/MRI, Cardiac & Breast</b></span>
                                <span><b>CT/MRI, Cardiac & Breast</b></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <SPAN>PATHOLOGY</SPAN>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <SPAN>PATHOLOGY</SPAN>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Photos of acheivments and JP Diagnostics Center.</p>
                </div>


                <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
                    <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-1.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-2.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-3.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-4.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-5.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-6.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-7.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-8.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-9.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-9.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/gallery-10.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/gallery-10.jpg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/Deepak Aggarwal - 1.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/Deepak Aggarwal - 1.jpeg" alt="" width="300px" height="230px"></a>
                    <a href="assets/img/gallery/Nidhi Aggarwal - 1.jpeg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/Nidhi Aggarwal - 1.jpeg" alt="" width="300px" height="230px"></a>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Silent MRI 3 Tesla Platform | CT SCAN (TRUE 16 DETECTORS- 96 Slices Recon) | 4D Ultrasound |
                        ADVANCED PATHOLOGY LAB & Healthcare, MATHURA</p>
                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.1053732781643!2d77.65104601415364!3d27.497098182879476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3973730a6339e9ab%3A0xef0d7b1b97db3d5f!2sJP%20DIAGNOSTICS%20-%20Silent%20MRI%203%20Tesla%20Platform%20%7C%20CT%20SCAN%20(TRUE%2016%20DETECTORS-%2096%20Slices%20Recon)%20%7C%204D%20Ultrasound%20%7C%20ADVANCED%20PATHOLOGY%20LAB%20%26%20Healthcare%2C%20MATHURA!5e0!3m2!1sen!2sin!4v1624557729336!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p> JSR Tower, Near Indian Oil Petrol Pump, <br>
                                        Goverdhan Chauraha,NH-2,MATHURA (U.P)<br><br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>Dr.Deepak@jpdaignostics.in<br>info@jpdaignostics.in</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p><a href="tel:+91-75794-70000">+91 7579470000</a><br><a href="tel:+91-75794-30000">+91 7579430000</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="/assets/files/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group ">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>JP Diagnostics</h3>
                            <p>
                                JSR Tower, Near Indian Oil Petrol Pump, <br>
                                Goverdhan Chauraha,NH-2,MATHURA (U.P)<br><br>
                                <strong>Phone:</strong> <a href="tel:+91-75794-70000">+91 7579470000</a><br>
                                <strong>Phone:</strong> <a href="tel:+91-75794-30000">+91 7579430000</a><br>
                                <strong>Email:</strong> Dr.Deepak@jpdaignostics.in<br>
                                <strong>Email:</strong> info@jpdaignostics.in<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/jpdiagnostics.drdeepak" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">MRI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">CT-Scan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">X-ray</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Radiology</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pathology</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <?php

                        // Connection to a Database

                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "";
                        $database = "subscribe";

                        // Create a connection

                        $conn = mysqli_connect($servername, $username, $password, $database);

                        // Die if connection was not successfull

                        if (!$conn) {
                            die("Sorry we failed to connect:" . mysqli_connect_error());
                        }
                        // Declaration the variable 

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $Subscriber_Email = $_POST['email'];

                            // sql query to be executed for insert data in a table

                            $sql = "INSERT INTO `subsciber_details` (`Subscriber_Email`, `Subscriber_Date`) VALUES ('$Subscriber_Email', current_timestamp())";
                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Thanks for subscribing ' . $Subscriber_Email . '  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
                                echo "The contact us request was not insert sucessfully because of this error --->" . mysqli_error($conn);
                            }
                        }
                        ?>
                        <h4>Our Newsletter</h4>
                        <p>A highly professional doctors and very famous Diagnostics center of Mathura City</p>
                        <form action="/index.php" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2021- <strong><span>JP Diagnostics</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <span>Kunal Garg</span>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <a href="https://wa.me/917579470000" class="going-to-whatsapp"><i class="icofont-whatsapp"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/php-email-form/addelement.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- <script>
        $(function(){
            var TodayDate = new Date();
            var month = TodayDate.getMonth() +1;
            var year = TodayDate.getUTCFullYear();
            var day = TodayDate.getDay() ;
            if(month < 10){
                month = "0" + month;
            }
            if(day < 10){
                day = "0" + day;
            }
            var maxDate = year + "-" + month + "-" + day;
            // document.getElementById("date").setAttribute("max", maxDate);
            document.getElementById("date").setAttribute("min", maxDate);
        })
    </script> -->



</body>

</html>