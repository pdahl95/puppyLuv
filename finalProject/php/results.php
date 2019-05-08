<?php

session_start();

  include '../dbConnection.php';
  $conn = getDatabaseConnection("puppyLyv");
  
  if (!isset($_SESSION['user'])){
    header('Location: login.php');
  }
  
  if (isset($_GET['clickedImageId'])){
      // saving the liked image in database:
      $clickedImageId = $_GET['clickedImageId']; 
      $expectedQuizResultsInSession = $_SESSION['dogImages'];
      
      $user = $_SESSION['user'];
      $breed = $expectedQuizResultsInSession[$clickedImageId]['breed'];
      $dog_id = $expectedQuizResultsInSession[$clickedImageId]['dog_id'];
      $img_url = $expectedQuizResultsInSession[$clickedImageId]['image_url'];
      
    //   echo json_encode($user);
      
      
      $query = "INSERT INTO breed_match VALUES('$user', '$breed', '$dog_id', '$img_url');"; 
      $stmt = $conn->prepare($query);
      $response = $stmt->execute();
        
        echo json_encode($response);
        exit(0);
      
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
    <title> Results - PuppyLuv</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <!--<link href="../css/signinStyle.css" rel="stylesheet">-->
    

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
        .clickableImages img{
            width: 300px;
            height: 220px;
            padding: 10px;
        }
        .clickableImages img:hover{
            opacity: 0.2;
            /*content:url("pngheartlike.png");*/
        }
        .clickableImages {
            display: inline;
        }
        .resultsImages{
            width: 55%;
            margin: auto;
            /*border: 1px solid;*/
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
        <br><br><br>
        
        <div class="resultsImages">
            <br><br><br>
            <h2> Select your favorite puppy </h2>
            
           <?php
             if(isset($_SESSION['dogImages'])){
                  $expectedQuizResults = $_SESSION['dogImages']; 
                   foreach($expectedQuizResults as $ind => $value){
                            // echo "$data['image_url']";
                            $imgUrl = $value['image_url'];
                            echo "<div class='clickableImages'><img id='$ind' src=$imgUrl></div>";
                            // echo "<div class='clickableImages'><img id='$ind' src='pngheartlike.png'></div>";
                    }
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
        // $('body').appendTo('logMain');
        
        $(".clickableImages").on("click", function(event){
           $.ajax({
                   type: "GET", 
                   url: "results.php",
                   dataType: "json",
                   data: { 
                    "clickedImageId": event.target.id 
                    },
                   success: function(data,status){
                    //   alert(data);
                       console.log(data);
                    //   window.location = 'results.php';
                   }, 
                   error: function (){
                        // alert("Fail!");
                    }
                }); 
                
                // redirect to match page!! 
                window.location = 'match.php';
           
           
        });
        
        
        
        
        

    </script>
</body>
</html>
