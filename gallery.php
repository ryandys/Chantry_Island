<?php
    
  //ini_set('display_errors',1);
  //error_reporting(E_ALL);
    
  require_once('admin/phpscripts/init.php');

  $tbl_galleryThumb = "tbl_gallery";
  $getGalleryThumb = getAll($tbl_galleryThumb);

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
      <p id="imgNo"><span id="firstNo">1</span>/<span id="secondNo">20</span></p>
      <div id="mainImg">
        <img src="images/uploads/img-1.jpg" alt="Current Image">
      </div>
        <p id="imgDesc">Photo by Karen Smith.</p>
        <img src="images/chevron2.svg" alt="left" id="prev">
        <img src="images/chevron2.svg" alt="right" id="next">
        <img src="images/gallery_icon.svg" alt="Gallery" class="galleryIcon">
    </div> 
  </div>
</div>

<div class="row hide" id="thumbnailCon">
    
    <?php

        if(!is_string($getGalleryThumb)){
            while($row = mysqli_fetch_array($getGalleryThumb)){
                echo "<div class=\"thumb nonActive\"><img src=\"images/uploads/{$row['gallery_img']}\" id=\"{$row['gallery_id']}\"></div>";
            }
        }else{
            echo "<p>{$getGalleryThumb}</p>";
        }

    ?>
    
</div>
<!--end gallery-->

    <!--CLOSE BODY CONTENT HERE-->

<script src="js/vendor/jquery.js"></script>
<script src="js/gallery.js"></script>
    
<?php
	include("layout/footer.php");
?>