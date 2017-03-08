(function() {
	"use strict";

var homeRotatorCon = document.querySelector("#homeRotatorCon");
var homeRotatorTitle = document.querySelector("#homeRotatorText h2");
var homeRotatorTxt = document.querySelector("#homeRotatorText p");
var count = 1;

var homeImgArray = ["home_rotator_1.jpg",
				"home_rotator_2.jpg",
				"home_rotator_3.jpg"];

var homeTitleArray = ["Marine Heritage Society","Touring Chantry Island","Light Keeper's Cottage"];

var homeTxtArray = ["The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.",
	"As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.",
	"Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds."];

var homeDotsArray = document.querySelectorAll(".homeSelectors div");

function dotAdd(e) {
	var whichDot = e.currentTarget.id;
	var dotNumber = whichDot.slice(3,4);
	homeDotsArray[0].classList.remove("activeSelector");
	homeDotsArray[1].classList.remove("activeSelector");
	homeDotsArray[2].classList.remove("activeSelector");
	homeDotsArray[dotNumber].classList.add("activeSelector");
	homeRotatorCon.style.backgroundImage = "url(images/"+homeImgArray[dotNumber]+")";
	homeRotatorTitle.innerHTML = homeTitleArray[dotNumber];
	homeRotatorTxt.innerHTML = homeTxtArray[dotNumber];
}

for (var i=0; i<homeDotsArray.length; i++) {
	homeDotsArray[i].addEventListener("click", dotAdd, false);
}

})();