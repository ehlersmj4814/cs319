<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Boats | Alexamara Marina</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Alexamara Marina</h1>
    <h2>Boats</h2>
		<?php
			if($_SESSION["authenticated"] == 1){
				$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				$boatsQuery = "SELECT boat_name, boat_type, length, slip_num, owner_num FROM alexamara_marina_slip";
				$boats = $database->query($boatsQuery)->fetchAll();
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
						<th>Boat Name</th>
						<th>Boat Type</th>
						<th>Boat Length</th>
						<th>Slip Number</th>
						<th>Owner Number</th>
					</tr>
        <?php 
				foreach ($boats as $boat){
		?>
					<tr>
						<td><?php echo $boat["boat_name"]; ?></td>
						<td><?php echo $boat["boat_type"]; ?></td>
						<td><?php echo $boat["length"]; ?></td>
						<td><?php echo $boat["slip_num"]; ?></td>
						<td><?php echo $boat["owner_num"]; ?></td>
					</tr>
		<?php
				}
		?>
        </table>
        <p>There are currently <?php echo count($boats); ?> boats in the marina.</p>
		
		<?php
			}else{
		?>
				Please <a href="index.php">login</a>.
		<?php
			}
		?>
  </body>
</html>
