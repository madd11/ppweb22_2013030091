<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS</title>
</head>
<body>
	<?php
		include 'menu.php';
	?>
	<br>
	<h1>
		Tabel Satuan
	</h1>

	<a href="tambahsatuan.php">Tambah Data Satuan</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>Nomor</td>
			<td>id satuan</td>
			<td>Nama</td>
			<td>Keterangan</td>
			<td>status</td>
			<td>Tanggal Dibuat</td>
			<td>Tanggal Update</td>
			<td>Aksi</td>
			
		</tr>
			<?php
				include 'koneksi.php';
				$satuan = "SELECT * FROM satuan";
				$res = $conn->query($satuan);			
				if($res->num_rows > 0){
					$i = 0;
					while($dat = $res->fetch_array(MYSQLI_BOTH)){
		 				$i++;
		 				if ($dat["aktif"] == 1) {
		 					$status = "Aktif";
		 				}else{
		 					$status = "Tidak Aktif";
		 				}
		 					echo "<tr>
		 							<td>$i</td>
		 							<td>".$dat["id"]."</td>
		 							<td>".$dat["nama"]."</td>
		 							<td>".$dat["keterangan"]."</td>
		 							<td>".$status."</td>
		 							<td>".$dat["crt_date"]."</td>
		 							<td>".$dat["upd_date"]."</td>
		 							<td> <a href='updsatuan.php?id=".$dat['id']."'>Update</a>| <a href='satuanproses.php?id=".$dat['id']."'>Delete</a></td>
		 						</tr>";
		 					}
					}
		 	
			?>
	</table>
</body>
</html>