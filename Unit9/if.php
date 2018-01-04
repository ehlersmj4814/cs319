<!DOCTYPE html>
<html lang="en">
	<head>
		<title>If  /  Elseif  /  Else</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$x = 15;
			$y = 10;
			
			if ($x < $y) {
				echo "<p>".$x." is less than ".$y."</p>";
			} elseif ($x > $y){
				echo "<p>".$x." is greater than ".$y."</p>";
			} else {
				echo "<p>Uh oh</p>";
			}
		?>
	</body>
</html>