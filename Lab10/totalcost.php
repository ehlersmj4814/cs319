<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Total Cost</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table border="1">
			<?php 
				$unit123 = array("itemNo" => 123, "units" => 3, "unitCost" => 3.25);
				$unit456 = array("itemNo" => 456, "units" => 2, "unitCost" => 4.54);
				$unit789 = array("itemNo" => 789, "units" => 4, "unitCost" => 2.88);
				$unit159 = array("itemNo" => 159, "units" => 1, "unitCost" => 5.93);
				$items = array($unit123, $unit456, $unit789, $unit159);
			?>
			<tr>
				<th>Item No.</th>
				<th># of Units</th>
				<th>Cost Per Unit</th>
				<th>Total Cost</th>
			</tr>
			<?php
				$index = 0;
				while ($index < count($items)){
					$currentItem = $items[$index];
			?>
			<tr>
				<td><?php echo $currentItem["itemNo"]; ?></td>
				<td><?php echo $currentItem["units"]; ?></td>
				<td>$<?php echo $currentItem["unitCost"]; ?></td>
				<?php $totalCost = $currentItem["units"]*$currentItem["unitCost"] ?>
				<td>$<?php echo $totalCost; ?></td>
			</tr>
			<?php
					$index++;
				}
			?>
		</table>
	</body>
</html>