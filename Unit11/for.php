<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>For Loop</title>
		<meta charset="utf-8">
	</head>
	<body>
		<ul>
		<?php
			for ($counter = 1; $counter <= 10; $counter++) {
				?>
				<li><?php echo $counter; ?></li>
				<?php
			}
		?>
		</ul>
	</body>
</html>