<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_bookInfo = "tbl_bookInfo";
	$getBookInfo = getAll($tbl_bookInfo);

	$tbl_rates = "tbl_rates";
	$getRates = getAll($tbl_rates);

	$tbl_hours = "tbl_hours";
	$getHours = getAll($tbl_hours);

	$tbl_arrive = "tbl_arrive";
	$getArrive = getAll($tbl_arrive);
	
?>

<?php
$strPageTitle = 'Booking';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->
 <h1 class="hide">Booking</h1>       
    
    
<!--start bookingHeaderCon-->
<div id="bookingHeaderImg">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="heading whiteTxt">booking &amp; <br>schedule</h2>
		</div>
	</div>
</div>
<div id="bookingHeaderInfo">
	<div class="row">
		<div id="bookingHeaderPhone" class="small-12 columns">
			<h3><span>Call:</span> <a href="tel:519-797-5862" id="bookingPhone">519-797-5862</a></h3>
			<h3><span>Toll Free:</span> <a href="tel:1-866-797-5862" id="bookingPhone">1-866-797-5862</a></h3>
			<div id="emailButCon">
				<a id="emailBut" href="contact.php">Book Now</a>
			</div>
		</div>
	</div>
</div>
<!--end bookingHeaderCon-->

<!--start generalBookingInfo-->
<div class="row" id="generalBookingInfo">
	<div class="small-12 medium-8 columns">
		<h2 class="heading">General Booking Information</h2>

		<?php

			if(!is_string($getBookInfo)){
				while($row = mysqli_fetch_array($getBookInfo)){
					echo "<p class=\"paragraph\">{$row['bookInfo_desc']}</p>";
				}
			}else{
				echo "<p>{$getBookInfo}</p>";
			}

		?>

	</div>

	<div class="small-12 medium-4 columns" id="bookingRates">
	<h3 class="heading">Rates</h3>
		<div id="ratesInfo">
				<?php

					if(!is_string($getRates)){
						while($row = mysqli_fetch_array($getRates)){
							echo "<ul>";
							echo "<li>&#36;{$row['rates_info']} per person (includes HST)</li>";
							echo "<li>Children &amp; adults same price</li>";
							echo "<li>Special group rates are available</li>";
							echo "<li>MasterCard, Visa and Debit accepted</li>";
							echo "</ul>";
						}
					}else{
						echo "<p>{$getRates}</p>";
					}

				?>
		</div>			
	</div>
</div>
<!--end generalBookingInfo-->







<!--start schedule-->
<div class="row" data-equalizer>
	
	<?php

		if(!is_string($getHours)){
			while($row = mysqli_fetch_array($getHours)){
				echo "<div class=\"monthCardCon small-12 medium-6 large-4 columns end\">";
				echo "<div class=\"monthCard\" data-equalizer-watch>";
				echo "<h2 class=\"heading whiteTxt\">{$row['hours_month']}</h2>";
				echo "<h3>Tours</h3>";
				echo "<p>{$row['hours_tours_1']}</p>";
				echo "<p>{$row['hours_tours_2']}</p>";
				echo "<h3>Tour Base &amp; Gift Shop </h3>";
				echo "<p>{$row['hours_shop_1']}</p>";
				echo "<p>{$row['hours_shop_2']}</p>";
				echo "</div>";
				echo "</div>";
			}
		}else{
			echo "<p>{$getHours}</p>";
		}

	?>

</div>
<!--end schedule-->









<!--start whereAndWhen-->
<div id="whereAndWhenFull">
	<div class="row" id="whereAndWhen">
		<h2 class="heading whiteTxt">where and when to arrive</h2>
		<?php

			if(!is_string($getArrive)){
				while($row = mysqli_fetch_array($getArrive)){
					echo "<p class=\"paragraph whiteTxt\">{$row['arrive_desc']}</p>";
				}
			}else{
				echo "<p>{$getArrive}</p>";
			}

		?>
	</div>
</div>
<!--end whereAndWhen-->

<!--start bookingFinalDetails-->
<div class="row" id="finalBookingDetails">
	<div class="small-11 small-centered medium-uncentered medium-5 columns" id="pleaseNote">
	<h3 class="heading whiteTxt">PLEASE NOTE</h3>
		<p class="paragraph whiteTxt">The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.</p>
		<p class="paragraph whiteTxt">For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult.</p>
		<p class="paragraph whiteTxt">Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.</p>		
	</div>
	<div class="small-12 medium-7 columns" id="finePrint">
		<h2 class="heading">the fine print</h2>
		<ul>
			<li><span class="blackTxt">The 2 hour tour must be pre-booked and prepaid</span></li>
			<li><span class="blackTxt">There are 9 seats on the boat</span></li>
			<li><span class="blackTxt">For refunds, cancellations must be received 24 hours before the scheduled departure</span></li>
			<li><span class="blackTxt">Chantry Island is a Federal Migratory Bird Sanctuary and no pets are allowed on the island</span></li>
			<li><span class="blackTxt">Cancellation can be caused by weather conditions but light rain is fine</span></li>
		</ul>
	</div>
</div>
<!--end bookingFinalDetails-->


    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>