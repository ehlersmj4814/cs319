<?php 
session_start();
	$_SESSION["credit_type"] = $_REQUEST["payment"];
	$_SESSION["credit_month"] = $_REQUEST["month"];
	$_SESSION["credit_year"] = $_REQUEST["year"];
$full_name = $_REQUEST["name"];
setcookie("name", $_full_name, time() +86400, "/" );
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Movie Store</title>
		<h1>Movie Store</h1>
		<meta charset="utf-8">
	</head>
	<body>
		<fieldset>
			<legend>Is your order correct?</legend>
			<p>Items:</p>
			<ul>
				<?php
					foreach($_SESSION["movies"] as $movie){
						?>
						<li><?php echo $movie; ?></li>
					<?php
					}
					?>
			</ul>
			<p>Payment:</p>
			<ul>
				<li> Card Type: <?php echo $_SESSION["credit_type"]; ?></li>
				<li> Expiration: <?php echo $_SESSION["credit_month"]; ?>/<?php echo $_SESSION["credit_year"]; ?></li>
				<li> Full Name: <?php echo $full_name; ?></li>
			</ul>
		</fieldset>
		<form id="movieReview" name="movieReview" method="post" action="receipt.php">
			<input type="submit" id="submit" name="submit" value="Confirm and Purchase">
		</form>
	</body>
</html>