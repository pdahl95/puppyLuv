<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Adoption - PuppyLuv</title>
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
        .location{
            /*border:1px solid;*/
            width: 50%;
            margin: auto;
            margin-top: 5%;
        }
        .location div{
            font-size: 52px;
            font-weight: 700;
            color: #fff;
            margin: 0;
            line-height: 1;
            padding: 0;
            margin-bottom: 10px;
        }
        .location label{
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin: 0;
            line-height: 1;
            padding: 0;
        }
        #animalTable a {
            color: white;
            font-size: 18px;
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
                                    <!--<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>-->
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
        <div class="location">
            <div> Find A Dog Near You! </div>
        	<label for="zip">Zip: </label>
        	<input type="text" name="zip" id="zip"><input type="text" name="breed" id="zip">
        	<button id="submitBtn"> Search </button>
        	<div id='animalTable'>
        	    
        	  
        	</div>
	

	    </div>
    </section>
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
       

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
        
        
	
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<script>
	/* global $ */ 
		
		$("#submitBtn").on("click", function(){
			var zipValue = $('[name=zip]').val();
			var breed = $('[name=breed]').val();
			// alert(zipValue);
			$.ajax({
				type:'POST', 
				url: 'https://api.petfinder.com/v2/oauth2/token',
				contentType: 'application/x-www-form-urlencoded',
				data: {
					'grant_type': 'client_credentials',
					'client_id': 'tLNejqQtyf4nPkVnRxjofgH2rwlmkMfMILhMxKRu7d0CY2xdo9',
					'client_secret':'7sxdhi7eE06PIGOEbu8Kx4FBW8qvC1VmhwIRz3el' 	
				},
				success: function(data){
					console.log(data);
					var token = data.access_token;
					$.ajax({
						type: "GET",
						url: 'https://api.petfinder.com/v2/animals',
						headers:{
							'Authorization': 'Bearer ' + token 
						},
						data:{
							'type': 'dog',
							'location' : zipValue, 
							'breed' : breed
						},
						success: function(data){
						    $('#animalTable').html("<p>Linkes to adpoption locations:</p>");
							$.each( data.animals, function( index, animal ) {
                                    $('#animalTable').append("<a target='_blank' href='"+animal.url+"'>"+ breed  + "</a>").css("color", 'white');
                                    $('#animalTable').append("<br>");
                            });
							    
							
						},
						error: function(){
						    alert("error");
						}
					});
				},
				error: function(){
				    alert("error");
					
				}
			});
	});
	
</script>


	</body>
</html>


