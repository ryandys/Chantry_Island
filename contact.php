<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

<?php
$strPageTitle = 'Contact';
include_once("layout/header.php");
?>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjhOUr_37CzgsVIt0tYI-KyOV6FlsRAP4"></script>
    
    
    
    <!--START BODY CONTENT HERE-->     
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>contact</h1>
			</div>
		</div>
	</div>
	

	<div id="mapArea"><!--Open Google Map--> 

		<div class="preload-wrapper">
			<i class="fa fa-spinner fa-spin"></i>
			<span>Loading map, please wait...</span>
		</div>
		
		<div class="map-wrapper"></div>

    </div><!--Close Google Map-->


    <div id="mapOptionsArea"><!--Open Map Options--> 

	    <div class="row">
	    	<div class="small-12 medium-4 columns">
	    		<div class="formCon">
					<input type="text" id="yourAddress" placeholder="Your address">
					<button class="geocode">Get Directions</button>
				</div>
	    	</div>

	    	<div class="small-12 medium-8 columns" id="directionsPanel">
	    	</div>
	    </div>

    </div><!--Close Map Options--> 
    

    <div id="contactGeneralWrapper"><!--Open General Info--> 
	    <div class="row">
		    <div class="small-12 columns" id="contactGeneral">
			    <p>Mailing Address: <span>Marine Heritage Society, 86 Saugeen St., Southampton, Ontario, Canada N0H 2L0</span></p>
			    <p>Call: <span>519-797-5862</span> Toll Free: <span>1-866-797-5862 </span></p>
		    </div>
	    </div>
    </div><!--Close General Info-->
    
    <div id="formWrapper">
	    <div class="row">
		    <div class="small-12 medium-6 columns">
			    <div class="formCon">
				   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						
						<label>Name:</label>
						<input class="contactInput" name="name3" type="text" required>
						
						<label>Email:</label>
						<input class="contactInput" name="email3" type="email" required>

						<label>Phone number:</label>
						<input class="contactInput" name="phone3" type="text">
						
						<label>Subject:</label>
						<select class="contactInput" name="subject3">
							<option value="inquiry">General Inquiry</option>
  							<option value="booking">Booking</option>
  							<option value="feedback">Feedback</option>
						</select>
						
						<input class="address" name="address3" type="text">
						
						<label>Message:</label>
						<textarea class="contactInput" name="msg3" id="contactMsg" required></textarea>
						
						<input class="submitContact" name="send3" type="submit" value="send">
						
					</form>
			    </div>
		    </div>
		    
		    <div class="small-12 medium-6 columns">
			    <h2>Directions</h2>
			    <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
		    </div>
	    </div>
    </div>
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    <script src="js/map.js"></script>
<?php
	include("layout/footer.php");
?>