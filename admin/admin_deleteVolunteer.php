<?php
	
	require_once("phpscripts/init.php");
	confirm_logged_in();

	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	$tbl = "tbl_volunteer";
	$vol = getAll($tbl);

?>

<?php
$strPageTitle = 'Delete Volunteers';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Delete Volunteers</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Delete Existing Volunteers</h1>

		<div class="row">

			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

			<p>NOTE: These effects are permanent and cannot be undone.</p>

	    <div class="row" data-equalizer>

		    	<?php
					while($row=mysqli_fetch_array($vol)){
						echo "<div class=\"small-12 medium-12 large-6 columns end\">";
						echo "<div class=\"delCon\" data-equalizer-watch>";
						echo "{$row['volunteer_name']}<br>";
						echo "{$row['volunteer_pos']}";
						echo "</div>";

						echo "<div class=\"delConBut\">";
						echo "<a href=\"phpscripts/caller.php?caller_id=deleteVol&id={$row['volunteer_id']}\">Delete Volunteer</a>";
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