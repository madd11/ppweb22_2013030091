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
		Tabel Kategori
	</h1>

	<a href="tambahgroup.php"><button>Tambah Data Group item</button></a>
	<br>
	<br>
	<table border="1">
		<thead>
			<th>No</th>
			<th>id</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Tanggal Dibuat</th>
			<th>Tanggal Update</th>
			<th>Aksi</th>
		</thead>	
		<?php
			include 'koneksi.php';
			$item_grp = "SELECT * FROM item_grp";
			$res = $conn->query($item_grp);
			if($res->num_rows > 0){
				$i = 0;
				while($dat = $res->fetch_array(MYSQLI_BOTH)){
	 				$i++;
	 					echo "<tr>
	 							<td>$i</td>
	 							
	 							<td>".$dat["id"]."</td>
	 							<td>".$dat["nama"]."</td>
	 							<td>".$dat["keterangan"]."</td>
	 							<td>".$dat["crt_date"]."</td>
	 							<td>".$dat["upd_date"]."</td>
	 							<td><a href='upd_item_grp.php?id=".$dat['id']."'>Update</a> | <a href='item_grp_proses.php?id=".$dat['id']."'>Delete</td>
	 						</tr>";
	 					} 
	 				}	
		?>
	</table>
</body>
</html>