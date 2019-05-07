<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: loggedIn.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> PuppyLuv</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <img class="navbar-brand" src="img/bg-img/doglogosm.png" alt="">
                            <a class="navbar-brand" href="#">Puppy Luv</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="php/quiz.php">Quiz</a></li>
                                    <li class="nav-item"><a class="nav-link" id="loginButton" href="php/login.php">Login</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="../php/newUserLogin.php">Sign Up Free</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="php/newUserLogin.php">Sign Up Free</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Puppy Luv app</h2>
                        <h3>P</h3>
                        <p>Everything You Need. To Find Your New Best Friend.</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="php/quiz.php" method="post" class="form-inline">
                            <input type="email" class="form-control email" placeholder="name@company.com">
                            <input type="submit" class="submit" value="Start Quiz">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/cutedog.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Why It Is Special</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-pencil-alt" aria-hidden="true"></i>
                        </div>
                        <h4>Take the Quiz.</h4>
                        <p>Take the quiz to find your top three best friends.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-id-badge" aria-hidden="true"></i>
                        </div>
                        <h4>Complete Your Profile.</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-location-pin" aria-hidden="true"></i>
                        </div>
                        <h4>Locate Your Match.</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/dogGroup.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Take the Quiz to Find Your Perfect Match!</h2>
                            <p> We have selected the most popular breeds to show you! By taking our quiz, you will find your ideal dog and a new pet for your home.</p>
                            <!--<div class="app-download-area">-->
                            <!--    <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">-->
                                    <!-- Google Store Btn -->
                            <!--        <a href="#">-->
                            <!--            <i class="fa fa-android"></i>-->
                                        <!--<p class="mb-0"><span>available on</span> Google Store</p>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--    <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">-->
                                    <!-- Apple Store Btn -->
                            <!--        <a href="#">-->
                            <!--            <i class="fa fa-apple"></i>-->
                                        <!--<p class="mb-0"><span>available on</span> Apple Store</p>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ PuppyLuv helped me find my new best friend. I am so excited for my new pup! ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Elizabeth</h5>
                                <p>User</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ This is exactly the tool I need. Theres nothing better than finding a dog to fit your needs. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Jennifer</h5>
                                <p>User</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ PuppyLuv provides a much needed service to those who find it hard to make decisions- like myself.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Helen</h5>
                                <p>User</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Thank goodness for PuppyLuv. If it weren't for them, I would be so sad and lonely. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Henry</h5>
                                <p>User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="img/bg-img/client-3.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="img/bg-img/client-2.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="img/bg-img/client-1.jpg" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="img/bg-img/client-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <!--<section class="footer-contact-area section_padding_100 clearfix" id="contact">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
                    <!-- Heading Text  -->
    <!--                <div class="section-heading">-->
    <!--                    <h2>Get in touch with us!</h2>-->
    <!--                    <div class="line-shape"></div>-->
    <!--                </div>-->
    <!--                <div class="footer-text">-->
    <!--                    <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>-->
    <!--                </div>-->
    <!--                <div class="address-text">-->
    <!--                    <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>-->
    <!--                </div>-->
    <!--                <div class="phone-text">-->
    <!--                    <p><span>Phone:</span> +11-225-888-888-66</p>-->
    <!--                </div>-->
    <!--                <div class="email-text">-->
    <!--                    <p><span>Email:</span> info.deercreative@gmail.com</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
                    <!-- Form Start-->
    <!--                <div class="contact_from">-->
    <!--                    <form action="#" method="post">-->
                            <!-- Message Input Area Start -->
    <!--                        <div class="contact_input_area">-->
    <!--                            <div class="row">-->
                                    <!-- Single Input Area Start -->
    <!--                                <div class="col-md-12">-->
    <!--                                    <div class="form-group">-->
    <!--                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!-- Single Input Area Start -->
    <!--                                <div class="col-md-12">-->
    <!--                                    <div class="form-group">-->
    <!--                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!-- Single Input Area Start -->
    <!--                                <div class="col-12">-->
    <!--                                    <div class="form-group">-->
    <!--                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>-->
    <!--                                    </div>-->
    <!--                                </div>-->
                                    <!-- Single Input Area Start -->
    <!--                                <div class="col-12">-->
    <!--                                    <button type="submit" class="btn submit-btn">Send Now</button>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            <!-- Message Input Area End -->
    <!--                    </form>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Puppy Luv</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>

    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>
