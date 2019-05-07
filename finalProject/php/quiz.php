<?php

//connection to the database

  session_start();
  
  if (!isset($_SESSION['user'])){
    header('Location: login.php');
  }
  
  include '../dbConnection.php';
  $conn = getDatabaseConnection("puppyLyv");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
    if (isset($_POST['submit'])){
    
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    
    $query = "SELECT * FROM breed_info WHERE size = '$question4', activity = '$question1', family_oriented ='$question3', in_vs_out = '$question2'
    INNER JOIN dogs ON breed_info.breed = dogs.breed";
    
    $stmt= $conn->prepare($query); 
    $stmt->execute();
    $response = $stmt->fetchAll(PDO:: FETCH_ASSOC);
   
   echo json_encode($response);
    
    
    exit(0);
    
  }
   
   
   
   
   
//   $sql = 'SELECT * FROM breed_info';
//   $stmt= $conn->prepare($sql);
//   $stmt->execute();
//   $response = $stmt->fetchAll(PDO:: FETCH_ASSOC);
   
   //echo json_encode($response);
   
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
    <title> Quiz - PuppyLuv</title>

     <!--Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Core Stylesheet -->
    
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <!--<link href="../css/signinStyle.css" rel="stylesheet">-->
    

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
        .quizText{
            color: black;
            font-size: 16px;
            font-weight: 300;
            margin-top: 0;
        }
        .quiz{
            margin-left: 25%;
            /*border: 1px solid;*/
            width: 50%;
            text-align: center;
        }
        .question{
            /*border: 1px solid;*/
            /*background-color: white;*/
            padding: 10px;
            margin-top: 10px;
        }
        h5, label{
            font-weight: bolder;
        }
        label {
          margin-left: 5px;
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
                                    <!--<li class="nav-item "><a class="nav-link" href="/puppyLuv/finalProject/index.html">Home</a></li>-->
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
        <div class="quiz">
            
            	<h1>Take the Quiz</h1>
		<p class="quizText">Take the quiz to find your perfect breed match!</p>

		<div v-if="!finishedQuiz">
			<div class="question">
				<h5>Question 1</h5>
				<div class="answers">
					<p class="quizText">How active are you?</p>
					<form action="">
					  <input type="radio" id="q0A" name="answer0" value="1"><label for="q0A"> Active </label><br>
					  <input type="radio" id="q0B" name="answer0" value="2"><label for="q0B"> Not Active </label><br>
					</form>
				</div>
			</div>
			<div class="question">
				<h5>Question 2</h5>
				<div class="answers">
					<p class="quizText">Would you like your Furry Friend to be an indoor friend or outdoor friend?</p>
					<form action="">
					  <input type="radio" id="q1A" name="answer1"><label for="q1A"> Indoor</label><br>
					  <input type="radio" id="q1B" name="answer1"><label for="q1B"> Outdoor</label><br>
					  
					</form>
				</div>
			</div>
			<div class="question">
				<h5>Question 3</h5>
				<div class="answers">
					<p class="quizText">Will your furry friends be around lots of people?</p>
					<form action="">
					  <input type="radio" id="q2A" name="answer2"><label for="q2A"> Yes </label><br>
					  <input type="radio" id="q2B" name="answer2"><label for="q2B"> No </label><br>
					 
					</form>
				</div>
			</div>
			
				<div class="question">
				<h5>Question 4</h5>
				<div class="answers">
					<p class="quizText">What size would you like your furry friend to be?</p>
					<form action="">
					  <input type="radio" id="q3A" name="answer3"><label for="q3A"> Small</label><br>
					  <input type="radio" id="q3B" name="answer3"><label for="q3B"> Medium </label><br>
					  <input type="radio" id="q3C" name="answer3"><label for="q3C"> Large </label><br>
					 
					</form>
				</div>
			</div>
			<div id="buttondiv">
				<button id= "submit">Submit</button>
				
			</div>

		</div>
		<br><br><br><br><br><br>
				<br><br><br>
				<br><br><br>
	

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
    
    <!--<script src="../js/quizFuntions.js"></script>-->
    
    <script>
        /* global $ */ 
        
        $("#submit").on("click", function(){
            var selectedQuestion1 = $("input[name='answer0']:checked");
            var selectedQuestion1Value = selectedQuestion1.val();
            var selectedRadioId1 = selectedQuestion1.attr("id");
            var selectedLabelHtml1 = $("label[for='" + selectedRadioId1 + "']").html();
            
            console.log("q1:", selectedLabelHtml1);
            
            var selectedQuestion2 = $("input[name='answer1']:checked");
            var selectedQuestion2Value = selectedQuestion2.val();
            var selectedRadioId2 = selectedQuestion2.attr("id");
            var selectedLabelHtml2 = $("label[for='" + selectedRadioId2 + "']").html();
            
            console.log("q2:",selectedLabelHtml2);
            
            var selectedQuestion3 = $("input[name='answer2']:checked");
            var selectedQuestion3Value = selectedQuestion3.val();
            var selectedRadioId3 = selectedQuestion3.attr("id");
            var selectedLabelHtml3 = $("label[for='" + selectedRadioId3 + "']").html();
            
            console.log("q3:",selectedLabelHtml3);
            
            var selectedQuestion4 = $("input[name='answer3']:checked");
            var selectedQuestion4Value = selectedQuestion4.val();
            var selectedRadioId4 = selectedQuestion4.attr("id");
            var selectedLabelHtml4 = $("label[for='" + selectedRadioId4 + "']").html();
            
            console.log("q4:",selectedLabelHtml4);
            
            // Send the 4 varaibles to our php to get the rows with these values .... 
              $.ajax({
                   type: "POST", 
                   url: "quiz.php",
                   dataType: "json",
                   data: { 
                    'submit': '', 
                    "question1": selectedLabelHtml1, 
                    "question2": selectedLabelHtml2, 
                    "question3": selectedLabelHtml3,
                    "question4": selectedLabelHtml4, 
                    },
                   success: function(data,status){
                       alert("Success!");
                   }, 
                   error: function (){
                        alert("Fail!");
                    }
                }); 
            
            
        });
        
        
    </script>
