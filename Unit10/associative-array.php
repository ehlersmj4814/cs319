<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Associative Arrays</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$car1 = array("make" => "GMC", "model" => "Denali", "year" => "2017");
			$car2 = array("make" => "Dodge", "model" => "Intrepid", "year" => "2000");
			$car3 = array("make" => "Buick", "model" => "LaCross", "year" => "2016");
			$car4 = array("make" => "Ford", "model" => "Mustang", "year" => "1969");
			$car5 = array("make" => "Ford", "model" => "F100", "year" => "1955");
			$cars = array($car1, $car2, $car3, $car4, $car5);
		?>
		<table border="1">
			<tr>
				<th>Make</th>
				<th>Model</th>
				<th>Year</th>
			</tr>
			<?php
				$index = 0;
				while ($index < count($cars)){
					$currentCar = $cars[$index];
			?>
			<tr>
				<td><?php echo $currentCar["make"]; ?></td>
				<td><?php echo $currentCar["model"]; ?></td>
				<td><?php echo $currentCar["year"]; ?></td>
			</tr>
			<?php
					index++;
				}
			?>
		</table>
	</body>
</html>