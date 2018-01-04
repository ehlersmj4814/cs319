<?php
	session_start();
	$length = $_REQUEST["length"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Slip Calculator | Alexamara Marina</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Alexamara Marina</h1>
    <h2>Slip Calculator</h2>
       <?php
			if($_SESSION["authenticated"] == 1){
		?>
				<hr>
				<p> <a href="dashboard.php">Dashboard</a> | 
				<a href="owners.php">Slip Owners</a> |
				<a href="boats.php">Boats</a> |
				<a href="calculator.php">Slip Calculator</a> |
				<a href="logout.php">Logout</a>
				<hr>
        <p>A slip for a <?php echo $length; ?> foot long boat is priced at $<?php echo ($length*88); ?>.</p>
      <?php
			}else{
		?>
				Please <a href="index.php">login</a>.
		<?php
			}
		?>
  </body>
</html>
