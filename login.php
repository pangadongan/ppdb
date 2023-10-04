<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
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
<h1>Login</h1>
<form>
<label>Username</label><br>
<input type="text" name=""><br>
<label>Password</label><br>
<input type="password" name=""><br><br>
<button>Login</button>
<button><a href="register.html">Register</a></button>
</form>
</div>
<?php if(isset($_GET['status'])):?>
<p>
	<?php
	if($_GET['status'] == 'success'){
		echo "New User has been Add..";
	}else{
		echo "Registration Failed";
	}
	?>
</p>
<?php endif; ?>
</body>
</html>