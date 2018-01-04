<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Slip Owners | Alexamara Marina</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Alexamara Marina</h1>
		<h2>Slip Owners</h2>
		<?php
			if($_SESSION["authenticated"] == 1){
				$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				$ownersQuery = "SELECT owner_num, first_name, last_name, address, city, state, zip FROM alexamara_owner";
				$owners = $database->query($ownersQuery)->fetchAll();
		?>
				<hr>
				<p> <a href="dashboard.php">Dashboard</a> | 
				<a href="owners.php">Slip Owners</a> |
				<a href="boats.php">Boats</a> |
				<a href="calculator.php">Slip Calculator</a> |
				<a href="logout.php">Logout</a>
				<hr>
				<table border="1">
					<tr>
						<th>Owner Number</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>ZIP Code</th>
					</tr>
		<?php 
				foreach ($owners as $owner){
		?>
					<tr>
						<td><?php echo $owner["owner_num"]; ?></td>
						<td><?php echo $owner["first_name"]; ?></td>
						<td><?php echo $owner["last_name"]; ?></td>
						<td><?php echo $owner["address"]; ?></td>
						<td><?php echo $owner["city"]; ?></td>
						<td><?php echo $owner["state"]; ?></td>
						<td><?php echo $owner["zip"]; ?></td>
					</tr>
		<?php
				}
		?>
				</table>
				There are currently <?php echo count($owners); ?> slip owners.
		<?php
				}else{
		?>
					Please <a href="index.php">login</a>.
		<?php
				}
		?>
	</body>
</html>