<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Interest</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="register" name="register" method="post" action="processinterest.php">
			<p>Principal: <input type="number" id="principal" name="principal"></p>
			<p>Interset Rate: <input type="number" step="any" id="interestRate" name="interestRate"></p>
			<p>Number of Years: <input type="number" id="numberOfYears" name="numberOfYears"></p>
			<p><input type="submit" id="submit" name="submit" value="Calculate"></p>
		</form>
	</body>
</html>