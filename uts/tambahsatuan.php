<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menambah Data tabel satuan</title>
</head>
<body>
	<?php
		include 'menu.php';
	?>
	<a href="tambahsatuan.php">Tambah Data Satuan</a> | 
	<a href="satuan.php">Lihat Data</a>
	<br>
	<br>
	<br>
	<form action="satuanproses.php" method="post">
		<!-- <input type="text" name="id" placeholder="id"><br><br> -->
		<input type="text" name="nama" placeholder="Nama" required><br><br>
		<textarea placeholder="keterangan" name="keterangan"></textarea><br><br>
		<select name="aktif">
			<option value="1">aktif</option>
			<option value="0">tidak aktif</option>
		</select><br><br>
			
		<input type="submit" name="proses" value="TAMBAH">

</form>
</body>
</html>