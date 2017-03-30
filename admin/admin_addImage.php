<?php
	
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {
		$mainImg = $_FILES['gallery_img']['name'];
		//echo $fimg;
		$desc = $_POST['gallery_desc'];
		
		$uploadImage = addImage($mainImg,$desc);
		
		$message = $uploadImage3;
	}

?>

<?php
$strPageTitle = 'Add Gallery Image';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Add Image</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Add Gallery Image</h1>

	    <div class="row">
			
			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

			<p>Recomended Image Dimensions: 1280px x 720px</p>

		    <?php if(!empty($message)){echo $message;} ?>
			<form action="admin_addImage.php" method="post" enctype="multipart/form-data">
				
				<label>Gallery Image:</label>
				<input type="file" name="gallery_img" value="" size="32">
				
				<label>Description:</label>
				<input class="inputAddEdit" type="text" name="gallery_desc" value="" size="32">

				<input type="submit" name="submit" value="Add" id="addEditSubmit">
			</form>

			</div>		
		</div>
		</section>


	<!--CLOSE BODY CONTENT HERE-->
 
    
<?php
	include("layout/footer.php");
?>