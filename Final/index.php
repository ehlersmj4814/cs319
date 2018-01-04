<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Alexamara Marina</title>
    <meta charset="utf-8">
    <script>
		function Validate(){
			var user = document.getElementById("username");
			var pass = document.getElementById("password");
			if (user.value == "") {
				alert("Please Enter Username");
				user.focus();
				return false;
			} else if (pass.value == "") {
				alert("Please Enter Password");
				pass.focus();
				return false;
			} else{
				return true;
			}
		}
    </script>
  </head>
  <body>
    <h1>Alexamara Marina</h1>
    <h2>Login</h2>
    <form id="login" name="login" action="dashboard.php" method="post" onsubmit="return Validate();">
      <p>Username: <input type="text" name="username" id="username"></p>
      <p>Password: <input type="password" name="password" id="password"></p>
      <p><input type="submit" name="submit" id="submit" value="Login"></p>
    </form>
  </body>
</html>
