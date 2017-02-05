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
	
	<div id="restorWrapper"><!--Open restoration-->
		<div class="row">
			<div class="small-12 medium-8 columns">
				<h1>Lighthouse Restoration</h1>
				<h2>learn about the rebuilding of the lightkeeper’s cottage</h2>
			</div>
			
			<div class="small-12 medium-4 columns">
				<p><a href="restoration.php">learn more</a></p>
			</div>
		</div>
	</div><!--Close restoration-->
	
	<div id="extraDesc">
		<div class="row" id="extraDescCon">
			<div class="small-12 columns">
				<p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.</p>
			</div>
		</div>
	</div>
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>