<?php
session_start();
echo $_SESSION["user"];
include '../dbConnection.php';
$conn = getDatabaseConnection("puppyLyv");
if(isset($_SESSION["user"])){
    header("Location: ../index.php");
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $queryAdmin = "SELECT * FROM admin WHERE username = '$username' and password='$password';"; 
    $queryUsers = "SELECT * FROM user_login WHERE username = '$username' and password='$password';";

    $stmt = $conn->prepare($queryUsers);
    $stmt->execute();
    $response = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo count($response);
    
    if($response!=false && count($response) > 0){
        echo "I am here!";
        $_SESSION["user"] = "$username";
        header("Location: userDashboard.php");
        exit(0);
    }
    
    $stmt = $conn->prepare($queryAdmin); 
    $stmt->execute();
    $response = $stmt->fetch(PDO::FETCH_ASSOC);

    if($response!=false && count($response)>0){
        $_SESSION["user"] = "$username";
        header("Location: adminDashboard.php");
        exit(0);
    }
        
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
    <title> Login - PuppyLuv</title>

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
                            <a class="navbar-brand" href="../index.php">Puppy Luv</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
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

        <!-- Sign-in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../img/signInUser.png" alt="sing up image"></figure>
                        <!--create an account link-->
                        <a href="newUserLogin.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" name="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <!--<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>-->
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                            </div>
                        </form>
                        <div class="social-login">
                           
                            <ul class="socials">
                              
                            </ul>
                        </div>
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
    
    //ajax call
    /*global $*/
    
    $('#signin').on('click',function(){
        
        var username= $('#username').val();
        var password= $('#password').val();
        // ajax call will get the info from the signup page and send it my php file and query it into my database
        $.ajax({
          type: "POST",
          url: "login.php",
          dataType: "json", // data is what you are expecting to reviece
          contentType:"application/json", // contentType is what you are sending 
          data: {
              'username': username,
              'password': password
          },
          success: function(data, status) {
              console.log("successfuly logged in");
          },
          error: function(xhr, status, errorThrown) {
                $('#result').html('<p>status code: '+xhr.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>xhr.responseText:</p><div>'+xhr.responseText + '</div>');
                console.log('xhr:');
                console.log(xhr);
                console.log('textStatus:');
                console.log(status);
                console.log('errorThrown:');
                console.log(errorThrown);
          }
      });
    });
    </script>
</body>
</html>

