<?php
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data KRS</title>
</head>
<body>
	<h1>Data KRS</h1>
	<a href ="add.php">Tambah Data</a> || <a href="../index.php">Kembali ke Menu</a>
	<br>
	<br>
	<?php

		$sql = "SELECT krs.mhs_npm,mk.nama as nmk, ta.nama as tahun, krs.sem, krs.nilai,krs.id FROM krs inner join mhs on mhs.npm = krs.mhs_npm inner join ta on ta.id = krs.ta_id inner join mk on mk.kode = krs.mk_kode ";
		$res = $conn->query($sql);
		echo "<table border='1'>";
		echo "<thead>
					<th>No</th>
					<th>NPM</th>
					<th>Mata Kuliah</th>
					<th>Semester</th>
					<th>Tahun Ajaran</th>
					<th>Nilai</th>
					<th>Aksi</th>
				</thead>
				</tbody>";
		$i = 0;
		while ($dat = $res->fetch_array(MYSQLI_BOTH)) {
			$i++;
			echo "<tr align='center'>
					<td>$i</td>
					<td>".$dat["mhs_npm"]."</td>
					<td>".$dat["nmk"]."</td>
					<td>".$dat["sem"]."</td>
					<td>".$dat["tahun"]."</td>
					<td>".$dat["nilai"]."</td>
					<td><a href='update.php?id=".$dat['id']."'>Ubah</a> | <a href='proses.php?id=".$dat['id']."'>Hapus</td>
					</tr>";
		}
		echo "</tbody>
			</table>"
	?>

</body>
</html>