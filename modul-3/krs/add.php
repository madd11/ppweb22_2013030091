<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<br>
	<a href="index.php" style="font-size: 20px;">Lihat Data</a>
	<br>
	<br>
	<br>

	<form action="proses.php" method="POST">
					<?php
						$data = mysqli_query($conn,"SELECT * FROM krs ORDER BY id DESC LIMIT 1");
						$d = mysqli_fetch_array($data);
						$id = $d['id']+1;
					?>
					<input type="text" name="id" value="<?php echo $id; ?>" hidden>
					<label>NPM </label>
						<select name="npm">
							<?php
								$data = mysqli_query($conn,"SELECT * FROM mhs");
								while($d = mysqli_fetch_array($data)){
									echo "<option value=".$d["npm"].">".$d["npm"]."</option>";
								}
							?>
						</select><br><br>
					<label>Mata Kuliah</label>
						<select name="mk">
							<?php
								$data = mysqli_query($conn,"SELECT * FROM mk");
								while($d = mysqli_fetch_array($data)){
									echo "<option value=".$d["kode"].">".$d["nama"]."</option>";
								}
							?>
						</select><br><br>
		 			<label>Semester</label>
						<select name="semester">
							<option value="Ganjil">Ganjil</option>
							<option value="Genap">Genap</option>
						</select><br><br>		 			
		 			<label>Tahun Ajaran</label>
		 			<select name="tahunajaran">
							<?php
								$data = mysqli_query($conn,"SELECT * FROM ta");
								while($d = mysqli_fetch_array($data)){
									echo "<option value=".$d["id"].">".$d["nama"]."</option>";
								}
							?>
		 			</select><br><br>
		 			<label>Nilai</label>
		 			<input type="number" name="nilai" size="10" required><br><br>
					<input type="submit" name="proses" value="Tambah">
	</form>
</body>


</html>
