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
	$kode = $_GET['kode'];
	$data = mysqli_query($conn,"SELECT * FROM mk WHERE kode='$kode'");
	while($d = mysqli_fetch_array($data)){
	?>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
		<form action="proses.php" method="POST">
			<label>Kode </label>
			<input type="text" name="kode" size="30"  value="<?php echo $d['kode'];?>"readonly><br><br>
			<label>Nama</label>
		 	<input type="text" name="nama" size="30" value="<?php echo $d['nama'];?>" required><br><br>
			<input type="submit" name="proses" value="Ubah">
		</form>
	<?php
	}
	?>

</body>
</html>