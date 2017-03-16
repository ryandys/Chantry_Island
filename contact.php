<?php
$strPageTitle = 'Contact';
include_once("layout/header.php");
?>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
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
	    	<div class="small-12 medium-6 columns">
	    		<div class="formCon">
	    		<p class="geocode-header">Type an Address to Calculate Route</p>
				<input type="text" id="yourAddress">
				<button class="geocode">Calculate Route</button>
				</div>
	    	</div>

	    	<div class="small-12 medium-6 columns">
	    		<!-- directions for map will go here -->
	    	</div>
	    </div>

    </div><!--Close Map Options--> 
    

    <div id="contactGeneralWrapper"><!--Open General Info--> 
	    <div class="row">
		    <div class="small-12 columns" id="contactGeneral">
			    <p>86 Saugeen St. Southampton, Ontario Canada   -  N0H 2L0</p>
			    <p>Call: <span>519-797-5862</span> Toll Free: <span>1-866-797-5862 </span></p>
			    <p>Mailing Address: <span>Marine Heritage Society - Southampton, Ontario Canada  -  N0H 2L0</span></p>
			    <h1><a href="#formWrapper">SEND US A MESSAGE</a></h1>
		    </div>
	    </div>
    </div><!--Close General Info-->
    
    <div id="formWrapper">
	    <div class="row">
		    <div class="small-12 medium-6 columns">
			    <div class="formCon">
				    <p>TO: email@chantryisland.com</p>
				    <form action="" method="post">
						
						<label>Your name:</label>
						<input id="inputName" name="name" type="text">
						
						<label>Your email:</label>
						<input id="inputEmailAddress" name="email" type="email">
						
						<label>Email Subject:</label>
						<select id="inputSubject" name="subject">
							<option value="inquiry">General Inquiry</option>
  							<option value="booking">Booking</option>
  							<option value="feedback">Feedback</option>
  							<option value="info">Info Request</option>
						</select>
						
						<label class="address">Address:</label>
						<input id="inputHouseAddress" class="address" name="address" type="text">
						
						<label>Your message:</label>
						<textarea name="msg"></textarea>
						
						<input id="submitContact" type="submit" value="send">
						
					</form>
			    </div>
		    </div>
		    
		    <div class="small-12 medium-6 columns">
			    <h1>Directions</h1>
			    <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
		    </div>
	    </div>
    </div>
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    <script src="js/map.js"></script>
<?php
	include("layout/footer.php");
?>