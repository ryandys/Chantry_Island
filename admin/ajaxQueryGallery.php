<?php
	include 'phpscripts/connect.php';

	$link->set_charset("utf8");

	// set some post stuff up here
	$imgNumber = $_GET["gallery_id"];	

	$myQuery = "SELECT * FROM tbl_gallery WHERE gallery_id = '$imgNumber'";
	$result = mysqli_query($link, $myQuery);
	$row = mysqli_fetch_assoc($result);	

	echo json_encode($row);
	//echo mysqli_num_rows($result);		
?>