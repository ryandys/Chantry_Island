<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
	
	function sendMessage($name, $email, $password) {
		$to = $email;
		$subj = "ourExpression Admin Login Info";
		$extra = "Do not reply to this email.\n\nPlease login to your account at: ourExpressionStudio.com/admin/admin_login.php\n\nPlease login and change your temporary password.";
		$body = "Name: {$name}\n\nTemporary password: {$password}\n\n";
		//echo $body;
		//This will not work on MAMP...
		mail($to, $subj, $body, $extra);
		//.............................
	}	
	
?>