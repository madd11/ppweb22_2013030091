<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mata Kuliah</h1>
	<a href ="add.php">Tambah Data</a> || <a href="../index.php">Kembali ke Menu</a>
	<br>
	<br>
	<?php

		$sql = "SELECT * FROM mk";
		$res = $conn->query($sql);
		echo "<table border='1'>";
		echo "<thead>
					<th>Kode</th>
					<th>Nama</th>
					<th>Aksi</th>
				</thead>
				</tbody>";
		$i = 0;
		while ($dat = $res->fetch_array(MYSQLI_BOTH)) {
			$i++;
			echo "<tr align='center'>
					<td>".$dat["kode"]."</td>
					<td>".$dat["nama"]."</td>
					<td><a href='update.php?kode=".$dat['kode']."'>Ubah</a> | <a href='proses.php?kode=".$dat['kode']."'>Hapus</td>
					</tr>";
		}
		echo "</tbody>
			</table>"
	?>

</body>
</html>