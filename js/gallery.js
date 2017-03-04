(function() {
	"use strict";
	//console.log("SEAF Fired");

var playPause = document.querySelector(".playPause");

var firstNo = document.querySelector("#firstNo");
var secondNo = document.querySelector("#secondNo");

var galleryIcon = document.querySelector(".galleryIcon");
var thumbnailCon = document.querySelector("#thumbnailCon");

var currentImg = 1;
var thumbnails = document.querySelectorAll('#thumbnailCon img');
//console.log(thumbnails.length);

function showHide() {
	thumbnailCon.classList.toggle("hide");
	galleryIcon.classList.toggle("galleryIconClicked");
}
	
$('#thumbnailCon img, #next, #prev').on('click', function() {
	
	if(this.id == "prev") {
		currentImg--;
		//console.log(currentImg);
		TweenMax.from(mainImg, 0.3, {x:5000, ease:Power2.easeInOut});
		if (currentImg < 1) {
			currentImg = thumbnails.length;
		}
	}else if(this.id == "next") {
		currentImg++;
		//console.log(currentImg);
		TweenMax.from(mainImg, 0.3, {x:-5000, ease:Power2.easeInOut});
		if(currentImg > thumbnails.length) {
			currentImg = 1;
		}
	}else{
		currentImg = this.id;
	}
	
	$.getJSON('admin/ajaxQueryGallery.php', {gallery_id : currentImg}, function(data) {
		//console.log(data);

		$('#mainImg img').attr('src',"images/" + data.gallery_img);
		TweenMax.from(mainImg, 0.6, {opacity:0, ease:Power2.easeInOut});

		$('#imgDesc').text(data.gallery_desc);
		$('#thumbnailCon div').addClass('nonActive');
		$('#'+data.gallery_id).parent().removeClass('nonActive');

		firstNo.innerHTML = currentImg;
		secondNo.innerHTML = thumbnails.length;
	})
})

function slideshow() {
	playPause.classList.toggle("playPauseClicked");
	console.log("Slideshow feature not yet functional");
}

galleryIcon.addEventListener("click", showHide, false);
playPause.addEventListener("click", slideshow, false);

})();