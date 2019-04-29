// JavaScript File
$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: "../sql/getImages.php",
        dataType: "json",
        data: {
           
        },
        success: function(data, status) {
           console.log(data);
        }
    });



});
