<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Contact</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/user/assets/img/favicon.png'); ?>">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/all.min.css'); ?>">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/owl.carousel.css'); ?>">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/magnific-popup.css'); ?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/animate.css'); ?>">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/meanmenu.min.css'); ?>">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/main.css'); ?>">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo base_url('public/user/assets/css/responsive.css'); ?>">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <?php echo $this->include('user/template/header'); ?>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get 24/7 Support</p>
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> Shop Address</h4>
                            <p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Shop Hours</h4>
                            <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
                            <p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
    </div>
    <!-- end google map section -->


    <!-- footer -->
    <?php echo $this->include('user/template/footer'); ?>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="<?php echo base_url('public/user/assets/js/jquery-1.11.3.min.js'); ?>"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url('public/user/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- count down -->
    <script src="<?php echo base_url('public/user/assets/js/jquery.countdown.js'); ?>"></script>
    <!-- isotope -->
    <script src="<?php echo base_url('public/user/assets/js/jquery.isotope-3.0.6.min.js'); ?>"></script>
    <!-- waypoints -->
    <script src="<?php echo base_url('public/user/assets/js/waypoints.js'); ?>"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url('public/user/assets/js/owl.carousel.min.js'); ?>"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url('public/user/assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <!-- mean menu -->
    <script src="<?php echo base_url('public/user/assets/js/jquery.meanmenu.min.js'); ?>"></script>
    <!-- sticker js -->
    <script src="<?php echo base_url('public/user/assets/js/sticker.js'); ?>"></script>
    <!-- form validation js -->
    <script src="<?php echo base_url('public/user/assets/js/form-validate.js'); ?>"></script>
    <!-- main js -->
    <script src="<?php echo base_url('public/user/assets/js/main.js'); ?>"></script>

</body>

</html>