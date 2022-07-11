<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<?php
	$npm = $_GET['npm'];
	$data = mysqli_query($conn,"SELECT * FROM mhs WHERE npm='$npm'");
	while($d = mysqli_fetch_array($data)){
	?>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
		<form action="proses.php" method="POST">
			<label>NPM </label>
			<input type="text" name="npm" size="30"  value="<?php echo $d['npm'];?>"readonly><br><br>
			<label>Nama</label>
		 	<input type="text" name="nama" size="30" value="<?php echo $d['nama'];?>" required><br><br>
			<label>Alamat</label>
		 	<textarea name="alamat" cols="30" required><?php echo $d['alamat']?></textarea><br><br>
			<input type="submit" name="proses" value="Ubah">
		</form>
	<?php
	}
	?>

</body>
</html>