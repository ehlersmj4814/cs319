
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--The form has been processed.-->
		<?php
			$first_name = $_REQUEST["firstName"];
			$last_name = $_REQUEST["lastName"];
			echo $first_name." ".$last_name;
		?>
	</body>
</html>
	