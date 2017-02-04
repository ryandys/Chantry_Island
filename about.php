<?php
$strPageTitle = 'About';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="aboutTopBarWrapper"><!--Open topBar-->  
		<div class="row">
			
			<div class="small-12 columns" id="aboutTopBar">
				<h1>About Chantry Island</h1>
				<h2>Marine Heritage Society</h2>
			</div>
		</div>
	</div><!--Close topBar-->
	
	<div class="row expanded" data-equalizer><!--Open Des/Book Row-->
		<div class="small-12 medium-8 columns" id="aboutDesc">
			<div data-equalizer-watch>
			<p class="blackTxt">Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island
is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
			</div>
		</div>
		
		<div class="small-12 medium-4 columns" id="aboutBook">  
			<div data-equalizer-watch>
				<h1>Book a tour</h1>
				<h2 class="heading">Experience Beauty</h2>
				<p><a href="booking.php">GET STARTED</a></p>
			</div>
		</div>
	</div><!--Close Des/Book Row-->
	
	<div id="restorWrapper">
		<div class="row">
			<div class="small-12 medium-8 columns">
				<h1>Lighthouse Restoration</h1>
				<h2>learn about the rebuilding of the lightkeeper’s cottage</h2>
			</div>
			
			<div class="small-12 medium-4 columns">
				<p><a href="restoration.php">learn more</a></p>
			</div>
		</div>
	</div>
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>