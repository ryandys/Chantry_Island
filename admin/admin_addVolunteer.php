<?php
	
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {
		$mainImg = $_FILES['volunteer_img']['name'];
		//echo $fimg;
		$name = $_POST['volunteer_name'];
		$pos = $_POST['volunteer_pos'];
		
		$uploadVolunteer = addVolunteer($name,$pos,$mainImg);
		
		$message = $uploadVolunteer;
	}

?>

<?php
$strPageTitle = 'Add Volunteer';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Add Volunteer</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Add Volunteer</h1>

	    <div class="row">
			
			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

		    <?php if(!empty($message)){echo $message;} ?>
			<form action="admin_addVolunteer.php" method="post" enctype="multipart/form-data">

				<label>Image:</label>
				<input type="file" name="volunteer_img" value="" size="32">
				
				<label>Name:</label>
				<input class="inputAddEdit" type="text" name="volunteer_name" value="" size="32">

				<label>Position:</label>
				<input class="inputAddEdit" type="text" name="volunteer_pos" value="" size="32">

				<input type="submit" name="submit" value="Add" id="addEditSubmit">
			</form>

			</div>		
		</div>
		</section>


	<!--CLOSE BODY CONTENT HERE-->
 
    
<?php
	include("layout/footer.php");
?>