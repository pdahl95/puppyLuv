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

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="../style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
        /* Base Styles*/
body {
 font-family: 'Quicksand', sans-serif;
  text-align: center;
  background:#9fcbf7 url('https://preview.ibb.co/kch1nm/newcloudbg.png') no-repeat center fixed;
  background-size: 700px;
  color: #5d5d5d;
}

h1 {
  font-size: 2em;
  padding: 0;
  margin: 0;
}

h2 {
  font-size: 1em;
  font-weight: 400;
}

#container {
  width: 80%;
  margin: 40px auto;
  box-shadow: 0px 5px 19px 5px rgba(0,0,0,0.1);
  border-radius: 0 100px;
  background: linear-gradient(45deg, rgba(255,255,255,.7) 0%, rgba(255,255,255,.7) 30%, rgba(255,255,255,1) 30%);
  padding-bottom: 50px;
}

#titleSection,
#quizSection {
  padding: 30px 30px 0 30px;
}

#titleSection {
  color: #fff;
  border-radius: 0 100px 0 0;
  background: linear-gradient(45deg, rgba(98,146,214,1) 0%, rgba(98,146,214,1) 50%, rgba(110,155,224,1) 50%);
  height: 200px;
}

#myTitle {
  border-radius: 10px 10px 0 0;
  height: 100%;
  align-content: center;
  justify-content: center;
}

#quizSection {
  border-radius: 0 0 10px 10px;
}

#myTitle,
#questionOne,
#questionThree,
#questionFour,
#finish {
  display: flex;
  flex-direction: column;
}

button {
  width: 150px;
  border: none;
  border-radius: 0 8px;
  padding: 10px;
  margin: 5px auto;
  color: #fff;
  background-color:#edbd4e;
  box-shadow: 0px 4px 0px 0px #d1a24b;
  transition: .35s;
}

button:hover {
  cursor: pointer;
  box-shadow: 0px 2px 0px 0px #d1a24b;
  transform: translateY(2px);
}

#questionOne,
#questionTwo,
#questionThree,
#questionFour,
#finish {
  display: none;
}
/* End Base Styles*/

/* Question One*/
#questionOne button {
  width: 220px;
  height: 50px;
  text-align: left;
}

#temp::before {
  content: url("https://image.ibb.co/e2Pwk6/celc.png");
  margin-right: 20px;
  border: 2px solid #fff;
  padding: 5px;
  width: 100%;
}

#windSpeed::before {
  content: url("https://image.ibb.co/mjUwk6/knots.png");
  width: 10px;
  margin-right: 20px;
  border: 2px solid #fff;
  padding: 5px;
}

#AtmosPress::before {
  content: url("https://image.ibb.co/izR956/pascals.png");
  margin-right: 20px;
  border: 2px solid #fff;
  padding: 5px;
}

/* Question Two*/
.images {
  width: 100%;
}

.images img {
  width: 30%;
  height: auto;
  cursor: pointer;
  border-radius: 0 8px;
  background: #6e9ce0;
  box-shadow: 0px 4px 0px 0px #5681c1;
  transition: .35s;
}

.images img:hover {
  transform: translateY(2px);
  box-shadow: 0px 2px 0px 0px rgba(0,0,0,0.3);
}

/* Question Three*/
.boxes {
  text-align: left;
  margin-left: 90px;
}

/* Question Four*/
#questionFour input {
  height: 30px;
  border: 1px solid #d1d3d4;
  transition: .8s;
  text-align: center;
  width: 150px;
}

/* Checkbox Styling copied from: 
https://codepen.io/CreativeJuiz/pen/BiHzp
*/
/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.25em; height: 1.25em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  position: absolute;
  top: .1em; left: .3em;
  font-size: 1.3em;
  line-height: 0.8;
  color: #6e9ce0;
  transition: all .2s;
}

/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/*End checkbox styling*/

/* Media Queries */

@media (min-width: 400px) {
  
  #container {
    width: 350px;
  }
  
}

/* End Media Queries */

/* Animations and keyframes*/
.slidein {
  animation: slidein .5s ease-in-out backwards;
}

.fadein {
  animation: fadein .5s ease-in-out backwards;
}

@keyframes slidein{
  0% {
    opacity:0;
    transform: translateX(-100px);
  }
  
  50% {
    opacity: 1;
    transform: translateX(20px);
  }
}

@keyframes fadein {
  0% {
    opacity: 0;
  }
  
  100% {
    opacity: 1;
  }
}

/* End Animations and keyframes*/
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
                                    <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
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
    <section class="wellcome_areaIMAGEGRID clearfix" id="home">
        
        <!-- ***** Quiz Start Start ***** -->
        <br>
       
<section id="container" class="slidein">
    <section id="titleSection">
      <div id="myTitle">
        <h1>Welcome to The PuppyLuv Quiz</h1>
        <h2>This quiz consists of four quick questions.</h2>
      </div>
      <div id="score"></div>
    </section>
    <section id="quizSection">
      <div id="begin">
        <button onclick="beginQuiz();">Begin the Quiz</button>
      </div>
      <div id="questionOne" class="fadein">
        <h3>Question 1:</h3>
        <p>Do you prefer small, medium or large sized dogs? </p>
        <button id="small" onclick="checkQOne(event);">Small</button>
        <button id="medium" onclick="checkQOne(event);">Medium</button>
        <button id="large" onclick="checkQOne(event);">Large</button>
      </div>
      <div id="questionTwo" class="fadein">
        <h3>Question 2:</h3>
        <p>What is your activity level? </p>
        <button id="lowAct" onclick="checkQOne(event);">Low</button>
        <button id="modAct" onclick="checkQOne(event);">Moderate</button>
        <button id="highAct" onclick="checkQOne(event);">High</button>
      </div>
      <div id="questionThree" class="fadein">
        <h3>Question 3:</h3>
        <p>Does your dog need to be familiy friendly (Kids friendly)? </p>
            <button id="yesKids" onclick="checkQOne(event);">Yes</button>
            <button id="noKids" onclick="checkQOne(event);">No</button>
        <button onclick="checkQThree();">Submit Answer</button>
      </div>
      <div id="questionFour" class="fadein">
        <h3>Question 4:</h3>
        <p><small>(Last Question)</small></p>
        <p>Will your dog be mostly indoor or outdoor? </p>
        <input id="stringOrNumber">
        <button onclick="checkQFour();">Submit Answer</button>
      </div>
      <div id="finish" class="fadein">
        <p>You've completed the quiz with a score of:</p>
        <div id="finalScore"></div>
        <button id="resetButton" onclick="window.location.href=window.location.href">Play Again</button>
      </div>
    </section>
  </section>
       
       <!-- ***** Quiz Ends End ***** -->

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
    
    <script type="text/javascript" src="../js/quizFunctions.js"></script>
</body>

</html>
