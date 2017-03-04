(function() {
	"use strict";
	//console.log("SEAF Fired");
	
	var galleryIcon = document.querySelector("#galleryIcon");
	var thumbnailCon = document.querySelector("#thumbnailCon");
	var currentImg = 1;
	var thumbnails = document.querySelectorAll('#thumbnailCon img');
	//console.log(thumbnails.length);

	function showHide() {
	thumbnailCon.classList.toggle("hide");
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
			TweenMax.from(mainImg, 0.5, {opacity:0});

			$('#imgDesc').text(data.gallery_desc);
			$('#thumbnailCon div').addClass('nonActive');
			$('#'+data.gallery_id).parent().removeClass('nonActive');
		})

	})

	galleryIcon.addEventListener("click", showHide, false);

})();