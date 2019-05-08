<?php

session_start();
  
  if (!isset($_SESSION['user'])){
    header('Location: login.php');
  }
  
  include '../dbConnection.php';
  $conn = getDatabaseConnection("puppyLyv");
  
    $sql = "select *from breed_match ORDER BY user_id DESC LIMIT 1";
    $stmt= $conn->prepare($sql); 
    $stmt->execute();
    $response = $stmt->fetchAll(PDO:: FETCH_ASSOC);
   
    // echo json_encode($response);

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
    <title> Match - PuppyLuv</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link href="../css/signinStyle.css" rel="stylesheet">
    

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
        .matchRes{
            width: 55%;
            margin: auto;
           text-align: center;
        }
        .finalMATCH{
            text-align: center;
            font-size: 72px;
            font-weight: 700;
            color: #fff;
            margin: 0;
            line-height: 1;
            padding: 5px;
        }
        .matchRes h6{
            color: white;
        }
        
    </style>

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
                            <img class="navbar-brand" src="../img/bg-img/doglogosm.png" alt="">
                            <a class="navbar-brand" href="../index.php">Puppy Luv</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <!--<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>-->
                                    <!--<li class="nav-item"><a class="nav-link" href="quiz.php">Quiz</a></li>-->
                                    <!--<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>-->
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <!--<a href="newUserLogin.php">Sign Up Free</a>-->
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <!--<a href="newUserLogin.php">Sign Up Free</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        
        <br><br><br><br>
        <div class="matchRes">
            <br><br>
            <h1 class="finalMATCH"> THIS IS YOUR FINAL MATCH! </h1>
            <h6> You will be able view all your matched in the dashboard when logged in.</h6>
           
        <?php
        
            //  echo json_encode($response);
             foreach($response as $ind => $value){
                    $imgUrl = $value['img_url'];
                    echo "<div class='clickableImages'><img id='$ind' src=$imgUrl></div>";
            }
                
        ?>
           

    </div>
        
        
        

    </section>
    <!-- ***** Wellcome Area End ***** -->
        
        
        
    
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

    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="../js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="../js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="../js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="../js/active.js"></script>
    <!-- Login JS -->
    <!--<script src="../vendor/jquery/jquery.min.js"></script>-->
    <script src="../js/main.js"></script>
    
    
     <script> 
        /*global $*/
        
        
        
        

    </script>
</body>
</html>
