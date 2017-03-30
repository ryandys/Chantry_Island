<?php
	
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {

		$title = $_POST['events_title'];
		$date = $_POST['events_date'];
		$content = $_POST['events_content'];
		
		$uploadEvent = addEvent($title,$date,$content);
		
		$message = $uploadEvent;
	}

?>

<?php
$strPageTitle = 'Add Event';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Add Event</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Add Event</h1>

	    <div class="row">
			
			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

		    <?php if(!empty($message)){echo $message;} ?>
			<form action="admin_addEvent.php" method="post" enctype="multipart/form-data">
				
				<label>Title:</label>
				<input class="inputAddEdit" type="text" name="events_title" value="" size="32">

				<label>Date:</label>
				<input class="inputAddEdit" type="text" name="events_date" value="" size="32">

				<label>News Content:</label>
				<input class="inputAddEdit" type="text" name="events_content" value="" size="32">

				<input type="submit" name="submit" value="Add" id="addEditSubmit">
			</form>

			</div>		
		</div>
		</section>


	<!--CLOSE BODY CONTENT HERE-->
 
    
<?php
	include("layout/footer.php");
?>