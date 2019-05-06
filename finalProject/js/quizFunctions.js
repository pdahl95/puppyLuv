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
            $(".column").each(function(i) {
                    $(this).append("<img id='img" + i + "' src='" + data[i]['image_url'] + "' width='408' height='250'/> ");
                    $(this).append("<img id='heart" + i + "' src='../img/dilike.png'>");
                    $("#heart" + i).css({
                        'width': '40px',
                        'height': '40px',
                        'padding': '10px'
                    });

                });
        }
    });


});
