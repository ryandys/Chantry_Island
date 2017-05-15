<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	//form1 = off canvas
	//form2 = footer
	//form3 = contact page

	if(isset($_POST['send1'])) {
		$name1 = $_POST['name1'];
		$email1 = $_POST['email1'];
		$subject1 = ($_POST['subject1']);
		$message1 = $_POST['msg1'];
		$phone1 = $_POST['phone1'];
		$direct1 = "success.php";
		$add1 = $_POST['address1'];
		if(empty($add1)) {
			sendMessage1($name1, $email1, $phone1, $subject1, $message1, $direct1);
		}else{
			redirect_to("404.shtml");
		}
	}

	if(isset($_POST['send2'])) {
		$name2 = $_POST['name2'];
		$email2 = $_POST['email2'];
		$subject2 = ($_POST['subject2']);
		$message2 = $_POST['msg2'];
		$phone2 = $_POST['phone2'];
		$direct2 = "success.php";
		$add2 = $_POST['address2'];
		if(empty($add2)) {
			sendMessage2($name2, $email2, $phone2, $subject2, $message2, $direct2);
		}else{
			redirect_to("404.shtml");
		}
	}

	if(isset($_POST['send3'])) {
		$name3 = $_POST['name3'];
		$email3 = $_POST['email3'];
		$subject3 = ($_POST['subject3']);
		$message3 = $_POST['msg3'];
		$phone3 = $_POST['phone3'];
		$direct3 = "success.php";
		$add3 = $_POST['address3'];
		if(empty($add3)) {
			sendMessage3($name3, $email3, $phone3, $subject3, $message3, $direct3);
		}else{
			redirect_to("404.shtml");
		}
	}
	
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Marine Heritage Society - Chantry Island">
    <meta property="og:image" content="images/facebook_photo.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:url" content="http://www.chantryisland.com/">
    <meta property="og:description" content="Chantry Island is a Federal Bird Sanctuary that is home to a fully restored 1800s Imperial Lighthouse and Keeper's Cottage. Come out to breathtaking Southampton Ontario and experience the beauty today!">
    <title>Chantry Island | <?=$strPageTitle?> </title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
  </head>
  <body class="body-<?=strtolower(str_replace(' ', '-', $strPageTitle))?>">
	

  	<!-- start off canvas -->
	<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>

        <!-- Close button -->
        <button id="closeButtonColor" class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>

        <!-- Menu -->
        <div id="sideBarWhite">
        
        <div id="offCanvText">
        <h2>Contact Us</h2>
	        <p><span>Call: </span><a href="tel:519-797-5862">519-797-5862</a></p>
	        <p><span>toll free: </span><a href="tel:1-866-797-5862">1-866-797-5862</a></p>
	        <p><span>mailing address:</span></p>
	        <p>Marine Heritage Society</p>
	        <p>86 Saugeen St.</p>
	        <p>Southampton, Ontario</p>
	        <p>Canada, NOH 2L0</p>
        </div>
        </div>

        <div id="offCanvFormCon">

        	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						
				<div class="small-12 columns">
				<label>Email:</label>
				<input class="sideInput" name="email1" type="email" required>
				</div>

				<div class="small-12 columns">
				<label>Phone number:</label>
				<input class="sideInput" name="phone1" type="text">
				</div>

				<div class="small-12 columns">
				<label>Name:</label>
				<input class="sideInput" name="name1" type="text" required>
				</div>

				<div class="small-12 columns">
				<label>Subject:</label>
				<select class="sideInput" name="subject1">
					<option value="General Inquiry">General Inquiry</option>
					<option value="Booking">Booking</option>
					<option value="Feedback">Feedback</option>
				</select>
				</div>
				
				<input class="address" name="address1" type="text">
				
				<div class="small-12 columns">
				<label>Message:</label>
				<textarea id="sideMsg" class="sideInput" name="msg1" required></textarea>
				</div>
				
				<div class="small-12 columns">
				<input id="sideSubmit" type="submit" name="send1" value="send">
				</div>
						
			</form>

        </div>

       </div>

    </div>

    <div class="off-canvas-content" data-off-canvas-content>
	<!-- close off canvas -->

	
	<!--START HEADER CONTENT HERE-->
	
	<div id="topNavBar">
		<div class="row expanded">
			<div class="small-9 medium-6 columns">
				<img data-interchange="[images/phoneIcon.png, small], [images/phoneIcon.svg, retina]" alt="phone icon" id="topNavBarPhone">
				<h3><a href="tel:519-797-5862">519-797-5862</a> <span> TOLL FREE: 1-866-797-5862</span></h3>
			</div>
			
			<div class="small-3 medium-6 columns">
				<a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA" target="blank"><img data-interchange="[images/socIcon_YouTube.png, small], [images/socIcon_YouTube.svg, retina]" alt="social media icon" class="topNavBarSocIcon"></a>
				<a href="https://www.facebook.com/MarineHeritageSociety/" target="blank"><img data-interchange="[images/socIcon_Facebook.png, small], [images/socIcon_Facebook.svg, retina]" alt="social media icon" class="topNavBarSocIcon"></a>
			</div>
		</div>
	</div>
	
	
	
	<!-- Open mainHeader -->
	<div id="headerWrapper">
	<header id="mainHeader" class="row collapse">
	  	<div class="hide-for-small-only medium-4 large-3 columns">
		  	<div id="skewCon">
		  	<a href="index.php"><img data-interchange="[images/chantry_island_header.png, small], [images/chantry_island_header.svg, retina]" alt="logo" id="headerLogo"></a>
		  	</div>
	  	</div>
	  	
	  	<nav class="medium-8 large-9 columns">
		  	<h2 class="hide">Main Navigation</h2>
		  	
		  	<div id="smallContactIconCon">
			  	<img data-toggle="offCanvas" data-interchange="[images/contact.png, small], [images/contact.svg, retina]" alt="contact icon" id="smallContactIcon">
		  	</div>

		  	<div class="title-bar" data-responsive-toggle="expanded-menu" data-hide-for="medium">
			  	<button class="menu-icon float-right" type="button" data-toggle></button>
		  	</div>
		  	
		  	<div>
			  	<ul id="mainNavAdditionlLinks">
				  	<li><a href="volunteers.php">volunteers</a></li>
					<li><a href="donate.php">donate</a></li>
					<li><a href="contact.php">contact</a></li>
			  	</ul>
		  	</div>
		  	
		  	<div id="expanded-menu" data-magellan>
			  	<div id="hamburgLogoCon">
				  	<a href="index.php"><img data-interchange="[images/chantry_island_header.png, small], [images/chantry_island_header.svg, retina]" alt="logo" id="hamburgLogo"></a>
			  	</div>
			  	
			  	<ul id="mobileNav">
				  	<li><a href="index.php">home</a></li>
				  	<li><a href="news.php">news</a></li>
				  	<li><a href="about.php">about</a></li>
				  	<li><a href="events.php">events</a></li>
				  	<li><a href="booking.php">booking</a></li>
				  	<li><a href="gallery.php">gallery</a></li>
			  	</ul>
			  	
			  	<ul id="extraHamburgLinks">
					<li><a href="volunteers.php">volunteers</a></li>
					<li><a href="donate.php">donate</a></li>
					<li><a href="contact.php">contact</a></li>
				</ul>
		  	</div>
		  	
	  	</nav>
  	</header>
	</div>
	<!-- Close mainHeader -->


	<!-- Open Social Icons Side -->

	<div id="sideSocIconsCon">
	<a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA" target="blank"><img data-interchange="[images/sideSocIcons_y.png, small], [images/sideSocIcons_y.svg, retina]" alt="social media icon" class="sideSocIcons"></a>
	
	<a href="https://www.facebook.com/MarineHeritageSociety/" target="blank"><img data-interchange="[images/sideSocIcons_f.png, small], [images/sideSocIcons_f.svg, retina]" alt="social media icon" class="sideSocIcons"></a>
	</div>

	<!-- Close Social Icons Side -->
  	
	
	<!--CLOSE HEADER CONTENT HERE-->