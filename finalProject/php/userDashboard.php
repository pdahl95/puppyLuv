 <?php 
      session_start();
      
      if (!isset($_SESSION['user'])){
        header('Location: login.php');
      }
      
      include '../dbConnection.php';
      $conn = getDatabaseConnection("puppyLyv");
       
      $user = $_SESSION['user'];
        $query = "SELECT * FROM breed_match WHERE user_id = '$user'";
        $stmt= $conn->prepare($query); 
        $stmt->execute();
        $response = $stmt->fetchAll(PDO:: FETCH_ASSOC);
       
        // echo json_encode($response);
        
        $_SESSION['dogImages'] = $response;
        
        
        // exit(0);
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
    <title> User Dashboard </title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="../style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
        #matches, #newQuizButton{
            /*border: 1px solid;*/
            /*width: 50%;*/
        }
        .top,
        .left,
        .right {
          /*background-color: #66d9ff;*/
          /*border: 3px solid #888888;*/
          overflow: hidden;
        }
        
        .top {
          width: calc(100% - 6px);
          min-height: 100px;
        }
        
        .left {
          width: calc(60% - (.5em + 6px));
          float: left;
          min-height: 400px;
          margin-top: 1em;
          padding-left: 135px;
        
        }
        
        .right {
          width: calc(40% - (.5em + 6px));
          float: right;
          min-height: 400px;
          margin-top: 1em;
          background-color: lightpurple;
        }
        .dashboardTtile{
            margin-top: 20px;
            
        }
        #new_quiz_btn{
            width:250px;
        }
        .clickableImages{
            width: 100px;
            height:100px;
            padding: 10px;
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
                                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="quiz.php">Quiz</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="newUserLogin.php">Sign Up Free</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="newUserLogin.php">Sign Up Free</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
        <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_areaIMAGEGRID clearfix" id="home">
        
        <!-- ***** USER DASHBOARD START HERE ***** -->
        <br><br><br> <br> 
        <div class="content"> 
             <div class="top">
                <h3 class="dashboardTtile"> Welcome To The User Dashboard </h3>
              </div>
            
              <div class="left" id="matches" >
                <h2> Here are your matches </h2> 
                <?php
                
                   if(isset($_SESSION['dogImages'])){
                      $response = $_SESSION['dogImages']; 
                       foreach($response as $ind => $value){
                                // echo "$data['image_url']";
                                $imgUrl = $value['img_url'];
                                $breed = $value['breed'];
                                // echo $imgUrl;
                                echo "<div class='clickableImages'>
                                <img id='$ind' src=$imgUrl>
                                <p> $breed </p>
                                </div>";
                                // echo "<div class='clickableImages'><img id='$ind' src='pngheartlike.png'></div>";
                        }
                  }
                
                ?>
            
              </div>
            
              <div class="right">
                <h6> If you don't have any matches or want to possible get a new match click on the button below: </h6>
                <button id="new_quiz_btn"> Click here to take the quiz </button>
              </div>
        </div>

       
       <!-- ***** USER BASHBOARD ENDS ***** -->

    </section>
    <!-- ***** Wellcome Area End ***** -->
    
    
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <!--<h2>Puppy Luv</h2>-->
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <!--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
            <!--<a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>-->
            <!--<a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>-->
            <!--<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>-->
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
    
    <!--<script type="text/javascript" src="../js/quizFunctions.js"></script>-->
    <script>
        /* global $ */ 
        $(document).ready(function(){
           $("#new_quiz_btn").on("click", function(){
               window.location = 'quiz.php';
           });
        });
        
    </script>
</body>

</html>
