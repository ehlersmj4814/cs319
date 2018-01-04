<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Movie Store</title>
		<h1>Movie Store</h1>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="movieCheckout" name="movieCheckout" method="post" action="payment.php">
			<fieldset>
				<legend><p>Which movies would you like to purchase?</p></legend>
				<input type="checkbox" name="movies[]" id="spotlight" value="Spotlight">Spotlight<br>
				<input type="checkbox" name="movies[]" id="birdman" value="Birdman">Birdman<br>
				<input type="checkbox" name="movies[]" id="12YearsASlave" value="12 Years A Slave">12 Year's a Slave<br>
				<input type="checkbox" name="movies[]" id="argo" value="Argo">Argo<br>
				<input type="checkbox" name="movies[]" id="theArtist" value="The Artist">The Artist<br>
				<input type="checkbox" name="movies[]" id="theKingsSpeech" value="The King's Speech">The King's Speech<br>
			</fieldset>
				<p><input type="submit" name="submit" id="submit" value="Checkout"></p>
		</form>
	</body>
</html>