<?php
include("includes/header.php");
?>

<style>
    .skill-item {
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .skill-item:hover {
        background-color: #e9ecef;
    }

    .ser-icon i {
        font-size: 24px;
    }
</style>

<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span style="font-size: xx-large;"> <span>
                        < </span>Haseeb<span>/></span>
                    </span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#education-experience">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contect</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-1.jpg')">
        <div class="heading text-center">
            <h1>hello i'm Haseeb</h1>
            <p>Full Stack Developer</p>
            <h3 class="cd-headline clip is-full-width">
                <span>My expertise includes </span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">Web Developer</b>
                    <b>Web Design</b>
                </span>

            </h3>
            <br>
            <div class="social-icons mt-3">
                <a href="https://www.facebook.com/yourprofile" target="_blank" class="btn btn-outline-light btn-sm mx-2"
                    aria-label="Facebook">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a href="https://github.com/yourprofile" target="_blank" class="btn btn-outline-light btn-sm mx-2"
                    aria-label="GitHub">
                    <i class="fab fa-github fa-2x"></i>
                </a>
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank"
                    class="btn btn-outline-light btn-sm mx-2" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in fa-2x"></i>
                </a>
                <a href="https://wa.me/923062691054" target="_blank" class="btn btn-outline-light btn-sm mx-2"
                    aria-label="WhatsApp">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
            </div>
        </div>
    </section>


    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100"
        viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
        M0 100 Q 5 0 10 100
        M5 100 Q 10 30 15 100
        M10 100 Q 15 10 20 100
        M15 100 Q 20 30 25 100
        M20 100 Q 25 -10 30 100
        M25 100 Q 30 10 35 100
        M30 100 Q 35 30 40 100
        M35 100 Q 40 10 45 100
        M40 100 Q 45 50 50 100
        M45 100 Q 50 20 55 100
        M50 100 Q 55 40 60 100
        M55 100 Q 60 60 65 100
        M60 100 Q 65 50 70 100
        M65 100 Q 70 20 75 100
        M70 100 Q 75 45 80 100
        M75 100 Q 80 30 85 100
        M80 100 Q 85 20 90 100
        M85 100 Q 90 50 95 100
        M90 100 Q 95 25 100 100
        M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>About Haseeb.</h2>
                        <p>As a skilled web developer, I excel in using PHP and Java to create dynamic and efficient web
                            applications. With PHP, I build robust server-side solutions , while my Java
                            expertise ensures high-performance backend systems. This combination allows me to deliver
                            secure, scalable, and high-quality web solutions tailored to meet diverse client needs.</p>
                        <a href="#" class="sim-btn btn-hover-new" data-text="Download CV"><span>Download CV</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/image.jpg" alt="" class="img-fluid img-rounded ">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<div id="skills" class="section lb">
    <div class="container">
        <div class="section-title text-left">
            <h3>Skills</h3>
            <p style="color: black;">Here’s a comprehensive overview of my technical and professional skills.</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-6">
                <div class="services-inner-box mb-4">
                    <div class="ser-icon mb-3">
                        <i class="flaticon-development"></i>
                    </div>
                    <h2>Technical Skills</h2>
                    <div class="d-flex flex-wrap">
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">PHP</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">Laravel</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">CodeIgniter</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">JavaScript</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">jQuery</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">MySQL</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">HTML</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">CSS</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">React</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">Bootstrap</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">Code Reviews</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">WordPress</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInLeft" style="color: black;">Website Development</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="services-inner-box mb-4">
                    <div class="ser-icon mb-3">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h2>Professional Skills</h2>
                    <div class="d-flex flex-wrap">
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Leadership</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Team Collaboration</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Client Communication</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Problem Solving</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Time Management</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Analytical Thinking</span>
                        <span class="skill-item border p-2 m-2 animate__animated animate__fadeInRight" style="color: black;">Critical Thinking</span>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

    <div id="education-experience" class="section lb "
        style="background: url('uploads/banner-2.webp') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="section-title text-left">
                <h3 class="text-white">Education & Experience</h3>
                <p class="text-white">Here is a brief overview of my educational background and professional
                    experience.
                </p>
            </div><!-- end title -->

            <div class="row">
                <!-- Education -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> Education
                            </h2>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">Full Stack Development From Uvision</h4>
                                    <p class="card-text">March 2024 - Aug 2024</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">Uvision is a renowned remote software development program.
                                            Through Uvision, I've gained valuable experience in remote work and
                                            collaborative pair programming.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">BS Computer Science From University Of Lahore</h4>
                                    <p class="card-text">2023 - Present</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">Currently pursuing a degree in Computer Science at the
                                            University of Lahore. The program is equipping me with in-depth
                                            knowledge
                                            and skills in software development, including advanced programming
                                            techniques, data structures, and algorithmic problem-solving. My studies
                                            are
                                            helping me build a solid foundation for a career in technology and
                                            innovation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <!-- Work Experience -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fa fa-briefcase" aria-hidden="true"></i> Work Experience
                            </h2>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">PHP Developer at Uvision</h4>
                                    <p class="card-text">June 2024- Sep 2024</p>
                                    <p class="text-dark">Responsibilities</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Bug
                                            Fixing
                                        </li>
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Website
                                            Development</li>
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Website
                                            Maintenance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">Full Stack Developer at Fiverr</h4>
                                    <p class="card-text">2024-present</p>
                                    <p class="text-dark">Responsibilities</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Bug
                                            Fixing
                                        </li>
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Website
                                            Development</li>
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i> Website
                                            Maintenance</li>
                                        <li class="mb-2"><i class="fa fa-dot-circle" aria-hidden="true"></i>
                                            WordPress
                                            Development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="portfolio" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Portfolio</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam
                    risus.
                </p>
            </div><!-- end title -->

            <div class="gallery-menu row">
                <div class="col-md-12">
                    <div class="button-group filter-button-group text-left">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".gal_a">Web Development</button>
                        <button data-filter=".gal_b">Creative Design</button>
                        <button data-filter=".gal_c">Graphic Design</button>
                    </div>
                </div>
            </div>

            <div class="gallery-list row">
                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]"
                                class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end section -->

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contact</h3>
                <p>Feel free to reach out to us for any inquiries or assistance you need.</p>
            </div><!-- end title -->

            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Your Name"
                                            required="required"
                                            data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Your Email"
                                            required="required"
                                            data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone"
                                            required="required"
                                            data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message"
                                            required="required"
                                            data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="text-center">
                                        <div id="success"></div>
                                        <button id="sendMessageButton" class="sim-btn btn-hover-new"
                                            data-text="Send Message" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->

                <!-- Contact Details -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="card bg-white p-4 d-flex">
                                <div class="d-flex align-items-center me-3">
                                    <i class="fas fa-phone-alt fa-2x" style="flex-shrink: 0;"></i>
                                </div>
                                <br>
                                <div>
                                    <h5 class="mb-0" style="color: black;">Phone</h5>
                                    <p class="mb-0" style="color: black;">+92 306 2691 054</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="card bg-white p-4 d-flex">
                                <div class="d-flex align-items-center me-3">
                                    <i class="fas fa-map-marker-alt fa-2x" style="flex-shrink: 0;"></i>
                                </div>
                                <br>
                                <div>
                                    <h5 class="mb-0" style="color: black;">Address</h5>
                                    <p class="mb-0" style="color: black;">DHA Rahbar Phase 11, Lahore</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card bg-white p-4 d-flex">
                                <div class="d-flex align-items-center me-3">
                                    <i class="fas fa-envelope fa-2x" style="flex-shrink: 0;"></i>
                                </div>
                                <br>
                                <div>
                                    <h5 class="mb-0" style="color: black;">Email</h5>
                                    <p class="mb-0"><a href="mailto:maharhaseeb054@gmail.com"
                                            style="color: black;">maharhaseeb054@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed d-flex justify-content-between align-items-center">
                <p class="footer-company-name mb-0 text-white">All Rights Reserved. &copy; 2024 <a href="#"
                        class="text-white">Haseeb</a></p>
                <div class="footer-icons">
                    <a href="https://www.facebook.com" class="btn btn-light btn-sm me-2" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.github.com" class="btn btn-light btn-sm me-2" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com" class="btn btn-light btn-sm" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="https://wa.me/923062691054" target="_blank" class="btn btn-light btn-sm "
                        aria-label="WhatsApp">
                        <i class="fab fa-whatsapp "></i>
                    </a>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Camera Slider -->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/headline.js"></script>
    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>