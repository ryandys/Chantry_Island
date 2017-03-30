<?php
	require_once('init.php');

	if(isset($_GET['caller_id'])){
		$dir = $_GET['caller_id'];
		//echo $dir;
		if($dir == "logout"){
			logged_out();
		}else if($dir == "deleteUsers"){
			
			$id = $_GET['id'];
			deleteUsers($id);
		}else if($dir == "deleteNews"){
			
			$id = $_GET['id'];
			deleteNews($id);
		}else if($dir == "deleteEvent"){
			
			$id = $_GET['id'];
			deleteEvent($id);
		}else if($dir == "deleteImage"){
			
			$id = $_GET['id'];
			deleteImage($id);
		}else if($dir == "deleteVol"){
			
			$id = $_GET['id'];
			deleteVol($id);
		}
	}
?>