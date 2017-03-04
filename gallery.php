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
<noscript>
  <div id="noScriptGallery">
    <p>JavaScript is required to view the gallery.</p>
  </div>
</noscript>

<div class="row">
  <div id="galleryCon">
    <div id="mainImgCon">
      <img src="images/play.svg" alt="Slideshow" class="playPause">
      <p id="imgNo"><span id="firstNo">1</span>/<span id="secondNo">20</span></p>
      <div id="mainImg">
        <img src="images/img-1.jpg" alt="Current Image">
      </div>
        <p id="imgDesc">Photo by Karen Smith.</p>
        <img src="images/chevron2.svg" alt="left" id="prev">
        <img src="images/chevron2.svg" alt="right" id="next">
        <img src="images/gallery_icon.svg" alt="Gallery" class="galleryIcon">
    </div> 
  </div>
</div>

<div class="row hide" id="thumbnailCon">
    <div class="thumb"><img src="images/img-1.jpg" id="1"></div>
    <div class="thumb nonActive"><img src="images/img-2.jpg" id="2"></div>
    <div class="thumb nonActive"><img src="images/img-3.jpg" id="3"></div>
    <div class="thumb nonActive"><img src="images/img-4.jpg" id="4"></div>
    <div class="thumb nonActive"><img src="images/img-5.jpg" id="5"></div>
    <div class="thumb nonActive"><img src="images/img-6.jpg" id="6"></div>
    <div class="thumb nonActive"><img src="images/img-7.jpg" id="7"></div>
    <div class="thumb nonActive"><img src="images/img-8.jpg" id="8"></div>
    <div class="thumb nonActive"><img src="images/img-9.jpg" id="9"></div>
    <div class="thumb nonActive"><img src="images/img-10.jpg" id="10"></div>
    <div class="thumb nonActive"><img src="images/img-11.jpg" id="11"></div>
    <div class="thumb nonActive"><img src="images/img-12.jpg" id="12"></div>
    <div class="thumb nonActive"><img src="images/img-13.jpg" id="13"></div>
    <div class="thumb nonActive"><img src="images/img-14.jpg" id="14"></div>
    <div class="thumb nonActive"><img src="images/img-15.jpg" id="15"></div>
    <div class="thumb nonActive"><img src="images/img-16.jpg" id="16"></div>
    <div class="thumb nonActive"><img src="images/img-17.jpg" id="17"></div>
    <div class="thumb nonActive"><img src="images/img-18.jpg" id="18"></div>
    <div class="thumb nonActive"><img src="images/img-19.jpg" id="19"></div>
    <div class="thumb nonActive"><img src="images/img-20.jpg" id="20"></div>
</div>
<!--end gallery-->

    <!--CLOSE BODY CONTENT HERE-->

<script src="js/vendor/jquery.js"></script>
<script src="js/gallery.js"></script>
    
<?php
	include("layout/footer.php");
?>