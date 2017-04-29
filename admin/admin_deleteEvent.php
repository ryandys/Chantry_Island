<?php
	
	require_once("phpscripts/init.php");
	confirm_logged_in();

	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	$tbl = "tbl_events";
	$events = getAll($tbl);

?>

<?php
$strPageTitle = 'Delete Events';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Delete Events</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Delete Existing Events</h1>

		<div class="row">

			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

			<p>NOTE: These effects are permanent and can not be undone.</p>

	    <div class="row" data-equalizer>

		    	<?php
					while($row=mysqli_fetch_array($events)){
						echo "<div class=\"small-6 columns end\">";
						echo "<img src=\"../images/uploads/{$row['events_thumb']}\" alt=\"{$row['news_title']}\">";
						echo "<div class=\"delCon\" data-equalizer-watch>";
						echo "{$row['events_title']}<br>";
						echo "{$row['news_date']}";
						echo "</div>";
						
						echo "<div class=\"delConBut\">";
						echo "<a href=\"phpscripts/caller.php?caller_id=deleteEvent&id={$row['events_id']}\">Delete Event</a>";
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