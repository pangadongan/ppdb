<?php
include("connection.php");
if(isset($_POST['save'])){

	$id = $_POST['id'];
	$name=$_POST['name'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	$sql="UPDATE user SET name='$name', username='$username', password='$password'WHERE id_user=$id";
 	$query = mysqli_query($db, $sql);

 	if($query){
 		header('Location: user-table.php');
 	}else{
 		die("Gagal menyimpan perubahan!");
 	}
}else{
	die("Akses dilarang...");
}
?>