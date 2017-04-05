<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	if(isset($_POST['name'])) {
		//echo $_POST['name'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['msg'];
		$direct = "#";
		$add = $_POST['address'];
		if(empty($add)) {
			sendMessage($name, $email, $message, $direct);
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
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <title>Chantry Island | <?=$strPageTitle?> </title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
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
        <div id="sideBarMenuItems">
	        <a href="index.php"><img data-interchange="[images/chantry_island_header.png, small], [images/chantry_island_header.svg, retina]" alt="logo" id="smallConMenuLogo"></a>
        </div>
        
        <div id="offCanvText">
	        <p><span>Call: </span><a href="tel:519-797-5862">519-797-5862</a></p>
	        <p><span>toll free: </span><a href="tel:1-866-797-5862">1-866-797-5862</a></p>
	        <p><span>mailing address:</span></p>
	        <p>Marine Heritage Society</p>
	        <p>Box 421</p>
	        <p>Southhampton, Ontario</p>
	        <p>Canada, NOH 2L0</p>
        </div>
        </div>

        <div id="offCanvFormCon">

        	<p id="offCanvFormTitle">TO: email@chantryisland.com</p>

        	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						
				<div class="small-12 columns">
				<label>Your name:</label>
				<input id="inputfName" name="name" type="text">
				</div>
						
				<div class="small-12 columns">
				<label>Your email:</label>
				<input id="inputEmail" name="email" type="email">
				</div>
						
				<label class="address">Address:</label>
				<input id="inputAddress" class="address" name="address" type="text">
						
				<div class="small-12 columns">
				<label>Your message:</label>
				<textarea name="msg"></textarea>
				</div>
						
				<div class="small-12 columns">
				<input id="submit" type="submit" value="submit">
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
				<h1><a href="tel:519-797-5862">519-797-5862</a> <span> TOLL FREE: 1-866-797-5862</span></h1>
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
		  	<h1 class="hide">Main Navigation</h1>
		  	
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