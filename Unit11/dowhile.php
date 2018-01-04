<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Do While Loop</title>
		<meta charset="utf-8">
	</head>
	<body>
		<ul>
			<?php
				$counter = 1;
				do {
			?>
				<li> <?php echo $counter; ?> </li>
			<?php
					$counter++;
				}
				while ($counter <= 10);
			?>
		</ul>
	</body>
</html>