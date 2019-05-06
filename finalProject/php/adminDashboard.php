<?php

session_start();

include '../dbConnection.php';
$conn = getDatabaseConnection("puppyLyv");
$numOfUser = "SELECT COUNT(*) FROM user_login";
// print_r($numOfUser);

$stmt = $conn->prepare($numOfUser); 
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_OBJ);

echo $response;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!--The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <!--Title -->
    <title> Admin Dashboard </title>

     <!--Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

     <!--Core Stylesheet -->
    <link href="../style.css" rel="stylesheet">

     <!--Responsive CSS -->
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
    .formCss{
        font-size: 16px;
        width: 200px;
        border-radius: 0 5px;
        height: 45px;
    }
    .location {
        /*border: 1px solid;*/
        background-color: #fffafa;
        padding: 20px;
        
    }
    .breeds{
        background-color: #fffafa;
        padding: 20px;
    }
    button #add_btn{
            width: 150px;
            border: none;
            border-radius: 0 8px;
            /* padding: 10px; */
            margin: 5px auto;
            color: #fff;
            background-color: #edbd4e;
            box-shadow: 0px 4px 0px 0px #d1a24b;
            transition: .35s;
    }
      #delete_btn{
            width: 200px;
            border: none;
            border-radius: 0 8px;
            /* padding: 10px; */
            margin: 5px auto;
            color: #fff;
            background-color: #edbd4e;
            box-shadow: 0px 4px 0px 0px #d1a24b;
            transition: .35s;
    }

    </style>

</head>

<body>
     <!--Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

     <!--***** Header Area Start ***** -->
    <header class="">
        <div class="container-fluid">
            <div class="row align-items-center">
                 <h3 class="adminTitle"> PUPPY LUV </h3>
            </div>
        </div>
    </header>
 
        
         <!--***** ADMIN DASHBOARD START HERE ***** -->
        <br>
        <div class="sidenav">
          <p class="dash">DASHBOARD </p>
          <a href="#stats">Statistics</a>
          <a href="#add">Add User</a>
          <a href="#del">Delete User </a>
          <a href="#edit">Edit User </a>
        </div>
        <div class="main">
            <a name="stats"></a>
            <div class="stats"> Statistics <br> 
            <div class="stats_row">
              <div class="stats_column">
                <div class="text">  <br> 
                <img src="img/chart.png"></img>
                
                </div>
              </div>
              <div class="stats_column">
                <div class="text">  <br> 
                <img src="img/age1.png"></img>
                
                
                </div>
              </div>
              <div class="stats_column">
                <div class="text">  <br> 
                
                
                </div>
              </div>
            </div>
            
            </div>
            
            <br><br>
            
            <a name="add"></a>
            <div class="location"> Add User <br>
            <form>
                <input class="formCss" type="text" name="name" placeholder="Name"/><br>
                <input class="formCss" type="text" name="username" placeholder="Username"/><br>
                <input class="formCss" type="text" name="password" placeholder="Password"/><br>
                
                <button id="add_btn"> Add User </button>
            </form>

            
            </div>
            <br>
          
            <a name="del"></a>
            <div class="breeds"> Delete User
                <form>
                    <p> Enter the user ID of the user you want to delete:</p>
                <input class="formCss" type="text" name="userId" placeholder="User ID"/><br>
                <button id="delete_btn"> Delete User </button>
            </form>
            </div>
            <br>
            
            <a name="edit"></a>
            <div class="location"> Edit User <br>
            <form>
                <p> Enter the user ID of the user you want to edit: (NB: can only update name)</p>
                <input class="formCss" type="text" name="userId" placeholder="User ID"/><br>
                <input class="formCss" type="text" name="newName" placeholder="enter the new name.. "/><br>
                <button id="edit_btn"> Edit User </button>
            </form>

            
            </div>
            
        </div>
           <button class="logout"> <img src="https://img.icons8.com/material-outlined/24/000000/exit.png">  Log Out </button>
       
        <!--***** ADMIN BASHBOARD ENDS ***** -->

     <!--***** Wellcome Area End ***** -->
    
    
     <!--***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <div class="footer-text"></div>
        <div class="footer-social-icon"> </div>
    </footer>
     <!--***** Footer Area Start ***** -->

     <!--Jquery-2.2.4 JS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
     <!--Popper js -->
    <script src="../js/popper.min.js"></script>
     <!--Bootstrap-4 Beta JS -->
    <script src="../js/bootstrap.min.js"></script>
     <!--All Plugins JS -->
    <script src="../js/plugins.js"></script>
     <!--Slick Slider Js-->
    <script src="../js/slick.min.js"></script>
     <!--Footer Reveal JS -->
    <script src="../js/footer-reveal.min.js"></script>
     <!--Active JS -->
    <script src="../js/active.js"></script>
    
    <script>
    
    
    
    /* global $ */
         $(document).ready(function(){
            $(".logout").on("click", function(){
                window.location = "../index.html";
            });
            
            $.ajax({
                  type: "POST",
                  url: "adminDashboard.php",
                  dataType: "json", // data is what you are expecting to reviece
                  data: {},
                  success: function(data, status) {
                      console.log(data);
                        alert("Success");
                  },
                  error: function() {
                        
                  }
             });
             
             
             // add user from Admin Dashboard 
             $("#add_btn").on("click", function(){
                 $.ajax({
                    type: "POST", 
                    url: "admin/add.php",
                    dataType: "json",
                    data: {
                        'submit':'',
                        'name' : $("[name=name]").val(),
                        'username': $("[name=username]").val(),
                        'password' : $("[name=password]").val()
                    }, 
                    success: function(data){
                        alert("success");
                    }, 
                    error: function(){
                        alert("fail");
                    }
                 });
             });
             
           // delete user from Admin Dashboard 
             $("#delete_btn").on("click", function(){
                 $.ajax({
                    type: "POST", 
                    url: "admin/delete.php",
                    dataType: "json",
                    data: {
                        'submit':'',
                        'userId' : $("[name=userId]").val()
                    }, 
                    success: function(data){
                        alert("success");
                    }, 
                    error: function(){
                        alert("fail");
                    }
                 });
             });
             
             $("#edit_btn").on("click", function() {
                $.ajax({
                   type: "POST", 
                   url: "admin/edit.php",
                   dataType: "json",
                   data: { 
                    'submit': '', 
                    "userId": $("[name='userId']").val(), 
                    "newName": $("[name='newName']").val()
                    },
                   success: function(data,status){
                       alert("Success!");
                   }, 
                   error: function (){
                        alert("Fail!");
                    }
                }); 
             });
            
            
         });
        
        
    </script>
</body>

</html>
