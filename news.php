<?php
	
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	require_once('admin/phpscripts/init.php');

	$tbl_news = "tbl_news";
	$getNews = getAll($tbl_news);
	
?>

<?php
$strPageTitle = 'News';
include_once("layout/header.php");
?>
    
    
    
    <!--START BODY CONTENT HERE-->         
    
    
	<div id="pageTitle">
		<div class="row expanded">
			<div class="small-12 columns">
				<h1>news</h1>
			</div>
		</div>
	</div>


		<?php

			if(!is_string($getNews)){
				while($row = mysqli_fetch_array($getNews)){
					echo "<div class=\"newsWrapper\">";
					echo "<div class=\"row\">";
						echo "<div class=\"small-12 medium-6 large-4 columns\">";
						echo "<img src=\"images/{$row['news_thumb']}\" alt=\"news thumb\">";
						echo "</div>";

						echo "<div class=\"small-12 medium-6 large-8 columns\">";
						echo "<h1>{$row['news_title']}</h1>";
						echo "<h2>{$row['news_date']}</h2>";
						echo "<p>{$row['news_content']}</p>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
				}
			}else{
				echo "<p>{$getNews}</p>";
			}

		?>


    <!--CLOSE BODY CONTENT HERE-->
    
    
    
<?php
	include("layout/footer.php");
?>