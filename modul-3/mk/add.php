<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Mata Kuliah</title>
</head>
<body>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
	<br>

	<form action="proses.php" method="POST">
					<label>Kode </label>
					<input type="text" name="kode" size="30"><br><br>
					<label>Nama</label>
		 			<input type="text" name="nama" size="30" required><br><br>
					<input type="submit" name="proses" value="Tambah">
	</form>
</body>


</html>
