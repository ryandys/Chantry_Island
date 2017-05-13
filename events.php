<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_events = "tbl_events";
	$getEvents = getAllEvents($tbl_events);
	
?>

<?php
$strPageTitle = 'Events';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>events</h1>
			</div>
		</div>
	</div>
	
	<div id="eventsWrapper">
		<div class="row" data-equalizer>
			

			<?php

				if(!is_string($getEvents)){
					while($row = mysqli_fetch_array($getEvents)){
						echo "<div class=\"small-12 medium-4 columns end\">";
							echo "<div class=\"eventsCon\" data-equalizer-watch>";
							echo "<img src=\"images/uploads/{$row['events_thumb']}\" alt=\"event thumb\" class=\"eventThumbImg\">";
							echo "<h1>{$row['events_title']}</h1>";
							echo "<p>{$row['events_content']}</p>";
							echo "</div>";
						echo "</div>";
					}
				}else{
					echo "<p>{$getEvents}</p>";
				}

			?>

			
		</div>
	</div>
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>