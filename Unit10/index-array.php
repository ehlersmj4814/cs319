<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index Arrays</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$colors = array("Red","Orange","Yellow","Green","Blue","Indigo","Violet");
			array_push($colors, "Purple");
			$index = 0;
			while ($index < count($colors)){
				echo "<p>".$colors[$index]."</p>";
				$index++;
			}
		?>
	</body>
</html>