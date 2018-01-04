<!DOCTYPE html>
<html lang="en">
	<head>
		<title>While Loops</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$start = $_REQUEST["start"];
			$end = $_REQUEST["end"];
			//echo "<p>".$start."</p>";
			//echo "<p>".$end."</p>";
			//$counter = $start;
			//while ($counter <= $end){
			//	echo "<p>".$counter."</p>";
			//	$counter++;
			//}
			
		?>
		<table border="1">
		<?php
			$counter = $start;
			while ($counter <= $end){
		?>
		<tr><td><?php echo $counter;?></td></tr>
		<?php
				$counter++;
			}
		?>
		</table>
	</body>
</html>