<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Temperature Convertion Table</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Temperature Conversion Table</h1>
		<?php
			$temp_start = $_REQUEST["startTemp"];
			$temp_end = $_REQUEST["endTemp"];
		?>
		<table border="1">
			<tr>
				<th>&degF</th>
				<th>&degC</th>
				<th>K</th>
			</tr>
			<?php
				$fahrenheit = $temp_start;
				while ($fahrenheit <= $temp_end){
					$celcius = (($fahrenheit-32)*5/9);
					$kelvins = (($fahrenheit+459.67)*5/9);
			?>
			<tr>
				<td><?php echo $fahrenheit; ?></td>
				<td><?php echo round($celcius); ?></td>
				<td><?php echo round($kelvins); ?></td>
			</tr>
			<?php
					$fahrenheit = $fahrenheit+5;
				}
			?>
		</table>
	</body>
</html>