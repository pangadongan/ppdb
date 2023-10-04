<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
	<style type="text/css">
		*{
			font-family: sans-serif;
			color: white;
		}
		button, a, input{
			color: black;
			text-decoration: none;
		}
		.login {
			position: absolute;
			left: 50%;
			top: 50%;
			padding: 20px 25px;
			width: 300;
			transform: translate(-50%, -50%);

			background-color: rgba(0,0,0,.7);
			box-shadow: 0 0 10px rgba(255,255,255,.3);
		}
	</style>
</head>
<body>
<div class="login">
<h1>Register</h1>
<form action="register-process.php" method="POST">
<label>Full Name</label><br>
<input type="text" name="name"><br>
<label>Username</label><br>
<input type="text" name="username"><br>
<label>Password</label><br>
<input type="password" name="password"><br><br>
<input type="submit" value="Register" name="register">
</form>
</div>
</body>
</html>