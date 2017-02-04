<?php
$strPageTitle = 'Contact';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>contact</h1>
			</div>
		</div>
	</div>
	
	<div id="mapArea" style="-webkit-filter: grayscale(100%); filter: grayscale(100%);"><!--Open Google Map--> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45535.884652499204!2d-81.39708861825422!3d44.49481452499338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8829cfbc0ee0d0c9%3A0x9f95e0d6cd37c1e4!2sSouthampton%2C+ON!5e0!3m2!1sen!2sca!4v1486230075370" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!--Close Google Map-->
    
    <div id="contactGeneralWrapper"><!--Open General Info--> 
	    <div class="row">
		    <div class="small-12 columns" id="contactGeneral">
			    <p>86 Saugeen St. Southampton, Ontario Canada   -  N0H 2L0</p>
			    <p>Call: <span>519-797-5862</span> Toll Free: <span>1-866-797-5862 </span></p>
			    <p>Mailing Address: <span>Marine Heritage Society - Box 421 Southampton, Ontario Canada  -  N0H 2L0</span></p>
			    <h1><a href="#formWrapper">SEND US A MESSAGE</a></h1>
		    </div>
	    </div>
    </div><!--Close General Info-->
    
    <div id="formWrapper">
	    <div class="row">
		    <div class="small-12 medium-6 columns">
			    <div id="formCon">
				    <form action="" method="post">
						
						<label>Your name:</label>
						<input id="inputName" name="name" type="text">
						
						<label>Your email:</label>
						<input id="inputEmailAddress" name="email" type="email">
						
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
    
    
    
<?php
	include("layout/footer.php");
?>