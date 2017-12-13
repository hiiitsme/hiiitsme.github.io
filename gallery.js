
var txt='Gallery';
var j = 0;
var speed = 100;
$(document).ready(function a() {
	if (j < txt.length) {
	    $("#heading1").append( txt.charAt(j));
	    j++;
	    setTimeout(a, speed);
	  }
});
$(document).ready(function() {
    for (var i = 1; i < 37; i++) {
        $("#container_image").append("<span class='gal'><a class='example-image-link' href='images/" + i + 
            ".jpg' data-lightbox='example-set' data-title='Click the right half of the image to move forward.'><img src='images/" + i + 
            ".jpg' height='150px' width='300px' alt='Flowers in Chania'></a></span>&nbsp;");
        
    }
});

