<?php
	
	require_once("phpscripts/init.php");
	confirm_logged_in();

	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	$tbl = "tbl_gallery";
	$image = getAll($tbl);

?>

<?php
$strPageTitle = 'Delete Images';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Delete Images</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Delete Existing Images</h1>

		<div class="row">

			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

			<p>NOTE: These effects are permanent and cannot be undone.</p>

	    <div class="row" data-equalizer>

		    	<?php
					while($row=mysqli_fetch_array($image)){
						echo "<div class=\"small-6 medium-6 large-4 columns end\">";
						echo "<img class=\"thumb\" src=\"../images/uploads/{$row['gallery_img']}\" alt=\"{$row['gallery_desc']}\">";
						
						echo "<div class=\"delConBut\">";
						echo "<a href=\"phpscripts/caller.php?caller_id=deleteImage&id={$row['gallery_id']}\">Delete Image</a>";
						echo "</div>";
						echo "</div>";
					}
				?>

			</div>		
		</div>
		</section>


	<!--CLOSE BODY CONTENT HERE-->
 
    
<?php
	include("layout/footer.php");
?>