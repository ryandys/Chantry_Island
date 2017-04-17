	<!--START FOOTER CONTENT HERE-->

	
	<div id="mainFooterWrapper">
		<footer id="mainFooter"><!--Open mainFooter-->
			<h1 class="hide">Main Footer</h1>
			
			<div class="row" data-equalizer>
				<div class="small-6 medium-2 columns" data-equalizer-watch>
					<ul>
						<h2>navigate</h2>
						<li><a href="index.php">home</a></li>
						<li><a href="news.php">news</a></li>
						<li><a href="about.php">about</a></li>
						<li><a href="events.php">events</a></li>
						<li><a href="booking.php">booking</a></li>
						<li><a href="gallery.php">gallery</a></li>
					</ul>
				</div>
				
				<div class="small-6 medium-2 columns" data-equalizer-watch>
					<ul>
						<h2>additional</h2>
						<li><a href="volunteers.php">volunteers</a></li>
						<li><a href="donate.php">donate</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
				</div>
				
				<div class="hide-for-small-only medium-3 columns" id="footerContactInfoBox" data-equalizer-watch>
					<h2>contact us</h2>
					<p><span>call: </span>519-797-5862</p>
					<p><span>toll free: </span>1-866-797-5862</p>
					<br>
					<p><span>mailing address:</span></p>
					<p>Marine Heritage Society</p>
					<p>86 Saugeen St.</p>
					<p>Southampton, Ontario</p>
					<p>Canada, N0H 2L0</p>
					<a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA" target="blank"><img data-interchange="[images/socIcon_YouTube_Dark.png, small], [images/socIcon_YouTube_Dark.svg, retina]" alt="social media icon" class="footerSocIcon"></a>
				<a href="https://www.facebook.com/MarineHeritageSociety/" target="blank"><img data-interchange="[images/socIcon_Facebook_Dark.png, small], [images/socIcon_Facebook_Dark.svg, retina]" alt="social media icon" class="footerSocIcon"></a>
				</div>
				
				<div class="hide-for-small-only medium-5 columns" data-equalizer-watch>	
										
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						
						<div class="small-12 large-6 columns">
						<label>Email:</label>
						<input class="footerInput" id="inputEmail" name="email" type="email" required>
						</div>

						<div class="small-12 large-6 columns">
						<label>Phone number:</label>
						<input class="footerInput" id="inputPhone" name="phone" type="text">
						</div>

						<div class="small-12 columns">
						<label>Name:</label>
						<input class="footerInput" id="inputName" name="name" type="text" required>
						</div>

						<div class="small-12 columns">
						<label>Subject:</label>
						<select class="footerInput" id="inputSubject" name="subject">
							<option value="inquiry">General Inquiry</option>
  							<option value="booking">Booking</option>
  							<option value="feedback">Feedback</option>
						</select>
						</div>
						
						<input id="inputAddress" class="address" name="address" type="text">
						
						<div class="small-12 columns">
						<label>Message:</label>
						<textarea id="footerMsg" class="footerInput" name="msg" required></textarea>
						</div>
						
						<div class="small-12 columns">
						<input id="footerSubmit" type="submit" name="send" value="send to email@chantryisland.com">
						</div>
						
					</form>
				</div>
			</div>
			
		</footer><!--Close mainFooter-->
	</div>
	
	<div id="lowerFooterWrapper">
		<div class="row expanded">
			<div class="small-12 medium-6 columns">
				<p id="lowerFooterLeft">Copyright &copy; Marine Heritage Society 2017</p>
			</div>
			
			<div class="small-12 medium-6 columns">
				<img data-interchange="[images/lockIcon.png, small], [images/lockIcon.svg, retina]" alt="lock icon" id="footerLock">
				<p id="lowerFooterRight"><a href="admin/admin_login.php">administrator login</a></p>
			</div>
		</div>
	</div>
		
	
	<!--CLOSE FOOTER CONTENT HERE-->

	<!-- close off canvas (3 divs below) -->
      </div>
    </div>

	
	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script><?=$strScriptTitle?></script>
	  </body>
	</html>