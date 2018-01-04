<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Process Login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--The form has been processed.-->
		<?php
			$user_name = $_REQUEST["username"];
			$pass_word = $_REQUEST["password"];
			if ($user_name == "ehlersmj4814" && $pass_word == "test1"){
				echo "You have logged in successfully.";
			} else {
				echo "Invalid login.";
			}
		?>
	</body>
</html>