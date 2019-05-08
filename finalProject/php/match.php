<?php

session_start();
  
  if (!isset($_SESSION['user'])){
    header('Location: login.php');
  }
  
  include '../dbConnection.php';
  $conn = getDatabaseConnection("puppyLyv");
  
    $sql = "select * from breed_match ORDER BY user_id DESC LIMIT 1";
    $stmt= $conn->prepare($sql); 
    $stmt->execute();
    $response = $stmt->fetchAll(PDO:: FETCH_ASSOC);
    $_SESSION['dogImages'] = $response;
   
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
    body{
        /*margin-bottom: 50px;*/
    }
        .matchRes{
            width: 55%;
            margin: auto;
           text-align: center;
           margin-bottom: 50px;
           
        }
        .finalMATCH{
            text-align: center;
            font-size: 72px;
            font-weight: 700;
            color: #fff;
            margin: 0;
            line-height: 1;
            padding: 5px;
            text-transform: uppercase;
        }
        .matchRes h6{
            color: white;
        }
        #userD{
            position: fixed;
            top: 0;
            right:0;
            padding: 10px;
        }
        .dogInfoMatch p{
            /*float: left;*/
            color: black;
        }
        .dogInfoMatch{
            padding: 50px;
            /*margin: auto;*/
            text-align: center;
            /*margin-top: -500px;*/
        }
        matchContent{
            /*height: 1500px;*/
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
                                    <li id="userD" class="nav-item"><a class="nav-link" href="userDashboard.php">Dashboard</a></li>
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
    <section class="wellcome_area clearfix" id="matchContent">
        
        <br><br><br><br>
        <div class="matchRes">
            <br><br>
        <?php
             foreach($response as $ind => $value){
                    $breed = $value['breed'];
                    $imgUrl = $value['img_url'];
                    echo "<h1 class='finalMATCH'> $breed IS YOUR FINAL MATCH </h1>";
                    echo "<h6> You will be able view all your matched in the dashboard when logged in.</h6>";
                    echo "<div class='clickableImages'><img id='$ind' src=$imgUrl></div>";
            }
            
        
        ?>

    </div>
  
    </section>
    <!-- ***** Wellcome Area End ***** -->
 
    <!-- ***** Footer Area Start ***** -->
    <footer class="">
    <?php
        $dogInfoByBreed = "SELECT * FROM breed_info WHERE breed = '$breed'";
            $stmt= $conn->prepare($dogInfoByBreed); 
            $stmt->execute();
            $dogInfo = $stmt->fetchAll(PDO:: FETCH_ASSOC);
           
            // echo json_encode($dogInfo);
             foreach($dogInfo as $ind => $value){
                    $life = $value['life_expectancy'];
                    $weight = $value['weight'];
                    $height = $value['height'];
                    $size = $value['size'];
                    $activity = $value['activity'];
                    $family = $value['family_oriented'];
                    $indoorVSoutdoor = $value['in_vs_out'];
                    
                    echo "<div class='dogInfoMatch'>
                        <p> Life Expectancy is $life <br> </p> 
                        <p> Weight:  $weight<br> </p> 
                        <p> Height: $height <br> </p> 
                        <p> Activity level is $activity <br> </p> 
                        <p> Family Oritented: $family </p>
                        <p> Likes to be $indoorVSoutdoor </p>
                    </div>"; 
            }
    
    ?>
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
