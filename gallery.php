<?php
$strPageTitle = 'Gallery';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>gallery</h1>
			</div>
		</div>
	</div>
    
<!--start galleryInfo-->
<div class="row" id="galleryInfo">
	<div class="small-12 medium-10 columns">
		<p class="paragraph">Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
		<p class="paragraph">If you have photos of Chantry Island that you would like to share with us, connect with our <a href="https://www.facebook.com/MarineHeritageSociety" target="_blank">Facebook page</a>.</p>
	</div>
	<img src="images/photo_gallery.svg" alt="Photo Gallery" class="show-for-medium medium-2 columns" id="photoGalleryIcon">
</div>
<!--end galleryInfo-->

<!--start gallery-->
<div class="row" id="galleryCon">
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
	<div class="small-4 columns galleryPlaceholder"><img src="images/news_img_4.jpg" alt="placeholder"></div>
</div>
<!--end gallery-->

    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>