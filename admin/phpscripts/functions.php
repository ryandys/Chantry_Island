<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}


	function sendUserMessage($name, $email, $password) {
		$to = $email;
		$subj = "Chantry Island Admin Login Info";
		$extra = "Do not reply to this email.\n\nPlease login to your account at: someURL.com/admin/admin_login.php\n\nPlease login and change your temporary password.";
		$body = "Name: {$name}\n\nTemporary password: {$password}\n\n";
		//echo $body;
		//This will not work on MAMP...
		mail($to, $subj, $body, $extra);
		//.............................
	}


	function addNews($title,$date,$mainImg,$content) {
		include('connect.php');
		$mainImg = mysqli_real_escape_string($link,$mainImg);
		
		if($_FILES['news_thumb']['type'] == "image/jpg" || $_FILES['news_thumb']['type'] == "image/jpeg") {
			
			$targetpath = "../images/uploads/{$mainImg}";
			
			if(move_uploaded_file($_FILES['news_thumb']['tmp_name'],$targetpath)) {
				
				$orig = "../images/uploads/".$mainImg;
				
				$qstring = "INSERT INTO tbl_news VALUES(NULL,'{$title}','{$date}','{$mainImg}','{$content}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				redirect_to("admin_success.php");
			}
		}
		
		mysqli_close($link);
	}


	function addEvent($title,$date,$content) {
		include('connect.php');

			$qstring = "INSERT INTO tbl_events VALUES(NULL,'{$title}','{$date}','{$content}')";
			//echo $qstring;
			$result = mysqli_query($link,$qstring);
			
			if($result) {	
				redirect_to("admin_success.php");
			}else{
				$message = "Sorry, unable to add an event";
				echo $message;
			}
		
		mysqli_close($link);
	}


	function addImage($mainImg,$desc) {
		include('connect.php');
		$mainImg = mysqli_real_escape_string($link,$mainImg);
		
		if($_FILES['gallery_img']['type'] == "image/jpg" || $_FILES['gallery_img']['type'] == "image/jpeg") {
			
			$targetpath = "../images/uploads/{$mainImg}";
			
			if(move_uploaded_file($_FILES['gallery_img']['tmp_name'],$targetpath)) {
				
				$orig = "../images/uploads/".$mainImg;
				
				$qstring = "INSERT INTO tbl_gallery VALUES(NULL,'{$mainImg}','{$desc}')";
				//echo $qstring;
				$result = mysqli_query($link,$qstring);
				
				redirect_to("admin_success.php");
			}
		}
		
		mysqli_close($link);
	}
	
?>