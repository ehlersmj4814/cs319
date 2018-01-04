<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="math" name="math" method="post" action="math.php">
		<p>First Number: <input type="number" id="num1" name="num1"></p>
		<p>Operation: 
		<select id="operator" name="operator">
			<option value="add">Add</option>
			<option value="subtract">Subtract</option>
		</select></p>
		<p>Second Number: <input type="number" id="num2" name="num2"></p>
		<p><input type="submit" id="submit" name="submit" value="Calculate"></p>
		</form>
	</body>
</html>