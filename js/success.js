(function(){
	"use strict";

var countdown = document.querySelector("#countdown");
var count = 3;
countdown.innerHTML = count;

setInterval(function() {
	count--;
	countdown.innerHTML = count;
}, 1000);

})();