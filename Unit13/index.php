<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP and Databases</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>PHP and Databases</h2>
	<?php
	$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8","SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$sqlQuery = "SELECT prod_id, prod_desc, prod_cost FROM candy_product";
	//echo $sqlQuery;
	$products = $database->query(sqlQuery)->fetchAll();
	//echo $products[0]["prod_desc"];
	//$currentProduct = $products[0];
	//echo $currentProduct["prod_id"]."<br>";
	//echo $currentProduct["prod_desc"]."<br>";
	//echo $currentProduct["prod_cost"];
	?>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Description</th>
			<th>Cost</th>
		</tr>
	<?php
		$index=0;
		while ($index < count($products)){
			$currentProduct = $products[$index];
	?>
			<tr>
				<td><?php echo $currentProduct["prod_id"]; ?></td>
				<td><?php echo $currentProduct["prod_desc"]; ?></td>
				<td><?php echo $currentProduct["prod_cost"]; ?></td>
			</tr>
	<?php	
			$index++;
		}
	?>
	</table>
	<p>$nbsp;</p>
	<p>$nbsp;</p>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Description</th>
			<th>Cost</th>
		</tr>
	<?php 
		foreach ($products as $product){
	?>
		<tr>
			<td><?php echo $product["prod_id"]; ?></td>
			<td><?php echo $product["prod_desc"]; ?></td>
			<td><?php echo $product["prod_cost"]; ?></td>
		</tr>
	<?php
		}
	?>
	</table>
  </body>
</html>
