$(document).foundation();
(function() {
	"use strict";

	var offCanvasIcon = document.querySelector("#sideSocIconsCon");

	function activateSociconsSide() {
		var screenPOS;
		screenPOS = window.scrollY;
		 
		if(screenPOS>100) {
			TweenMax.to(offCanvasIcon, .5, {marginLeft: 10});
			window.removeEventListener("scroll", activateSociconsSide, false);
		}
	}

	window.addEventListener("scroll", activateSociconsSide, false);

})();