<!DOCTYPE html>
<html lang="en">
	<head>
		<title>While Loop</title>
		<meta charset="utf-8">
	</head>
	<body>
		<ul>
			<?php
				$counter = 1;
				while($counter <= 10){
			?>
			<li><?php echo $counter; ?></li>
			<?php
					$counter++;
				}
			?>
		</ul>
	</body>
</html>