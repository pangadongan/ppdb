<?php 
include("connection.php");

//cek apakah tombol register sudah di klik atau belum?
if(isset($_POST['register']))
 {
 	//ambil data dari form register
 	$name=$_POST['name'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	//buat query
 	$sql="INSERT INTO user (name, username, password) VALUE ('$name','$username','$password')";
 	$query=mysqli_query($db,$sql);

 	//apakah query simpan berhasil?
 	if($query){
 		header('Location:login.php?status=success');
 	}else{
 		header('Location:login.php?status=fail');
 	}
 
 }else{
 	die("no access..");
 }
 ?>