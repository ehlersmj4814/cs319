<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Slip Calculator | Alexamara Marina</title>
    <meta charset="utf-8">
    <script>
		function Validate(){
			var len = document.getElementById("length");
			if (len.value == "") {
				alert("Please enter a boat length.");
				len.focus();
				return false;
			} else{
				return true;
			}
		}
    </script>
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
				<form id="calculator" name="calculator" action="price.php" method="post" onsubmit="return Validate();">
					<p>Boat Length in Feet: <input type="number" name="length" id="length"></p>
					<p><input type="submit" name="submit" id="submit" value="Calculate"></p>
				</form>
		<?php
			}else{
		?>
				Please <a href="index.php">login</a>.
		<?php
			}
		?>
  </body>
</html>
