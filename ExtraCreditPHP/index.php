<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Generator</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Password Generator</h1>
		<form id="generator" name="generator" method="post" action="password.php">
			<p>Password Minimum Length: <input type="number" id="passMin" name="passMin"> *Max of 20</p>
			<p>Number of Special Characters Required: <input type="number" id="passSpec" name="passSpec"></p>
			<p>Number of Numerical Characters Required: <input type="number" id="passNum" name="passNum"></p>
			<p><input type="submit" id="submit" name="submit" value="Generate Random Passwords"></p>
		</form>
	</body>
</html>