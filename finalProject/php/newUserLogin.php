<?php 

		include '../dbConnection.php';
        $dbname = getDatabaseConnection("puppyLyv");
        
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */

	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	if(!isset($error_message)) {

	    $sql = "INSERT INTO user_login (name, username, password) VALUES
		( '" . $_POST["firstName"] . "', '" . $_POST["userEmail"] . "','" . md5($_POST["password"]) . "')";
        $stmt = $dbname->prepare($sql);
        $stmt->execute($np);

			$success_message = "You have registered successfully!";	
			header('location: newUserQuestions.php');
			unset($_POST);
		
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
    <title> PuppyLuv</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link href="../css/signinStyle.css" rel="stylesheet">
    

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">

<style>

.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
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
                            <a class="navbar-brand" href="#">Puppy Luv</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
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
    <!-- ***** Welcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <br><br><br><br><br><br>
        <div class="logMain">
         <!--Sign up form start code-->
        <section class="signup">
            <div class= "alert alert-error">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                                <form name="frmRegistration" method="post" action="" class="register-form" id="register-form">
                                    <?php if(!empty($success_message)) { ?>	
                                    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
                                    <?php } ?>
                                    <?php if(!empty($error_message)) { ?>	
                                    <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                                    <?php } ?>
                                        <div class="form-group">
                                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                                <input type="text" class="demoInputBox" name="firstName" placeholder="First Name" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" class="demoInputBox" name="userEmail" placeholder="Email" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>">
                                        </div>
                                        <div class="form-group">
                                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                                <input type="password" class="demoInputBox" name="password" placeholder="Password" value="">
                                        </div>
                                        <div class="form-group">
                                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                                <input type="password" class="demoInputBox" name="confirm_password" placeholder="Confirm password" value="">
                                        </div>
                                        <div class="form-group form-button">
                                                <input type="submit" name="register-user" id="signup" class="form-submit" value="Register" class="btnRegister">
                                        </div>
                                </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../img/signUpUser.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
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
</body>

</html>
