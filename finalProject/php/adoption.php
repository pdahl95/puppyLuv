
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form>
				<legend> Find A Cat Near You! </legend>
				<label for="zip">Zip</label>
				<input type="text" name="zip" id="zip">
				<input type="submit" id="submitZip">
		</form>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!--<script src='script.js'></script>-->
		
		<script>

		var apiKey = 'tLNejqQtyf4nPkVnRxjofgH2rwlmkMfMILhMxKRu7d0CY2xdo9'; // assign our key to a variable, easier to read
		
		// the next line and function set up the button in our html to be clickable and reactive 
		document.addEventListener('DOMContentLoaded', bindButtons);
		
		function bindButtons(){
			document.getElementById('submitZip').addEventListener('click', function(event){
				event.preventDefault();
				var zip = document.getElementById('zip').value; // this line gets the zip code from the form entry
			
				
				// Within $.ajax{...} is where we fill out our query 
				$.ajax({
				 type: "get",
		          url: 'http://api.petfinder.com/pet.getRandom',
		          dataType: "json",
					data: {
						key: apiKey,
						animal: 'cat',
						'location': zip,
						output: 'basic',
						format: 'json'
					},
					// Here is where we handle the response we got back from Petfinder
					success: function( response ) {
						console.log(response); // debugging
						var catName = response.petfinder.pet.name.$t;
						var img = response.petfinder.pet.media.photos.photo[0].$t;
						var id = response.petfinder.pet.id.$t;
		
						var newName = document.createElement('a');
						var newDiv = document.createElement('div');
						newName.textContent = catName;
						newName.href = 'https://www.petfinder.com/petdetail/' + id;
		
						var newImg = document.createElement('img');
						newImg.src = img;
						
						var list = document.createElement("div");
						list.setAttribute("id", "List");
						document.body.appendChild(list);
		
						newDiv.appendChild(newName);
						list.appendChild(newDiv);
						list.appendChild(newImg);
					}
				});
				})
		
		}

</script>

		
		
	</body>
</html>


