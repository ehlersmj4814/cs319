<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>For Each Loop</title>
		<meta charset="utf-8">
	</head>
	<body>
		<ul>
			<?php
				$counter = array(1,2,3,4,5,6,7,8,9,10);
				foreach ($counter as $count){
			?>
					<li><?php echo $count ?></li>
			<?php
				}
			?>
		</ul>
	</body>
</html>