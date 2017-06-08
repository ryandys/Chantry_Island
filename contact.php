<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

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


	<div id="mapArea" style="-webkit-filter: grayscale(100%); filter: grayscale(100%);">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.7405495482944!2d-81.3753064845686!3d44.49998277910138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8829cfb09f75c9ab%3A0x8619c0486fc4016c!2s86+Saugeen+St%2C+Southampton%2C+ON+N0H+2L0!5e0!3m2!1sen!2sca!4v1496934705181" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    

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
							<option value="General Inquiry">General Inquiry</option>
  							<option value="Booking">Booking</option>
  							<option value="Feedback">Feedback</option>
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