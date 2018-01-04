<?php
session_start();
	$_SESSION["movies"] = $_REQUEST["movies"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Movie Store</title>
		<h1>Movie Store</h1>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="movieCheckout" name="movieCheckout" method="post" action="review.php">
			<fieldset>
				<legend>Which movies would you like to purchase?</legend>
				<input type="radio" name="payment" id="americanExpress" value="American Express">American Express<br>
				<input type="radio" name="payment" id="discover" value="Discover">Discover<br>
				<input type="radio" name="payment" id="masterCard"value="MasterCard">MasterCard<br>
				<input type="radio" name="payment" id="visa" value="Visa">Visa<br>
				<p>Expiration Month <input type="text" name="month" id="month">/Year <input type="text" name="year" id="year"></p>
				<p>Full Name: <input type="text" name="name" id="name"></p>
			</fieldset>
			<p><input type="submit" name="submit" id="submit" value="Review Order"></p>
		</form>
	</body>
</html>