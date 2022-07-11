<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Ajaran</title>
</head>
<body>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
	<br>
	<?php 
		$data = mysqli_query($conn,"SELECT * FROM ta ORDER BY id DESC LIMIT 1");
		$d = mysqli_fetch_array($data);
		$id = $d['id']+1;
	?>
	<form action="proses.php" method="POST">
		<label>Tahun Ajaran</label>
		<input type="text" name="id" value="<?php echo $id; ?>" hidden>
		<input type="text" name="nama" size="30" required><br><br>
		<input type="submit" name="proses" value="Tambah">
	</form>
</body>
</html>
