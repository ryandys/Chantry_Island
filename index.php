<?php
$strPageTitle = 'Home';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
<!--start homeRotatorCon-->
<div id="homeRotatorCon">

	<div class="homeSelectorsMedium show-for-medium">
		<div class="selectorDot" id="activeSelector"></div>
		<div class="selectorDot"></div>
		<div class="selectorDot"></div>
	</div>

	<div class="row">
		<div class="small-12 medium-5 columns" id="homeRotatorText">
			<h2 class="heading whiteTxt">Marine Heritage Society</h2>
			<p class="paragraph whiteTxt">The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors.</p>
		</div>
	</div>

	<div class="homeSelectorsSmall hide-for-medium">
		<div class="selectorDot" id="activeSelector"></div>
		<div class="selectorDot"></div>
		<div class="selectorDot"></div>
	</div>

</div>
<!--end homeRotatorCon-->

<!--start timer-->
<div id="homeTimer"></div>
<!--end timer-->

<!--start bookingBar-->
<div id="bookingBarFull">
	<div class="bookingBar row">
		<div class="small-6 medium-6 medium-offset-0 large-5 large-offset-1 columns" id="bookingCon">
			<h3 id="bookATour">Book a Tour</h3>
			<h3 id="dontWait">DON'T WAIT</h3>
		</div>
		<div class="small-6 medium-6 large-5 columns end" id="bookingInfo">
			<p class="whiteTxt show-for-medium">We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily.</p>
			<a href="booking.php" class="whiteTxt">BOOK NOW</a>
		</div>
	</div>
</div>
<!--end bookingBar-->

<!--start links-->
<div class="linksCon row">
	<div class="iconCon small-12 medium-4 columns">
		<a href="gallery.php"><img src="images/camera_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns"></a>
		<div class="small-8 medium-12 large-8 columns">
			<h3>Photo Gallery</h3>
			<p>View a collection of amazing photographs of Chantry Island and related things.</p>
		</div>
	</div>

	<div class="iconCon small-12 medium-4 columns">
		<a href="contact.php"><img src="images/contact_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns"></a>
		<div class="small-8 medium-12 large-8 columns">
			<h3>Contact Us</h3>
			<p>Looking for more information about Chantry Island? Contact us to learn more!</p>
		</div>
	</div>

	<div class="iconCon small-12 medium-4 columns">
		<a href="about.php"><img src="images/info_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns"></a>
			<div class="small-8 medium-12 large-8 columns">
			<h3>About Us</h3>
			<p>Learn more about our rich history and see the restoration project.</p>
		</div>
	</div>
</div>
<!--end links-->

<!--start video-->
<div class="vidCon row">
	<div class="vidInfo small-12 medium-6 columns">
		<h2 class="heading redTxt">Chantry Island Tours</h2>
		<p class="paragraph blackTxt">Come out to breathtaking Southampton Ontario and take in the sights and sounds of Chantry Island. Take a tour of the Light Keeper's Cottage and climb the 106 steps to the top of the lighthouse tower for an unparalleled view of the area.</p>
		<p class="paragraph blackTxt">The island is also a Federal Migratory Bird Sanctuary. With approximately 50,000 birds on the island during the breeding season, it is surely a sight to behold.</p>
	</div>
	<div class="vid small-12 medium-6 columns">
		<iframe width="100%" height="300px" src="https://www.youtube.com/embed/7AGUaUcupss" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!--end video-->

<!--start homeDonateCon-->
<div id="homeDonateCon">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="donateTitle whiteTxt">Donations are Greatly Appreciated</h2>
		</div>
		<div class="small-12 medium-8 small-centered columns">
			<p class="donateInfo whiteTxt">Since 1997 we have had a tremendous amount of support through donations. Thank you to our past and future donors, you truly make a difference.</p>
		</div>
		<div id="donateButCon">
			<a id="donateBut" href="donate.php">Donate Today</a>
		</div>
	</div>
</div>
<!--end homeDonateCon-->

<!--start affiliates-->
<div id="affiliatesConFull">
	<div class="affiliatesCon row" data-equalizer>
		<h2 class="heading redTxt">Affiliate Partners</h2>
			<div class="small-12 medium-4 columns affiliateCard">
				<a href="http://www.saugeenshores.ca/en/index.asp" target="_blank"><img src="images/saugeen_shores.png"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Saugeen Shores</h3>
					<p class="paragraph blackTxt">The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce.</p>
				</div>
			</div>

			<div class="small-12 medium-4 columns show-for-medium">
				<a href="http://www.brucemuseum.ca/" target="_blank"><img src="images/bruce_county_museum.png"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Bruce County Museum &amp; Cultural Centre</h3>
					<p class="paragraph blackTxt">Offering a journey through thousands of years of natural and human history.</p>
				</div>
			</div>

			<div class="small-12 medium-4 columns show-for-medium">
				<a href="http://www.brucecoastlighthouses.com/" target="_blank"><img src="images/bruce_coast_lighthouse_tour.png"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Bruce Coast Lighthouse Tour</h3>
					<p class="paragraph blackTxt">Enjoy the Bruce Coast Lighthouse tour.</p>
				</div>
			</div>

			<div class="small-12 columns" id="affiliatesControls">
				<img src="images/chevron.svg" alt="Left" id="leftArrow">
				<img src="images/chevron.svg" alt="Right" id="rightArrow">
			<div class="selectors">
				<div class="selectorDot"></div>
				<div class="selectorDot" id="activeSelector"></div>
				<div class="selectorDot"></div>
				<div class="selectorDot"></div>
				<div class="selectorDot"></div>
			</div>
		</div>
	</div>
</div>
<!--end affiliates-->
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>