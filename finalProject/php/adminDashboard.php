<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Admin Dashboard </title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="../style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">
    
    <style type="text/css">
    .adminTitle {
        font-size: 22px;
        color: #6e52e5;
        font-weight: 700;
        position: fixed;
        top:0;
        left:0;
        z-index: 3;
        padding: 4px;
    }
    .sidenav {
        margin-top: 2.6%;
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #fffafa;
      overflow-x: hidden;
      padding-top: 20px;
    }
    
    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
    }
    
    .sidenav a:hover {
      color: #d8bfd8;
    }
    .dash{
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #6e52e5;
        display: block;
    }
    .main {
      margin-left: 220px; /* Same as the width of the sidenav */
      font-size: 28px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }
    .stat_img{
        width: 300px;
        height: 250px;
        padding-top: 10px;
        display: block;
    }
    .logout{
        position: fixed;
        top: 0;
        right: 0;
        margin: 10px;
        padding: 10px;
        border-radius: 24px 24px 24px 0px;
        width: 120px;
    }
    .logout:hover{
        position: fixed;
        top: 0;
        right: 0;
        margin: 10px;
        padding: 10px;
        border-radius: 24px 24px 24px 0px;
        width: 120px;
        background-color:#8b000c;
    }
    .text{
        font-size: 16px;
        display: inline;
    }
    .stats_column {
      float: left;
      width: 33.33%;
      padding: 10px;
      height: 300px; /* Should be removed. Only for demonstration */
    }
    
    /* Clear floats after the columns */
    .stats_row:after {
      content: "";
      display: table;
      clear: both;
    }

    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="">
        <div class="container-fluid">
            <div class="row align-items-center">
                 <h3 class="adminTitle"> PUPPY LUV </h3>
            </div>
        </div>
    </header>
 
        
        <!-- ***** ADMIN DASHBOARD START HERE ***** -->
        <br>
        <div class="sidenav">
          <p class="dash">DASHBOARD </p>
          <a href="#stats">Statistics</a>
          <a href="#location">Locations</a>
          <a href="#breeds">Breeds</a>
        </div>
        <div class="main">
            <a name="stats"></a>
            <div class="stats"> Statistics <br> 
            <div class="stats_row">
              <div class="stats_column">
                <div class="text"> Number of users </div>
                <img class="stat_img" src="https://www.inogic.com/blog/wp-content/uploads/2016/06/user-adoption-summary.png"></img>
              </div>
              <div class="stats_column">
                <div class="text"> Number of breeds </div>
              </div>
              <div class="stats_column">
                <div class="text"> Average age of users </div>
              </div>
            </div>
            
            
            
            
            </div>
            
            <a name="location"></a>
            <div class="location"> Locations <br>
            <img  class="stat_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMBE1MeciLW4dn2SvKCscQmwu7zdZES-Ibau3PpV5LBJyxDp-1cg"></img>
            
            
            </div>
          
            <a name="breeds"></a>
            <div class="breeds"> Breeds
            
            
            
            </div>
            
        </div>
           <button class="logout"> <img src="https://img.icons8.com/material-outlined/24/000000/exit.png">  Log Out </button>
       
       <!-- ***** ADMIN BASHBOARD ENDS ***** -->

    <!-- ***** Wellcome Area End ***** -->
    
    
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <div class="footer-text"></div>
        <div class="footer-social-icon"> </div>
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
