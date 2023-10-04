<?php
$server = "localhost";
$user = "root";
$password = "";
$database_name = "ppdb";

$db = mysqli_connect($server, $user, $password, $database_name);
if( !$db ){
	die("Database Disconnected: " . mysqli_connect_error());
}

?>