<?php
	
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors',1);
    //error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {
		$mainImg = $_FILES['news_thumb']['name'];
		//echo $fimg;
		$title = $_POST['news_title'];
		$date = $_POST['news_date'];
		$content = $_POST['news_content'];
		
		$uploadNews = addNews($title,$date,$mainImg,$content);
		
		$message = $uploadNews;
	}

?>

<?php
$strPageTitle = 'Add News Story';
include_once("layout/header_innerPages.php");
?>

    <!--START BODY CONTENT HERE-->
    
    
    <h1 class="hide">Add News</h1>
    
    <section id="addEditUserWrapper">
		<h1 class="hide">Add News Story</h1>

	    <div class="row">
			
			<?php
			include("layout/sideNav.php");
			?>

			<div class="small-12 medium-7 columns">

			<p>Recomended Image Dimensions: 700px x 450px</p>

		    <?php if(!empty($message)){echo $message;} ?>
			<form action="admin_addNews.php" method="post" enctype="multipart/form-data">
				
				<label>News Image:</label>
				<input type="file" name="news_thumb" value="" size="32">
				
				<label>Title:</label>
				<input class="inputAddEdit" type="text" name="news_title" value="" size="32">

				<label>Date:</label>
				<input class="inputAddEdit" type="text" name="news_date" value="" size="32">

				<label>News Content:</label>
				<input class="inputAddEdit inputTaller" type="text" name="news_content" value="" size="32">

				<input type="submit" name="submit" value="Add" id="addEditSubmit">
			</form>

			</div>		
		</div>
		</section>


	<!--CLOSE BODY CONTENT HERE-->
 
    
<?php
	include("layout/footer.php");
?>