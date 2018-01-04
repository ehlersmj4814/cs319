<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create an Account</title>
		<meta charset="utf-8">
		<script>
			function validate() {
				var pass1 = document.register.password.value;
				var pass2 = document.register.passAuth.value;
				if (pass1 != pass2){
					alert("Passwords are not the same");
					document.register.password.select();
					return false;
				} else {
					return true;
				}
			}
		</script>
	</head>
	<body>
		<h1>Create an Account</h1>
		<form id="register" name="register" method="post" action="register.php" onsubmit="return validate();">
			<p>Full Name: <input type="text" id="fullName" name="fullName"></p>
			<p>Email: <input type="text" id="email" name="email"></p>
			<p>Password: <input type="password" id="pass" name="pass"></p>
			<p>Repeat Password: <input type="password" id="passAuth" name="passAuth"></p>
			<p><input type="submit" id="submit" name="submit" value="Register"></p>
		</form>
	</body>
</html>