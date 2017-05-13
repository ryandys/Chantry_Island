<?php

	$strPageTitle = 'Donate';
	include_once("layout/header.php");
	
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>donate</h1>
			</div>
		</div>
	</div>

<!--start donateInfo-->
<div class="row" id="donateInfo">
	<div class="small-12 columns">
		<p>Since 1997 we have had a tremendous amount of support through donations.</p>
	</div>
</div>
<!--end donateInfo-->

<!--start donateCon-->
<div class="row">
	<div id="donateCon" class="small-10 small-centered large-6 large-uncentered columns">
		<p class="paragraph whiteTxt">If you would like to donate, please send a cheque or money order to:</p>
		<br>
		<div id="donateAddressCon">
			<p class="donateAddress">Marine Heritage Society</p>
			<p class="donateAddress">86 Saugeen St.</p>
			<p class="donateAddress">Southampton, Ontario</p>
			<p class="donateAddress">Canada, N0H 2L0</p>
		</div>
		<p class="paragraph whiteTxt">Please specify your donation preference: Chantry Island and/or new tour boat.</p>
	</div>

	<!--start donorCategories-->
	<div class="small-12 large-6 columns" id="donorCategories">
		<div class="small-12 small-centered columns donorCategoryBlack">
			<h2 class="whiteTxt">Donor Categories</h2>
		</div>
		<div class="small-12 small-centered columns donorCategoryWhite">
			<p><span>Shipmate</span>&emsp;&emsp;-&emsp;&emsp;$1 - 199</p>
		</div>
		<div class="small-12 small-centered columns donorCategoryGrey">
			<p><span>Lifesaving Crew</span>&emsp;&emsp;-&emsp;&emsp;$200 - 999</p>
		</div>
		<div class="small-12 small-centered columns donorCategoryWhite">
			<p><span>Assistant Lighthouse Crew</span>&emsp;&emsp;-&emsp;&emsp;$1,000 - 4,999</p>
		</div>
		<div class="small-12 small-centered columns donorCategoryGrey">
			<p><span>Lighthouse Keepers</span>&emsp;&emsp;-&emsp;&emsp;$5,000 - 9,999</p>
		</div>
		<div class="small-12 small-centered columns donorCategoryWhite">
			<p><span>Captain Lambert's Crew</span>&emsp;&emsp;-&emsp;&emsp;$10,000 - 25,000</p>
		</div>
		<div class="small-12 small-centered columns donorCategoryGrey">
			<p><span>Queen Victoria's Crew</span>&emsp;&emsp;-&emsp;&emsp;$25,000 plus</p>
		</div>
	</div>
</div>
<!--end donorCategories-->
    
    
    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>