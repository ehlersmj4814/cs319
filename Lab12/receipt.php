<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Movie Store</title>
		<h1>Movie Store</h1>
		<meta charset="utf-8">
	</head>
	<body>
		<p>Thank you for your order, <?php echo $full_name; ?>!</p>
		<p>You have ordered:</p>
		<ul>
			<?php
				foreach($_SESSION["movies"] as $movie){
					?>
					<li><?php echo $movie; ?></li>
				<?php
				}
			?>
		</ul>
		<p>Payment will be charged to:</p>
		<ul>
			<li> Card Type: <?php echo $_SESSION["credit_type"]; ?></li>
			<li> Expiration: <?php echo $_SESSION["credit_month"]; ?>/<?php echo $_SESSION["credit_year"]; ?></li>
		</ul>
		<?php
			session_unset();
			session_destroy();
			setcookie("name","", time() -3600, "/");
		?>
	</body>
</html>