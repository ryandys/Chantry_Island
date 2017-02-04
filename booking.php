<?php
$strPageTitle = 'Booking';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
<!--start bookingHeaderCon-->
<div id="bookingHeaderImg">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="heading whiteTxt">booking &amp;<br>schedule</h2>
		</div>
	</div>
</div>
<div id="bookingHeaderInfo">
	<div class="row">
		<div id="bookingHeaderPhone" class="small-12 columns">
			<h3><span>Call:</span> <a href="tel:519-797-5862" id="bookingPhone">519-797-5862</a></h3>
			<h3><span>Toll Free:</span> <a href="tel:1-866-797-5862" id="bookingPhone">1-866-797-5862</a></h3>
			<div id="emailButCon">
				<a id="emailBut" href="contact.php">Email Us</a>
			</div>
		</div>
	</div>
</div>
<!--end bookingHeaderCon-->

<!--start generalBookingInfo-->
<div class="row" id="generalBookingInfo">
	<div class="small-12 medium-8 columns">
		<h2 class="heading">General Booking Information</h2>
		<p class="paragraph">We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis.</p>
		<p class="paragraph">Since the Chantry Island is also Federal Bird Sanctuary we are only able to bring 12 persons per tour. Therefore, call ahead to ensure your place on the boat.</p>
	</div>

	<div class="small-12 medium-4 columns" id="bookingRates">
	<h3 class="heading">Rates</h3>
		<div id="ratesInfo">
			<ul>
				<li>$30.00 per person (includes HST)</li>
				<li>Children &amp; adults same price</li>
				<li>Special group rates are available</li>
				<li>MasterCard, Visa and Debit accepted</li>
			</ul>
		</div>			
	</div>
</div>
<!--end generalBookingInfo-->

<!--start schedule-->
<div class="row">
	<div class="small-12 columns" id="schedule">
		<h2 class="heading whiteTxt">SCHEDULE WILL GO HERE</h2>
	</div>
</div>
<!--end schedule-->

<!--start whereAndWhen-->
<div id="whereAndWhenFull">
	<div class="row" id="whereAndWhen">
		<h2 class="heading whiteTxt">where and when to arrive</h2>
		<p class="paragraph whiteTxt">Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (<a href="contact.php">see map</a>) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.</p>
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
			<li><span class="blackTxt">There are 9 seats on the boat. The cost is $30.00 per person (includes HST)</span></li>
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