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
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM krs WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
		<form action="proses.php" method="POST">
					<input type="text" name="id" value="<?php echo $d['id']; ?>" hidden>
					<label>NPM </label>
						<input type="text" name="npm" value="<?php echo $d['mhs_npm'] ?>" readonly>
						<br><br>
					<label>Mata Kuliah</label>
						<input type="text" name="mk" value="<?php echo $d['mk_kode'] ?>" readonly>
						<br><br>
		 			<label>Semester</label>
		 				<input type="text" name="Semester" value="<?php echo $d['sem'] ?>" readonly>
						<br><br>
		 			<label>Tahun Ajaran</label>
		 				<input type="text" name="Semester" value="<?php echo $d['ta_id'] ?>" readonly>
		 			<br><br>
		 			<label>Nilai</label>
		 			<input type="number" name="nilai" size="10" value="<?php echo $d['nilai'] ?>" required><br><br>
			<input type="submit" name="proses" value="Ubah">
		</form>
	<?php
	}
	?>

</body>
</html>