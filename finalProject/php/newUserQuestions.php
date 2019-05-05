<?php
    //  inserts answers from newUserQuestions.php
    session_start();
    
    include '../dbConnection.php';
    $conn = getDatabaseConnection("puppyLyv");
    
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
    
    $sql="INSERT INTO user_question ('user_question', q1, q2, q3) VALUES ('$name', $q1', '$q2', '$q3');";
        $preparing = $conn->prepare($sql);
        $response = $preparing->execute();

        echo json_encode($response);
       
      //if you dont have an exist it wont stop properly
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
    <title> User Questions - PuppyLuv</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link href="../css/signinStyle.css" rel="stylesheet">
    

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">

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
                            <a class="navbar-brand" href="#">Puppy Luv</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="quiz.php">Quiz</a></li>
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
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
    <section class="wellcome_area clearfix" id="home">
        
        <br><br><br>
        <div class="logMain">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <!--<div class="signin-image">-->
                    <!--    <figure><img src="../img/signInUser.png" alt="sing up image"></figure>-->
                       
                    <!--</div>-->

                    <div class="signin-form">
                        <h2 class="form-title">Please Answer the Questions</h2>
                        <form method="POST" class="register-form" id="login-form">
                            
                            <div class="signin-form">
                <form action="insertUserAnswers.php" method="post">
                    
                    Name: <input id="name" type="text" name="username"/> <br> 
        
        Age: <input id="q1" type="text" name="q1" /><br><br>
        
        Location: <input id="q2" type="text" name="q2" /><br><br>
        
        Physical Activity: <select id="q3" name="q3">
                             <option value="none">None</option>
                             <option value="moderate">Moderate</option>
                             <option value="alot">Alot</option>
                        </select><br><br>
        
         
        <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                            </div>
                            
                            
                        </form>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        
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
        /* global $ */ 
        $("#submit").on("click", function(){
            // alert("test");
            var name = $('#name').val();
            var q1 = $('#q1').val();
            var q2 = $('#q2').val();
            // var q3 = $('#q3').val(); 
            
             $.ajax({
                   type: "GET",
                   url: "newUserQuestions.php",
                   dataType: "json",
                   data: {
                       'name': name,
                       'q1': q1,
                       'q2': q2,
                    //   'q3': q3
                   },
                   success: function(data, status) {
                       console.log(data);
                        alert("Success");
                   },
                   error: function() {
                        alert("Fail!");
                   }
                   });
        });
       
        
    </script>
    
</body>

</html>


        
        
        
        
       