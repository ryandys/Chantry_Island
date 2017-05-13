(function() {
	"use strict";

var homeRotatorCon = document.querySelector("#homeRotatorCon");
//var homeRotatorInfo = document.querySelector("#homeRotatorText");
//var homeRotatorTitle = document.querySelector("#homeRotatorText h2");
//var homeRotatorTxt = document.querySelector("#homeRotatorText p");
var count = 0;

var homeImgArray = ["home_rotator_1.jpg",
				"home_rotator_2.jpg",
				"home_rotator_3.jpg"];

/*
var homeTitleArray = ["Marine Heritage Society","Touring Chantry Island","Light Keeper's Cottage"];

var homeTxtArray = ["The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.",
	"As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.",
	"Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds."];
*/

var homeDotsArray = document.querySelectorAll(".homeSelectors div");

function dotAdd(e) {
	var whichDot = e.currentTarget.id;
	var dotNumber = whichDot.slice(3,4);
	homeDotsArray[0].classList.remove("activeSelector");
	homeDotsArray[1].classList.remove("activeSelector");
	homeDotsArray[2].classList.remove("activeSelector");
	homeDotsArray[dotNumber].classList.add("activeSelector");
	homeRotatorCon.style.backgroundImage = "url(images/"+homeImgArray[dotNumber]+")";
	//homeRotatorTitle.innerHTML = homeTitleArray[dotNumber];
	//homeRotatorTxt.innerHTML = homeTxtArray[dotNumber];
	TweenMax.from(homeRotatorCon, 0.8, {opacity: 0.5, ease: Power0.easeNone});
	//TweenMax.from(homeRotatorInfo, 0.5, {x:-5000, ease:SteppedEase.easeOut});
}

for (var i=0; i<homeDotsArray.length; i++) {
	homeDotsArray[i].addEventListener("click", dotAdd, false);
}

var affiliatesControls = document.querySelectorAll("#affiliatesControls img");
var affiliatesCard = document.querySelectorAll(".affiliatesCard");
var affiliatesCount = 0;

var affiliatesContent = [
	{img:"images/saugeen_shores.png", desc:"Saugeen Shores", link:"http://www.saugeenshores.ca/en/index.asp"},
	{img:"images/bruce_county_museum.png", desc:"Bruce County Museum &amp; Cultural Centre", link:"http://www.brucemuseum.ca/"},
	{img:"images/bruce_coast_lighthouse_tour.png", desc:"Bruce Coast Lighthouse Tour", link:"http://www.brucecoastlighthouses.com/"},
	{img:"images/explore_the_bruce.png", desc:"Explore The Bruce", link:"http://explorethebruce.com/"}
];

function affiliatesSwitch(e) {

	if(this.id == "affiliatesLeft") {
		affiliatesCount--;
		if (affiliatesCount < 0) {
			affiliatesCount = affiliatesContent.length - 1;
		}
	}else if(this.id == "affiliatesRight") {
		affiliatesCount++;
		if (affiliatesCount >= affiliatesContent.length) {
			affiliatesCount = 0;
		}
	}

	$('#affiliateCardMed a img').attr("src", affiliatesContent[affiliatesCount].img);
	$('#affiliateCardMed a').attr("href", affiliatesContent[affiliatesCount].link);
	$('#affiliateCardMed h3').html(affiliatesContent[affiliatesCount].desc);

}

for (var j=0; j<affiliatesControls.length; j++) {
	affiliatesControls[j].addEventListener("click", affiliatesSwitch, false);
}

})();