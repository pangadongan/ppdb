<?php
include("connection.php");
if(!isset($_GET['id'])){
	header('Location: user-table.php');
}
$id=$_GET['id'];
$sql="SELECT * FROM user WHERE id_user=$id";
$query=mysqli_query($db, $sql);
$user=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login">
<h1>Edit</h1>
<form action="edit-process.php" method="POST">

<input type="hidden" name="id" value="<?php echo $user['id_user']?>">

<label>Full Name</label><br>
<input type="text" name="name" value="<?php echo $user['name']?>"><br>
<label>Username</label><br>
<input type="text" name="username" value="<?php echo $user['username']?>"><br>
<label>Password</label><br>
<input type="password" name="password" value="<?php echo $user['password']?>"><br><br>
<input type="submit" value="Save" name="save">
</form>
</div>
</body>
</html>