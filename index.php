<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_video = "tbl_video";
	$getVideo = getAll($tbl_video);

	$tbl_homeHeader = "tbl_homeHeader";
	$gethomeHeader = getAll($tbl_homeHeader);

	$tbl_breakingBar = "tbl_breakingBar";
	$getbreakingBar = getAll($tbl_breakingBar);
	
	$strPageTitle = 'Home';
	include_once("layout/header.php");

?>
    
    
    
    <!--START BODY CONTENT HERE-->
    
    
<!--start homeRotatorCon-->
<div id="homeRotatorCon">

	<div class="row">
		<div class="small-12 medium-5 columns" id="homeRotatorText">
			<?php

				if(!is_string($gethomeHeader)){
					while($row = mysqli_fetch_array($gethomeHeader)){
						echo "<h2 class=\"heading whiteTxt\">{$row['homeHeader_title']}</h2>";
						echo "<p class=\"paragraph whiteTxt\">{$row['homeHeader_desc']}</p>";
					}
				}else{
					echo "<p>{$gethomeHeader}</p>";
				}

			?>
		</div>
	</div>

	<div class="homeSelectors">
		<div class="selectorDot nonActiveSelector activeSelector" id="dot0"></div>
		<div class="selectorDot nonActiveSelector" id="dot1"></div>
		<div class="selectorDot nonActiveSelector" id="dot2"></div>
	</div>

</div>
<!--end homeRotatorCon-->

<!--start bookingBar-->
<div id="bookingBarFull">
	<div class="bookingBar row">
		<div class="small-12 columns">
			<?php

				if(!is_string($getbreakingBar)){
					while($row = mysqli_fetch_array($getbreakingBar)){
						echo "<p class=\"heading whiteTxt\">{$row['breakingBar_title']}</p>";
						echo "<p><a href=\"{$row['breakingBar_link']}\">Learn More</a></p>";
					}
				}else{
					echo "<p>{$getbreakingBar}</p>";
				}

			?>
		</div>
	</div>
</div>
<!--end bookingBar-->

<!--start links-->
<div class="linksCon row">
	<div class="iconCon small-12 medium-4 columns">
		<a href="gallery.php"><img src="images/camera_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns" alt="icon"></a>
		<div class="small-8 medium-12 large-8 columns">
			<h3>Photo Gallery</h3>
			<p>View a collection of amazing photographs of Chantry Island and related things.</p>
		</div>
	</div>

	<div class="iconCon small-12 medium-4 columns">
		<a href="contact.php"><img src="images/contact_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns" alt="icon"></a>
		<div class="small-8 medium-12 large-8 columns">
			<h3>Contact Us</h3>
			<p>Looking for more information about Chantry Island? Contact us to learn more!</p>
		</div>
	</div>

	<div class="iconCon small-12 medium-4 columns">
		<a href="about.php"><img src="images/info_icon.svg" class="small-4 medium-8 medium-centered large-uncentered large-4 columns" alt="icon"></a>
			<div class="small-8 medium-12 large-8 columns">
			<h3>About Us</h3>
			<p>Learn more about our rich history and see the restoration project.</p>
		</div>
	</div>
</div>
<!--end links-->

<!--start video-->
<div class="vidCon row">
		<?php

			if(!is_string($getVideo)){
				while($row = mysqli_fetch_array($getVideo)){
					echo "<div class=\"vidInfo small-12 medium-6 columns\">";
					echo "<h2 class=\"heading redTxt\">Chantry Island Tours</h2>";
					echo "<p class=\"paragraph blackTxt\">{$row['video_desc']}</p>";
					echo "</div>";
					echo "<div class=\"vid small-12 medium-6 columns\">";
					echo "<iframe width=\"100%\" height=\"300px\" src=\"https://www.youtube.com/embed/7AGUaUcupss\" frameborder=\"0\" allowfullscreen></iframe>";
					echo "</div>";
				}
			}else{
				echo "<p>{$getVideo}</p>";
			}

		?>
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
<div class="affiliatesConFull">
	<div class="affiliatesConLarge show-for-large row" data-equalizer>
		<h2 class="heading redTxt">Affiliate Partners</h2>

			<div class="large-3 affiliatesCard columns">
				<a href="http://www.saugeenshores.ca/en/index.asp" target="_blank"><img src="images/saugeen_shores.png"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Saugeen Shores</h3>
				</div>
			</div>

			<div class="large-3 affiliatesCard columns">
				<a href="http://www.brucemuseum.ca/" target="_blank"><img src="images/bruce_county_museum.png" alt="affiliate"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Bruce County Museum &amp; Cultural Centre</h3>
				</div>
			</div>

			<div class="large-3 affiliatesCard columns">
				<a href="http://www.brucecoastlighthouses.com/" target="_blank"><img src="images/bruce_coast_lighthouse_tour.png" alt="affiliate"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Bruce Coast Lighthouse Tour</h3>
				</div>
			</div>

			<div class="large-3 affiliatesCard columns">
				<a href="http://explorethebruce.com/" target="_blank"><img src="images/explore_the_bruce.png" alt="affiliate"></a>
				<div class="affiliatesInfo" data-equalizer-watch>
					<h3 class="paragraph redTxt">Explore The Bruce</h3>
				</div>
			</div>
	</div>

	<div class="affiliatesConMed hide-for-large row">
	<h2 class="heading redTxt">Affiliate Partners</h2>
		<div class="small-12 medium-6 medium-offset-3 affiliatesCard columns end" id="affiliateCardMed">
			<a href="http://www.saugeenshores.ca/en/index.asp" target="_blank"><img src="images/saugeen_shores.png" alt="affiliate"></a>
			<div class="affiliatesInfo" data-equalizer-watch>
				<h3 class="paragraph redTxt">Saugeen Shores</h3>
			</div>
		</div>

		<div class="small-12 columns" id="affiliatesControls">
			<img src="images/chevron.svg" alt="Left" id="affiliatesLeft">
			<img src="images/chevron.svg" alt="Right" id="affiliatesRight">
		</div>
	</div>
</div>




<!--end affiliates-->
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
<script src="js/index.js"></script>
    
<?php
	include("layout/footer.php");
?>