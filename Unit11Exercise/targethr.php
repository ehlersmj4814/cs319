<?php set_time_limit(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Target Heart Rate</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1> Target Heart Rates Calculator</h1>
		<?php
			$heart_rate = $_REQUEST["heartRate"];
			$age = $_REQUEST["age"];
		?>
		<p>For a <?php echo $age; ?> year old person with a resting heart rate of <?php echo $heart_rate; ?>:</p>
		<table border="1">
			<tr>
				<th>Intensity</th>
				<th>Target Heart Rate</th>
			</tr>
			<?php
				for ($intensity = 0.55; $intensity <= 0.95; $intensity = $intensity+0.05) {
				$target = (((220-$age)-$heart_rate)*$intensity) + $heart_rate;
			?>
			<tr>
				<td><?php echo ($intensity*100); ?>%</td>
				<td><?php echo round($target); ?> bpm</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>