<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_birds = "tbl_birds";
	$getBirds = getAll($tbl_birds);
	
?>

<?php
$strPageTitle = 'About';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->
    <h1 class="hide">about</h1>     
    
    
	<div id="aboutTopBarWrapper"><!--Open topBar-->  
		<div class="row">
			
			<div class="small-12 columns" id="aboutTopBar">
				<h2>About Chantry Island</h2>
				<h3>Marine Heritage Society</h3>
				<div id="aboutTopBarLine"></div>
				<p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The objective of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.</p>
			</div>
		</div>
	</div><!--Close topBar-->
	
	<div class="row expanded" data-equalizer><!--Open Des/Book Row-->
		<div class="small-12 medium-8 columns" id="aboutDesc">

			<div data-equalizer-watch>
			<p class="blackTxt">Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.</p>
			</div>
		</div>
		
		<div class="small-12 medium-4 columns" id="aboutBook">  
			<div data-equalizer-watch>
				<h2>Book a tour</h2>
				<h3 class="heading">Experience Beauty</h3>
				<p><a href="booking.php">GET STARTED</a></p>
			</div>
		</div>
	</div><!--Close Des/Book Row-->
	
	<div id="restorWrapper"><!--Open restoration-->
		<div class="row">
			<div class="small-12 medium-8 columns">
				<h2>Lighthouse Restoration</h2>
				<h3>learn about the rebuilding of the lightkeeper’s cottage</h3>
			</div>
			
			<div class="small-12 medium-4 columns">
				<p><a href="restoration.php">learn more</a></p>
			</div>
		</div>
	</div><!--Close restoration-->

	<div class="row">
		<div class="small-12 medium-8 large-6 medium-centered columns">
			<video id="vidCon" width="100%" height="100%" poster="videos/chantry_promo_thumb.png" controls>
				<source id="mp4Src" src="videos/chantry_promo.mp4" type="video/mp4">
				<source id="webmSrc" src="videos/chantry_promo.webm" type="video/webm">
				<source id="oggSrc" src="videos/chantry_promo.ogv" type="video/ogg">
					Your browser does not support HTML5 video.
			</video>
		</div>
	</div>
	
	<div id="extraDesc"><!--Open extraDesc-->
		<div class="row" id="extraDescCon">
			<div class="small-12 columns">
				<p>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.</p>
			</div>
		</div>
	</div><!--Close extraDesc-->
	
	<div id="islandSizeWrapper"><!--Open islandSizeWrapper-->
		<div class="row">
			<div class="small-12 medium-9 columns">
				<p>The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>
			</div>
			
			<div class="hide-for-small-only medium-3 columns">
				<img src="images/waterlvl_icon.png" alt="water level icon">
			</div>
		</div>
	</div><!--Close islandSizeWrapper-->
	
	<div id="lightHouseHisTitle">
		<div class="row">
			<div class="small-12 columns">
				<h2>The Lighthouse History</h2>
			</div>
		</div>
	</div>
	
	<div id="historyWrapper"><!--Open history-->
		<div class="row">
			<div class="small-12 medium-6 large-offset-2 large-5 columns">
				<p>During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.</p>
			</div>
			
			<div class="small-12 medium-6 large-5 columns">
				<p>The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.</p>
			</div>
		</div>
	</div><!--Close history-->
	
	<div id="birdSancWrapper"><!--Open Birds-->
		<div class="row">
			<div class="small-12 medium-6 columns">
				<h2>Federal Bird Sanctuary</h2>
			</div>
			
			<div class="small-12 medium-6 columns">
				<img src="images/birds.jpg" alt="birds">
			</div>
			
			<div class="small-12 columns">
				<?php

			if(!is_string($getBirds)){
				while($row = mysqli_fetch_array($getBirds)){
					echo "<p>{$row['birds_desc']}</p>";
				}
			}else{
				echo "<p>{$getBirds}</p>";
			}

		?>
				<p>Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly
limited and tours must be booked through the Chantry Island Tour Base.</p>
			</div>
		</div>
	</div><!--Close Birds-->
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
<script src="js/about.js"></script>
    
<?php
	include("layout/footer.php");
?>