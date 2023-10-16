<?php
include("connection.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM user WHERE id_user=$id";
	$query = mysqli_query($db,$sql);
	if ($query) {
		header('Location: user-table.php');
	}else{
		die("gagal menghapus...");
	}
}else{
	die("Akses Dilarang...");
}
?>