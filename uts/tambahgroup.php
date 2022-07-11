<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah group</title>
</head>
<body>
<?php
include "menu.php"; 
?>

<a href="tambahgroup.php">Tambah group item</a> | 
<a href="item_grp.php">Lihat Data group item</a>
	<br>
	<br>
	<br>
	<form action="item_grp_proses.php" method="POST">
		<input type="text" name="id" placeholder="id group" required><br><br>
		<input type="text" name="upline" placeholder="upline"><br><br>
		<input type="text" name="level" placeholder="level"><br><br>
		<input type="text" name="nama" placeholder="nama"
		><br><br>
		<textarea placeholder="keterangan" name="keterangan"></textarea><br><br>
		status barang <select name="aktif">
			<option value="aktif">aktif</option><br><br>
			<option value="tidak">tidak aktif</option>
		</select><br><br>

		<input type="submit" name="proses" value="TAMBAH_GRP">

	</form>
</body>
</html>