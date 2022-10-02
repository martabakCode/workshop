<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Workshop <?= date("Y"); ?></title>
    <meta name="description" content="Workshop <?= date('Y'); ?>" />
    <meta name="keywords" content="Workshop <?= date('Y'); ?>, FrontEnd, BackEnd, HMTI, UDINUS" />
    <meta name="author" content="hmtiudinus.org" />

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/logo.png" />
    <link rel="icon" type="image/x-icon" sizes="76x76" href="/assets/img/favicon/logo.png" />
    <link rel="manifest" href="/assets/img/favicon/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />   

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/font-awesome.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/assets/libs/maginificpopup/magnific-popup.css" media="all" />

    <!-- Time Circle -->
    <link rel="stylesheet" href="/assets/libs/timer/TimeCircles.css" media="all" />

    <!-- Circle Type -->
    <link rel="stylesheet" href="/assets/libs/circletype.min.js" media="all" />

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="/assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="/assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cPoppins:300,400,400i,600,600i,700,800,900" />




    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="/assets/css/style-default.min.css" media="all" />
    <link rel="stylesheet" href="/assets/css/style.css" media="all" />

    <!-- MODERNIZER CSS  -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        @media screen and (min-width:800px) {
            .tengah {
                margin-left: auto;
                margin-right: auto;
                width: 350px;
                height: 417px;
                padding: 15px;
            }

        }

        @media screen and (max-width:800px) {
            .tengah {
                margin-left: auto;
                margin-right: auto;
                padding: 15px;
            }
        }
    </style>

</head>

<body class="home" id="home">
    <div id="preloader">
        <div class="textt">
            <img class="animate-flicker" src="<?= base_url("assets/img/preloader.png"); ?>">
        </div>
    </div>

    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="lgx-container ">
        <!-- ***  ADD YOUR SITE CONTENT HERE *** -->


        <!--HEADER-->
        <header>
            <div id="lgx-header" class="lgx-header">
                <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed ">
                    <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
                    <div class="lgx-container">
                        <!--lgx-container-fluid-->
                        <nav class="navbar navbar-default lgx-navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- <div class="lgx-logo">
                                    <a href="" class="lgx-scroll">
                                        <img src="/assets/img/logo.png" alt="Hi-Talk Logo" />
                                    </a>
                                </div> -->
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <div class="lgx-nav-right navbar-right">
                                    <div class="lgx-cart-area">
                                        <a class="lgx-btn " href="#register">Register</a>
                                    </div>
                                </div>
                                <ul class="nav navbar-nav lgx-nav navbar-right">
                                    <li><a class="lgx-scroll" href="#home">Home</a></li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </nav>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
            </div>
        </header>
        <!--HEADER END-->


        <!--BANNER-->
        <section>
            <div class="lgx-banner">
                <div class="lgx-banner-style">
                    <div class="lgx-inner lgx-inner-fixed">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="lgx-banner-info-area">
                                        <div class="lgx-banner-info-circle">
                                            <div class="info-circle-inner">
                                                <h3 class="date"><b class="lgx-counter">8</b> <span>Oktober</span></h3>
                                                <div class="lgx-countdown-area">
                                                    <!-- Date Format :"Y/m/d" || For Example: 1017/10/5  -->
                                                    <div id="lgx-countdown" data-date="2022/10/8"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lgx-banner-info">
                                            <!--lgx-banner-info-center lgx-banner-info-black lgx-banner-info-big lgx-banner-info-bg-->
                                            <!--banner-info-margin-->
                                            <h3 class="subtitle"><strong class="text-yellow-500">WORKSHOP <script>document.write(new Date().getFullYear())</script></strong></h3>
                                            <h2 class="title"><strong>Zero to Front-end Hero</strong></h2>
                                            <h3 class="location"><i class="fa fa-map-marker"></i> Gedung D Universitas Dian Nuswantoro.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//.ROW-->
                        </div>
                        <!-- //.CONTAINER -->
                    </div>
                    <!-- //.INNER -->
                </div>
            </div>
        </section>
        <!--BANNER END-->


        <!-- <!- -DAY 1-->
        <section id="about">
            <div id="lgx-about" class="lgx-about">
                <div class="lgx-inner">
                    <div class="container">
                        <section class="card">
                            <img src="/assets/img/poster1.png" alt="poster">
                            <div class="col-sm-12">
                                <div class="lgx-about-content-area">
                                    <div class="lgx-heading">
                                        <h2 class="heading ">C++ - Github</h2>
                                        <!-- <h3 class="subheading">Do not miss the upcoming event, Who should attend?</h3> -->
                                    </div>
                                    <div class="lgx-about-content">
                                        <p class="text-white">
                                            C++ merupakan bahasa yang sangat cocok di gunakan sebagai fundamental ketika mempelajari suatu bahasa pemrograman. Karena didalam C++ sendiri bisa di katakan dapat merangkum hampir dari keselurahan bahasa pemrograman yang ada.
                                        </p>
                                        <br>
                                        <p class="text-white">
                                        Sedangkan GitHub adalah sebuah website yang digunakan untuk menyimpan dan mengelola kode suatu project. Yang mana anda dapat membuat atau mengupload kode anda ke server GitHub dan kemudian melakukan coding secara online.
                                        </p>
                                    </div>
                                    <div class="lgx-heading">
                                        <h2 class="heading ">HTML - Framework</h2>
                                        <!-- <h3 class="subheading">Do not miss the upcoming event, Who should attend?</h3> -->
                                    </div>
                                    <div class="lgx-about-content">
                                        <p class="text-white">
                                        HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website, yang diakses melalui internet.
                                        </p>
                                        <br>
                                        <p class="text-white">
                                        Framework adalah kerangka kerja yang digunakan untuk mengembangkan aplikasi berbasis desktop atau aplikasi berbasis website.
                                        </p>
                                    </div>
                                        <div class="about-date-area">
                                            <h4 class="date text-center"><span class="text-center">8</span></h4>
                                            <p class="text-white"><span class="text-white">Oktober 2022</span> Gedung D.2.B Universitas Dian Nuswantoro</p>
                                        </div>
                                        <div class="about-date-area">
                                            <h4 class="date-separator text-center"><span class="text-center">&</span></h4>
                                        </div>
                                        <div class="about-date-area">
                                            <h4 class="date text-center"><span class="text-center">15</span></h4>
                                            <p class="text-white"><span class="text-white">Oktober 2022</span> Gedung D.2.B Universitas Dian Nuswantoro</p>
                                        </div>
                                </div>
                            </div>
                        </section>

                    </div><!-- //.CONTAINER -->
                </div><!-- //.INNER -->
            </div>
        </section>
        <!--ABOUT END-->
        <section id="speaker">
            <div class="speaker-text">
                <h2>Pembicara kita</h2>
            </div>
            <div class="speaker-box">
                <div class="speaker1">
                    <div class="lgx-single-speaker2 lgx-single-speaker3">
                        <figure>
                            <a class="profile-img"><img src="/assets/img/speakers/mas_ilham.png" alt="speaker" /></a>
                            <figcaption>
                                <div class="speaker-info">
                                    <h3 class="title">Ilham Nur Ramadhan</h3>
                                    <h4 class="subtitle">Backend Developer </h4>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="speaker2">
                    <div class="lgx-single-speaker2 lgx-single-speaker3">
                        <figure>
                            <a class="profile-img"><img src="/assets/img/speakers/mas_naufal.png" alt="speaker" /></a>
                            <figcaption>
                                <div class="speaker-info">
                                    <h3 class="title">Naufal Iksham</h3>
                                    <h4 class="subtitle">FrontEnd Developer</h4>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <!--SCHEDULE-->
        <section id=register>
            <div id="registration" class="lgx-schedule">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Registration Form</h2>
                                    <!-- <h3 class="subheading">Welcome to the dedicated to building remarkable Schedule!</h3> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="lgx-registration-form-box lgx-registration-banner-box">
                                    <!--lgx-registration-banner-box-->
                                    <div class="lgx-registration-form">
                                        <form action="registration" method="post">
                                            <?= csrf_field(); ?>
                                            <div class="box-check">
                                                <div class="box1">
                                                    <input name="day[]" type="checkbox" id="checkbox1" value="C++">
                                                    <label for="checkbox1"> </label>
                                                    <p>C++</p>

                                                </div>
                                                <div class="box2">
                                                    <input name="day[]" type="checkbox" id="checkbox2" value="HTML">
                                                    <label for="checkbox2"></label>
                                                    <p>HTML</p>
                                                </div>
                                            </div>
                                            <input name="nama" class="wpcf7-form-control form-control" placeholder="Your Full Name" type="text" <?php if (isset($inputs)) { ?> value="<?php echo $inputs['nama']; ?>" <?php } ?> required>
                                            <input name="email" class="wpcf7-form-control form-control" placeholder="Your E-mail" type="email" <?php if (isset($inputs)) { ?> value="<?php echo $inputs['email']; ?>" <?php } ?> required>
                                            <input name="instansi" class="wpcf7-form-control form-control" placeholder="Your Instantion" type="text" <?php if (isset($inputs)) { ?> value="<?php echo $inputs['instansi']; ?>" <?php } ?> required>
                                            <input name="no_hp" class="wpcf7-form-control form-control" placeholder="Mobile Number/WhatsApp" type="number" <?php if (isset($inputs)) { ?> value="<?php echo $inputs['no_hp']; ?>" <?php } ?> required>
                                            <input value="Register Now" class="wpcf7-form-control wpcf7-submit lgx-submit" type="submit">
                                            <?php
                                            $inputs = session()->getFlashdata('inputs');
                                            $error = session()->getFlashdata('error');
                                            $errors = session()->getFlashdata('errors');
                                            $success = session()->getFlashdata('success');
                                            if (!empty($errors)) { ?>
                                                <div class="alert alert-danger" role="alert" style="text-align: center">
                                                    <?php foreach ($errors as $errors) : ?>
                                                        <?= esc($errors) ?>
                                                    <?php endforeach ?>
                                                </div>
                                            <?php }
                                            if (!empty($error)) { ?>
                                                <div class="alert alert-danger" role="alert" style="text-align: center">
                                                    <?= esc($error) ?>
                                                </div>
                                            <?php }
                                            if (!empty($success)) { ?>
                                                <div class="alert alert-success" role="alert" style="text-align: center">
                                                    <?= esc($success) ?>
                                                </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </section>
        <!--SCHEDULE END-->

        <!--FOOTER-->
        <footer>
            <div id="lgx-footer" class="lgx-footer">
                <!--lgx-footer-white-->
                <div class="lgx-inner-footer">
                    <div class="container">
                        <div class="lgx-footer-area">
                            <!-- <div class="lgx-footer-single">
                        <a class="logo" href="index-2.html"><img src="/assets/img/footer-logo.png" alt="Logo"></a>
                    </div>  -->
                            <!--//footer-area-->
                            <div class="lgx-footer-single">
                                <h3 class="footer-title">Contact Us </h3>
                                <a href="https://wa.me/6288806158461" target="_blank" style="color: #ffffff80; text-decoration: none;">
                                    <p>+62 888-0615-8461 (Hanif)</p>
                                </a>
                                <a href="https://wa.me/6285878900639" target="_blank" style="color: #ffffff80; text-decoration: none;">
                                    <p>+62 858-7890-0639 (Raafi)</p>
                                </a>
                            </div>
                            <div class="lgx-footer-single">
                                <h3 class="footer-title">Social Media</h3>
                                <p class="text">
                                    Connect to our social media<br> for any update!
                                </p>
                                <ul class="list-inline lgx-social-footer">
                                    <li><a href="https://www.facebook.com/hmti.udinus/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://instagram.com/hmtiudinus" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://hmtiudinus.org/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!--<div class="lgx-footer-single">
                        <h2 class="footer-title">Instagram Feed</h2>
                        <div id="instafeed">
                        </div>
                    </div>-->
                        </div>

                        <div class="lgx-footer-bottom">
                            <div class="lgx-copyright">
                                <p>&copy; <script>document.write(new Date().getFullYear())</script><a href="http://hmtiudinus.org" target="_blank" style="text-decoration: none; color: #ffffff80;"> HMTI UDINUS</a> - All rights reserved</p>
                            </div>
                        </div>

                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.footer Middle -->
            </div>
        </footer>
        <!--FOOTER END-->


    </div>
    <!--//.LGX SITE CONTAINER-->
    <!-- *** ADD YOUR SITE SCRIPT HERE *** -->
    <!-- JQUERY  -->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- BOOTSTRAP JS  -->
    <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Smooth Scroll  -->
    <script src="/assets/libs/jquery.smooth-scroll.js"></script>

    <!-- SKILLS SCRIPT  -->
    <script src="/assets/libs/jquery.validate.js"></script>


    <!-- CUSTOM GOOGLE MAP -->
    <script type="text/javascript" src="/assets/libs/gmap/jquery.googlemap.js"></script>

    <!-- adding magnific popup js library -->
    <script type="text/javascript" src="/assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

    <!-- Owl Carousel  -->
    <script src="/assets/libs/owlcarousel/owl.carousel.min.js"></script>

    <!-- COUNTDOWN   -->
    <script src="/assets/libs/countdown.js"></script>
    <script src="/assets/libs/timer/TimeCircles.js"></script>

    <!-- Counter JS -->
    <script src="/assets/libs/waypoints.min.js"></script>
    <script src="/assets/libs/counterup/jquery.counterup.min.js"></script>

    <!-- SMOTH SCROLL -->
    <script src="/assets/libs/jquery.smooth-scroll.min.js"></script>
    <script src="/assets/libs/jquery.easing.min.js"></script>

    <!-- type js -->
    <script src="/assets/libs/typed/typed.min.js"></script>

    <!-- header parallax js -->
    <script src="/assets/libs/header-parallax.js"></script>

    <!-- instafeed js -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
    <script src="/assets/libs/instafeed.min.js"></script>

    <!-- CUSTOM SCRIPT  -->
    <script src="/assets/js/custom.script.js"></script>

    <script>
        var loader = document.getElementById("preloader");
        $(window).load(function() {
            setTimeout(function(){ $('#preloader').fadeIn(); }, 1000);
            setTimeout(function(){ $('#preloader').fadeOut('slow'); }, 1000);
        });
    </script>


</body>

</html>