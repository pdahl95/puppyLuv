<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<div> Find A Dog Near You! </div>
	<label for="zip">Zip</label>
	<input type="text" name="zip" id="zip">
	<button id="submitBtn"> Search </button>
	<div id='animalTable'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	/* global $ */ 
		
		$("#submitBtn").on("click", function(){
			var zipValue = $('[name=zip]').val();
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
							'location' : zipValue
						},
						success: function(data){
						    $('#animalTable').html("<p>Linkes to adpoption locations:</p>");
							$.each( data.animals, function( index, animal ) {
                                    $('#animalTable').append("<a target='_blank' href='"+animal.url+"'>"+ "Location" + ":" + index + "</a>");
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


