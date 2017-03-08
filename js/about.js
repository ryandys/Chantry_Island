(function() {
	"use strict";

var aboutRotatorCon = document.querySelector("#aboutTopBarWrapper");
var count = 1;

var aboutImgArray = ["about_rotator_1.jpg",
				"about_rotator_2.jpg",
				"about_rotator_3.jpg"];

function imgCycle() {
	
	aboutRotatorCon.style.backgroundImage = "url(images/"+aboutImgArray[count]+")";
	count++;

	if(count === aboutImgArray.length) {
		count = 0;
	}

	TweenMax.from(aboutRotatorCon, .8, {opacity: .5, ease: Power0.easeNone});
}

setInterval(imgCycle, 5000);

})();