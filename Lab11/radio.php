<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Array to Radio Buttons</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="color" name="color" method="get" action="#">
			<?php
				$colors = array(red, orange, yellow, green, blue, indigo, violet);
				sort($colors);
				$counter = 0;
				do {
					?>
					<input type="radio" id="<?php echo $colors[$counter]; ?>" name="colorName"><?php echo $colors[$counter]; ?><br>
					<?php
					$counter ++;
				} while ($counter < count($colors));
			?>
		</form>
	</body>
</html>