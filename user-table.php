<?php include("connection.php"); ?>
<html>
<head>
	<title>Halaman Tabel</title>
</head>
<body>
	<h1 align="center">Data Calon Peserta Didik Baru</h1>
	<table border="1" align="center" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Lengkap</th>
				<th>Username</th>
				<th>Password</th>
				<th>Aksi</th>
			</tr>
		</thead>
	<tbody>
<?php
$sql = "SELECT*FROM user";
$query = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$row['id_user']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>";
	echo "<a href='edit.php?id=".$row['id_user']."'>Edit</a> | ";
	echo "<a href='hapus.php?id=".$row['id_user']."'>Hapus</a>";
	echo "</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
<p align="center">Total:<?php echo mysqli_num_rows($query) ?></p>
</body>
</html>

