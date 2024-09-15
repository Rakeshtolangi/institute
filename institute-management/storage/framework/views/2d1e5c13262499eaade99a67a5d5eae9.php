<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Everest Infosys | Since 2012</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <script src="<?php echo e(asset('frontend/assets/js/theme-script.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/fontawesome/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.theme.default.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/feather/feather.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/slick/slick-theme.cs')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/select2/css/select2.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/swiper/css/swiper.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/plugins/aos/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
    <style>
       .owl-carousel .owl-item .lead-img img {
    height: 60px;
    width: 100%;
    object-fit: scale-down;
    aspect-ratio: 1.5;
    border: 1px solid #e6e6e6;
    padding: 2px;
    border-radius: 5px;
}
    </style>
</head>

<body class="home-three">

    <div class="main-wrapper">

        <header class="header-three">
            <div class="header-fixed-three header-fixed">
                <nav class="navbar navbar-expand-lg header-nav-three scroll-sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="<?php echo e(url('/')); ?>" class="navbar-brand logo">
                                <img src="<?php echo e(asset('frontend/logo.png')); ?>" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="<?php echo e(url('/')); ?>" class="menu-logo">
                                    <img src="<?php echo e(asset('frontend/assets/img/logo/logo.svg')); ?>" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu active">
                                    <a href="<?php echo e(url('/')); ?>">Home</a>
                                 
                                </li>

                                <li class="has-submenu">
                                    <a href="#">Courses</a>
                                 
                                </li>
                                
                                
                                <li class="has-submenu">
                                    <a href="#">Instructor</a>
                                    
                                </li>
                                <li class="has-submenu">
                                    <a href="#">About Us</a>
                                    
                                </li>
                                
                                <li class="has-submenu">
                                    <a href="#">Contact Us</a>
                                    
                                </li>
                               
                                <li class="login-link">
                                    <a href="<?php echo e(route('login')); ?>">Login / Signup</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht align-items-center">
                            <li class="nav-item">
                                <div>
                                    <a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle  ">
                                        <i class="fa-solid fa-moon"></i>
                                    </a>
                                    <a href="javascript:void(0);" id="light-mode-toggle" class="dark-mode-toggle ">
                                        <i class="fa-solid fa-sun"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link login-three-head button" href="<?php echo e(route('login')); ?>"><span>Login</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link signin-three-head" href="#">Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


        <section class="home-three-slide d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-8 col-md-12 col-12" data-aos="fade-down">
                        <div class="home-three-slide-face">
                            <div class="home-three-slide-text">
                                <h5>The Leader in Learning</h5>
                                <h1>Engaging <span>&</span> Accessible Courses For All</h1>
                                <p>Bringing technology and education together.
                                    Improving education with smart management tools.
                                    Easy management, better learning.
                                </p>
                            </div>
                            <div class="banner-three-content">
                                <form class="form"
                                    action="#">
                                    <div class="form-inner-three">
                                        <div class="input-group">
                                            <input type="email" class="form-control"
                                                placeholder="Search School, eductional centers, etc">
                                            <span class="drop-detail-three">
                                                <select class="form-three-select select">
                                                    <option>Select category</option>
                                                    <option>Basic Computing</option>
                                                    <option>Graphics Designing</option>
                                                    <option>Web design</option>
                                                    <option>Accounting and Taxation</option>
                                                    <option> Hardware and Networking</option>
                                                </select>
                                            </span>
                                            <button class="btn btn-three-primary sub-btn" type="submit"><i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-12" data-aos="fade-up">
                        <div class="girl-slide-img aos">
                            <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/slider/home-slider.png')); ?>" alt="Img">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section student-course home-three-course">
            <div class="container">
                <div class="course-widget-three">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/icon-three/course-01.svg')); ?>" alt="Img">
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-blue"><span class="counterUp">10</span>K</h4>
                                            <p>Total Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/icon-three/course-02.svg')); ?>" alt="Img">
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-yellow"><span class="counterUp">200</span>+</h4>
                                            <p>Tutors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three">
                                <div class="align-items-center">
                                    <div class="course-count-three course-count ms-0">
                                        <div class="course-img">
                                            <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/icon-three/course-03.svg')); ?>" alt="Img">
                                        </div>
                                        <div class="course-content-three">
                                            <h4 class="text-info"><span class="counterUp">6</span>K+</h4>
                                            <p>Ceritified Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                            <div class="course-details-three mb-0">
                                <div class="align-items-center">
                                    <div class="course-count-three">
                                        <div class="course-img">
                                            <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/icon-three/course-04.svg')); ?>" alt="Img">
                                        </div>
                                        <div class="course-content-three course-count ms-0">
                                            <h4 class="text-green"><span class="counterUp">60</span>K +</h4>
                                            <p>Total Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="master-skill-three">
            <div class="master-three-vector">
                <img class="ellipse-right img-fluid" src="<?php echo e(asset('frontend/assets/img/bg/pattern-01.png')); ?>" alt="Img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-right">
                        <div class="master-three-images">
                            <div class="master-three-left">
                                <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/students/career.png')); ?>" alt="image-banner"
                                    title="image-banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-left">
                        <div class="home-three-head" data-aos="fade-up">
                            <h2>Introducing Everest Infosys</h2>
                        </div>
                        <div class="home-three-content" data-aos="fade-up">
                            <p>"Everest Infosys is here to provide excellent education and training to help students
                                reach their career goals. Our vision is to motivate and
                                support students so they can achieve their best and make a positive difference in their
                                lives and communities. We believe everyone deserves
                                access to a great education, so we work hard to keep our programs affordable and
                                effective. With our skilled teachers and modern facilities,
                                students get a strong mix of classroom learning and practical skills."
                            </p>
                            <br>
                            <p>"Our mission is to create a friendly and encouraging learning environment where students
                                can grow and succeed.
                                By combining hands-on experience with academic lessons, we prepare students to handle
                                real-world challenges confidently.
                                Our goal is to help students build the skills and confidence they need to do well in
                                today’s job market.
                                At Everest Infosys, we are committed to helping every student achieve their dreams and
                                make a positive impact in their community."</p>
                        </div>

                    </div>
                </div>
        </section>


        <section class="home-three-courses">
            <div class="container">
                <div class="favourite-course-sec">
                    <div class="row">
                        <div class="home-three-head section-header-title" data-aos="fade-up">
                            <div class="row align-items-center d-flex justify-content-between">
                                <div class="col-lg-6 col-sm-8">
                                    <h2>Courses</h2>
                                </div>
                                <div class="col-lg-6 col-sm-4">
                                    <div class="see-all">
                                        <a href="#">See all<span class="see-all-icon"><i
                                                    class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-corses-main">
                            <div class="tab-content">

                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="alltab" role="tabpanel">
                                        <div class="all-course">
                                            <div class="row">

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt="Img"
                                                                        src="<?php echo e(asset('frontend/assets/img/course/course-26.jpg')); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Basic computer course</p>
                                                                        <h3 class="title instructor-text">
                                                                            Basic computer courses teach fundamental skills in using hardware and software, 
                                                                            including operating systems, word processing, and internet navigation.</h3>
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div
                                                                        class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3><i class="fas fa-rupee-sign"></i>. 2500

                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>3 months</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt="Img"
                                                                        src="<?php echo e(asset('frontend/assets/img/course/course-21.jpg')); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Graphics Designing</p>
                                                                        <h3 class="title instructor-text">Graphics designing combines art and technology to create visually engaging content.</h3>
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div
                                                                        class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3><i class="fas fa-rupee-sign"></i>.  6000

                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>2 months</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt="Img"
                                                                        src="<?php echo e(asset('frontend/assets/img/course/course-03.jpg')); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Web design</p>
                                                                        <h3 class="title instructor-text">Web design involves crafting the layout, visual appearance, and usability of 
                                                                            websites to create an engaging and user-friendly online experience.</h3>
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div
                                                                        class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3><i class="fas fa-rupee-sign"></i>. 10000

                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>2 months</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                                    <div class="course-box-three">
                                                        <div class="course-three-item">
                                                            <div class="course-three-img">
                                                                <a href="course-details.html">
                                                                    <img class="img-fluid" alt="Img"
                                                                        src="<?php echo e(asset('frontend/assets/img/course/course-22.jpg')); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="course-three-content">
                                                                <div class="course-group-three">
                                                                </div>
                                                                <div class="course-three-text">
                                                                    <a href="course-details.html">
                                                                        <p>Accounting and Taxation</p>
                                                                        <h3 class="title instructor-text">Accounting and taxation manage financial records and ensure compliance with tax laws, optimizing 
                                                                            financial health and regulatory adherence.</h3>
                                                                    </a>
                                                                </div>

                                                                <div
                                                                    class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                                    <div
                                                                        class="price-three-view d-flex align-items-center">
                                                                        <div class="course-price-three">
                                                                            <h3><i class="fas fa-rupee-sign"></i>. 10000

                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="price-three-time d-inline-flex align-items-center">
                                                                        <i class="fa-regular fa-clock me-2"></i>
                                                                        <span>3 months</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-transform">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="cta-content">
                            <h2>Enhance Your Learning Opportunities</h2>
                            <p>Create an account to stay informed about our latest updates, course offerings, and exclusive promotions.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="transform-button-three">
                            <a href="register.html" class="btn btn-action">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-goals">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-3 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="acheive-goals-main">
                            <h2>Acheive you Goals with Everest Infosys
                            </h2>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="acheive-elips-one">
                                <img src="<?php echo e(asset('frontend/assets/img/icon-three/ellipse-1.svg')); ?>" alt="Img">
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">253,085</span></h4>
                                <p>Students Enrolled all over World</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="<?php echo e(asset('frontend/acheive-elips-two')); ?>">
                                <img src="assets/img/icon-three/ellipse-2.svg" alt="Img">
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">1,205</span></h4>
                                <p>Total Courses on our Platform</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="acheive-goals">
                            <div class="acheive-elips-three">
                                <img src="<?php echo e(asset('frontend/assets/img/icon-three/ellipse-3.svg')); ?>" alt="Img">
                            </div>
                            <div class="acheive-goals-content text-center course-count ms-0">
                                <h4><span class="counterUp">56</span></h4>
                                <p>Countries of Students </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="accelerate-cloud-three">
            <div class="container">
                <div class="shapes-three-right">
                    <img class="accelerate-one" src="<?php echo e(asset('frontend/assets/img/bg/shape-1.png')); ?>" alt="Img">
                    <img class="accelerate-two" src="<?php echo e(asset('frontend/assets/img/bg/pattern-03.png')); ?>" alt="Img">
                </div>
                <div class="shapes-three-left">
                    <img class="accelerate-three" src="<?php echo e(asset('frontend/assets/img/bg/pattern-02.png')); ?>" alt="Img">
                    <img class="accelerate-four" src="<?php echo e(asset('frontend/assets/img/bg/shape-2.png')); ?>" alt="Img">
                    <img class="accelerate-five" src="<?php echo e(asset('frontend/assets/img/bg/pattern-04.png')); ?>" alt="Img">
                </div>

                <div class="award-one">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-right">
                            <div class="award-three-images-one">
                                <img class="img-fluid" src="<?php echo e(asset('frontend/assets/img/students/award-01.png')); ?>" alt="image-banner"
                                    title="image-banner">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="award-three-content-one">
                                <div class="award-list-info" data-aos="fade-up">
                                    
                                    <div class="award-list-content">
                                        <h2>Why choose Everest Infosys </h2>
                                        <p >The idea to establish Everest Infosys came from my deep passion for education and the realization that digital skills are increasingly vital in today's world. With this in mind, I founded the institute to ensure that individuals from all walks of life have access to quality, practical training that opens doors to meaningful career opportunities.

                                            Our journey began with a simple vision: to bridge the gap between traditional learning and the growing demands of the digital age. I started this institute with a focus on empowering students with the most in-demand skills in areas such as Digital Learning, Graphic Design, Web Development, Computerized Accounting, and Hardware & Networking.
                                            
                                            I believe that education is the foundation for personal and professional growth, and that’s why every course we offer is designed to provide not just theoretical knowledge but real-world application. Our instructors are industry experts who ensure that our students leave with the confidence and skills needed to succeed in their careers.
                                            
                                            From humble beginnings to where we are today, the goal has always been to offer quality, accessible education. I am proud of how far we have come and excited about what the future holds for   and our students. Together, we are building a brighter future, one skill at a time.
                                    
                                        </p>
                                        <div style="text-align: right; font-weight: bold; color:white;">
                                            Managing Director <br>(MD) Prem Chand
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-three-trending">
            <div class="container">
                <div class="row">
                    <div class="home-three-head section-header-title" data-aos="fade-up">
                        <div class="row align-items-center d-flex justify-content-between">
                            <div class="col-lg-12">
                                <h2>Most Trending Courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel home-three-trending-course owl-theme" data-aos="fade-up">
                        <div class="trending-three-item">
                            <div class="trending-content-top trending-bg-two">
                                <div class="course-title-one">
                                    <a href="course-details.html">Basic Computer Skills</a>
                                </div>
                                <div class="trending-three-text">
                                    <a href="course-details.html">
                                        <h3 class="title instructor-text">The Complete basic friendly course.</h3>
                                        <p>Learn to effectively use operating systems, manage files, and operate essential software for everyday tasks and digital communication
                                        </p>
                                    </a>
                                </div>
                                <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                    <div class="trending-three-counts d-flex align-items-center">
                                        <img src="<?php echo e(asset('frontend/assets/img/icon-three/student-icon.svg')); ?>" alt="Img">
                                        <p>900 Students</p>
                                    </div>
                                    <div class="price-three-time d-inline-flex align-items-center">
                                        <i class="fa-regular fa-clock me-2"></i>
                                        <span>3 months</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-content-footer">
                                <div class="trending-price-group d-flex align-items-center justify-content-between">
                                    <div class="trending-group-view">
                                        <div class="trending-price-three">
                                            <h3><i class="fas fa-rupee-sign"></i>. 2500</h3>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>

            </div>
        </section>

        <section class="gallery-three">
            <div class="container">
                <div class="home-three-head section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between">
                        <div class="col-lg-6 col-sm-12">
                            <h2>Courses Instructor</h2>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="see-all">
                                <a href="instructor-list.html">See all<span class="see-all-icon"><i
                                            class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-gallery-three">
                    <div class="row">

                        <div class="col-lg-5 col-md-5">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="gallery-three-img-item">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-1.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>Bimal gurung</h6>
                                                        <p>Basic computer course</p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="gallery-three-img-item">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-2.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>Himal jha</h6>
                                                        <p>Accounting</p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="gallery-three-img-item mb-0">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-3.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>Prativa khadka</h6>
                                                        <p>web developemnt</p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="gallery-three-img-item mb-0">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-4.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>parash khadka</h6>
                                                        <p>Graphics Design</p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3">
                            <div class="gallery-three-img-item mb-0">
                                <div class="content-three-main">
                                    <div class="gallery-img">
                                        <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-5.jpg')); ?>" alt="Instructor">
                                    </div>
                                    <div class="content-three-overlay">
                                        <div class="content-three-text">
                                            <div>
                                                <h6>Hardware and networking</h6>
                                                <p>Chanas Bohara</p>
                                            </div>
                                            <div>
                                                <a href="instructor-list.html" class="content-three-arrows">
                                                    <span><i class="fas fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="gallery-three-img-item">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-6.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>jonish khatri</h6>
                                                        <p>Hardware and networking</p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="gallery-three-img-item mb-0">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-7.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>Dhiraj hamal</h6>
                                                        <p>Basic computer </p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="gallery-three-img-item mb-0">
                                        <div class="content-three-main">
                                            <div class="gallery-img">
                                                <img src="<?php echo e(asset('frontend/assets/img/gallery/gallery-8.jpg')); ?>" alt="Instructor">
                                            </div>
                                            <div class="content-three-overlay">
                                                <div class="content-three-text">
                                                    <div>
                                                        <h6>Bikash shrestha</h6>
                                                        <p>Accounting </p>
                                                    </div>
                                                    <div>
                                                        <a href="instructor-list.html" class="content-three-arrows">
                                                            <span><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="home-three-become">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8" data-aos="fade-up">
                        <div class="become-content-three">
                            <h2>Become An Instructor</h2>
                            <p>Join top educators from around the globe in teaching and inspiring students at Everest Infosys. Share your expertise and help shape the future of learning.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up">
                        <div class="become-button-three">
                            <a href="register.html" class="btn btn-become">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="lead-companies-three">
            <div class="container">
                <div class="home-three-head section-header-title aos-init aos-animate">
                    <div class="row align-items-center d-flex justify-content-between">
                        <div class="col-lg-12" data-aos="fade-up">
                            <h2>Partner Company</h2>
                        </div>
                    </div>
                </div>
                <div class="m-0 p-0 lead-group aos" data-aos="fade-up">
                    <div class="lead-group-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/ccgroup.png')); ?>">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/laika-logo.png')); ?>">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/lead-03.png')); ?>">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/lead-04.png')); ?>">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/lead-05.png')); ?>">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/lead-06.png')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-three">
            <div class="container">
                <div class="testimonial-pattern">
                    <img class="pattern-left img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/bg/pattern-05.svg')); ?>">
                    <img class="pattern-right img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/bg/pattern-06.svg')); ?>">
                </div>
                <div class="testimonial-three-content">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="become-content">
                                <h2 class="aos-init aos-animate">They Trusted us</h2>
                                <h4 class="aos-init aos-animate">We are a very happy because we have a happy customer
                                </h4>
                            </div>

                            <a href="instructor-profile.html" class="btn btn-action aos-init aos-animate"
                                data-aos="fade-up">View all Testimonail</a>

                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="swiper-testimonial-three">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/bg/quote.svg')); ?>">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>The courses were well-organized and provided practical skills that I can apply directly to my career. The instructors were knowledgeable and 
                                                    supportive, creating a positive and engaging learning environment. I particularly appreciated the hands-on approach and the resources available. Overall, I feel well-prepared and confident in my abilities thanks to the valuable education I received here.
                                                </p>
                                            </div>
                                         
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class="img-fluid" alt="Img"
                                                        src="<?php echo e(asset('frontend/assets/img/profiles/avatar-02.jpg')); ?>">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Nabina Rawal</h6>
                                                    <p>Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/bg/quote.svg')); ?>">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>My time at Everest Infosys has been truly rewarding. The courses were clear and practical, and the instructors were always available to offer guidance and support whenever we needed. I enjoyed the learning method and the supportive atmosphere. The skills I've gained here have significantly helped to build my confidence and skills for the professional world. 
                                                    Overall, it’s been a great place to learn and grow.</p>
                                            </div>
                
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class alt="Img" src="<?php echo e(asset('frontend/assets/img/profiles/avatar-01.jpg')); ?>">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Sumit Khadka</h6>
                                                    <p>Web developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="testimonial-item-five">
                                            <div class="testimonial-quote">
                                                <img class="quote img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/bg/quote.svg')); ?>">
                                            </div>
                                            <div class="testimonial-content">
                                                <p>The courses were well-organized and provided practical skills that I can apply directly to my career. The instructors were knowledgeable and 
                                                    supportive, creating a positive and engaging learning environment. I particularly appreciated the hands-on approach and the resources available. Overall, I feel well-prepared and confident in my abilities thanks to the valuable education I received here.
                                                </p>
                                            </div>
                                          
                                            <div class="testimonial-users">
                                                <div class="imgbx">
                                                    <img class="img-fluid" alt="Img"
                                                        src="<?php echo e(asset('frontend/assets/img/profiles/avatar-02.jpg')); ?>">
                                                </div>
                                                <div class="d-block">
                                                    <h6>Nabina Rawal</h6>
                                                    <p>Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="testimonial-bottom-nav">
                                    <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i>
                                    </div>
                                    <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="latest-blog-three">
            <div class="container">
                <div class="home-three-head section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between">
                        <div class="col-lg-6 col-md-8">
                            <h2>Latest news & Events</h2>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="see-all">
                                <a href="blog-list.html">See all<span class="see-all-icon"><i
                                            class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-blog-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-md-12" data-aos="fade-down">
                                    <div class="event-blog-three blog-three-one">
                                        <div class="blog-img-three">
                                            <a href="blog-list.html">
                                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/blog/blog-20.jpg')); ?>">
                                            </a>
                                        </div>
                                        <div class="latest-blog-content">
                                            <div class="event-three-title">
                                                <div class="event-span-three">
                                                    <span class="span-name-three badge-green">Sales</span>
                                                </div>
                                                <a href="blog-list.html">
                                                    <h5>New Course Launch</h5>
                                                    <p>Advanced Web Development Everest Infosys is excited to announce the launch of our new course in Advanced Web Development. Starting next month, this course will cover the latest technologies and techniques in web design and development, including modern frameworks and responsive design. Update with us for the fast-evolving web industry!

                                                    </p>
                                                </a>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span>Jun 15, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-down">
                                    <div class="event-blog-three blog-three-two">
                                        <div class="blog-img-three">
                                            <a href="blog-list.html">
                                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/blog/blog-21.jpg')); ?>">
                                            </a>
                                        </div>
                                        <div class="latest-blog-content">
                                            <div class="event-three-title">
                                                <div class="event-span-three">
                                                    <span class="span-name-three badge-info">Sales</span>
                                                </div>
                                                <a href="blog-list.html">
                                                    <h5>Advanced Web Development Everest Infosys is excited to announce the launch of our new course in Advanced Web Development. Starting next month, this course will cover the latest technologies and techniques in web design and development, including modern frameworks and responsive design. Update with us for the fast-evolving web industry!
                                                    </h5>
                                                    <p>oin us for our Annual Student Showcase on 12th August 2024. This exciting event will feature presentations and demonstrations of projects created by our talented students. It’s a great opportunity to see firsthand the innovative work and skills developed throughout the year. Don’t miss out on celebrating our students' achievements!

                                                    </p>
                                                </a>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span>Jun 15, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-md-12" data-aos="fade-down">
                                    <div class="event-blog-three blog-three-three">
                                        <div class="blog-img-three">
                                            <a href="blog-list.html">
                                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/blog/blog-22.jpg')); ?>">
                                            </a>
                                        </div>
                                        <div class="latest-blog-content">
                                            <div class="event-three-title">
                                                <div class="event-span-three">
                                                    <span class="span-name-three badge-info">Updates</span>
                                                </div>
                                                <a href="blog-list.html">
                                                    <h5>Guest Speaker Series</h5>
                                                    <p>Insights from Industry Experts We are thrilled to welcome a series of guest speakers from leading tech companies and creative industries. Starting on 15th July 2024, these experts will share their insights and experiences in fields such as digital design, accounting solutions, and network security. These sessions will provide valuable knowledge and networking opportunities for our students.

                                                    </p>
                                                </a>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span>Jun 15, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-down">
                                    <div class="event-blog-three blog-three-four">
                                        <div class="blog-img-three">
                                            <a href="blog-list.html">
                                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/blog/blog-23.jpg')); ?>">
                                            </a>
                                        </div>
                                        <div class="latest-blog-content">
                                            <div class="event-three-title">
                                                <div class="event-span-three">
                                                    <span class="span-name-three badge-info">Updates</span>
                                                </div>
                                                <a href="blog-list.html">
                                                    <h5>Student Internship Program Launch</h5>
                                                    <p>starting 1st August 2024. This initiative connects students with top industry partners, providing real-world experience and valuable networking opportunities. Apply now to gain hands-on experience and kickstart your career with support from leading professionals.

                                                    </p>
                                                </a>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span>Jun 15, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" data-aos="fade-down">
                                    <div class="event-blog-three blog-three-five">
                                        <div class="blog-img-three">
                                            <a href="blog-list.html">
                                                <img class="img-fluid" alt="Img" src="<?php echo e(asset('frontend/assets/img/blog/blog-24.jpg')); ?>">
                                            </a>
                                        </div>
                                        <div class="latest-blog-content">
                                            <div class="event-three-title">
                                                <div class="event-span-three">
                                                    <span class="span-name-three badge-yellow">Updates</span>
                                                </div>
                                                <a href="blog-list.html">
                                                    <h5>Annual Alumni Networking Event</h5>
                                                    <p>Join us for our Annual Alumni Networking Event on 16th April 2024. This special gathering brings together past and present students for an evening of networking, professional development, and reconnecting with former classmates and faculty. It’s a great opportunity to share experiences, explore new career opportunities, and strengthen connections within our community.

                                                    </p>
                                                </a>
                                                <div class="blog-student-count">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <span>Jun 15, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer footer-three">

            <div class="footer-three-top" data-aos="fade-up">
                <div class="container">
                    <div class="footer-three-top-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">

                                <div class="footer-widget-three footer-about">
                                    <div class="footer-three-logo">
                                        <img class="img-fluid" src="<?php echo e(asset('frontend/logo.png')); ?>" alt="logo" style="filter: invert(1);">
                                    </div>
                                    <div class="footer-three-about">
                                        <p>"Everest Infosys is here to provide excellent education and training to help students reach their career goals. 
                                            Our vision is to motivate and support 
                                            students so they can achieve their best and make a positive difference in their lives and communities. </p>
                                    </div>
                                    <div class="newsletter-title">
                                        <h6>Get Updates</h6>
                                    </div>
                                    <div class="box-form-newsletter">
                                        <form class="form-newsletter">
                                            <input class="input-newsletter" type="text"
                                                placeholder="Enter your email here">
                                            <button class="btn btn-default font-heading icon-send-letter">Subscribe
                                                Now</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="col-lg-3 col-md-3 col-12">

                                <div class="footer-widget-three footer-menu-three footer-three-right">
                                    <h6 class="footer-three-title">For Instructor</h6>
                                    <ul>
                                        <li><a href="instructor-profile.html">Profile</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="instructor-list.html">Instructor</a></li>
                                        <li><a href="instructor-dashboard.html"> Dashboard</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-3 col-12">

                                <div class="footer-widget-three footer-menu-three">
                                    <h6 class="footer-three-title">For Student</h6>
                                    <ul>
                                        <li><a href="student-profile.html">Profile</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="students-list.html">Student</a></li>
                                        <li><a href="student-dashboard.html"> Dashboard</a></li>
                                    </ul>
                                </div>

                            </div> -->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div style="overflow:hidden;max-width:100%;width:1000px;height:500px;"><div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=jp+school+surkhet+birendranagar&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemaps-made" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="make-map-data">premium bootstrap themes</a><style>#embed-ded-map-canvas img{max-height:none;max-width:none!important;background:none!important;}</style></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-three-bottom" data-aos="fade-up">
                <div class="container">

                    <div class="copyright-three">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icon-three">
                                    <h6>Connect Socially</h6>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="feather-facebook-icon">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="feather-twitter-icon">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="feather-linkedin-icon">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="feather-youtube-icon">
                                                <i class="feather-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="privacy-policy-three">
                                    <ul>
                                        <li><a href="term-condition.html">Terms & Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="support.html">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="copyright-text-three">
                                    <p class="mb-0">&copy; 2024 Everest Infosys. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>


    <script src="<?php echo e(asset('frontend/assets/js/jquery-3.7.1.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/plugins/aos/aos.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/js/jquery.waypoints.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery.counterup.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/plugins/select2/js/select2.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/plugins/slick/slick.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/plugins/swiper/js/swiper.min.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>

    <script src="<?php echo e(asset('frontend/assets/js/script.js')); ?>" type="a860e97a09b072416dbc7e62-text/javascript"></script>
    <script src="<?php echo e(asset('frontend/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')); ?>"
        data-cf-settings="a860e97a09b072416dbc7e62-|49" defer></script>
</body>


</html><?php /**PATH C:\laragon\www\institute-management\resources\views/frontend.blade.php ENDPATH**/ ?>