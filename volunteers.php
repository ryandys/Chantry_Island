<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_volunteer = "tbl_volunteer";
	$getVol = getAll($tbl_volunteer);

	$strPageTitle = 'Volunteers';
	include_once("layout/header.php");

?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>volunteers</h1>
			</div>
		</div>
	</div>

	<div class="row" id="interviews">
	<h2>Interviews</h2>
		<div class="small-12 medium-4 columns">
		<iframe width="100%" height="190px" src="https://www.youtube.com/embed/BkZWHmX8HY0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="small-12 medium-4 columns">
		<iframe width="100%" height="190px" src="https://www.youtube.com/embed/N27M4OmubxI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="small-12 medium-4 columns">
		<iframe width="100%" height="190px" src="https://www.youtube.com/embed/hbGffSYF5LU" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<!--start volunteers-->
	<div class="row" id="volunteersCon">

		<?php

				if(!is_string($getVol)){
					while($row = mysqli_fetch_array($getVol)){
						echo "<div class=\"small-12 medium-4 columns end\">";
							echo "<div class=\"eventsCon\" data-equalizer-watch>";
							echo "<img src=\"images/uploads/{$row['volunteer_img']}\" alt=\"event thumb\" class=\"eventThumbImg\">";
							echo "<h1>{$row['volunteer_name']}</h1>";
							echo "<p>{$row['volunteer_pos']}</p>";
							echo "</div>";
							echo "</div>";
					}
				}else{
					echo "<p>{$getVol}</p>";
				}

			?>

	</div>
	<!--end volunteers-->
	
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>