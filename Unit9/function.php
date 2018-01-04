<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Function</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			function greet(){
				echo "Hello";
				
			}
			
			function greet2(){
				return "Hello";
			}
			
			function greet3($first_name="Unknown", $last_name="Person"){
				return "Hello, ".$first_name." ".$last_name."!";
			}
			greet();
			echo greet2();
			echo greet3("Matt", "Ehlers");
		?>
	</body>
</html>