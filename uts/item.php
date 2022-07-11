<?php
		include 'menu.php';
		include "koneksi.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS</title>
</head>
<body>
	<br>
	<h1>
		Tabel Item
	</h1>

	<a href ="tambahitem.php"><button>Tambah Data Item</button></a>
	<br>
	<br>	
	<?php 
	
			$sql = "SELECT item.*, item_grp.nama as kategori_nama FROM item INNER JOIN item_grp ON item_grp.id=item.item_grp_id";
			$res = $conn->query($sql);

					echo "<table border='1'>";
					echo "<thead>
								<th>Nomor</th>
								<th>id</th>
								<th>item group id</th>
								<th>barcode</th>
								<th>nama</th>
								<th>satuan id</th>
								<th>HPP</th>
								<th>status</th>
								<th>crt</th>
								<th>Tanggal Dibuat</th>
								<th>upd</th>
								<th>Tanggal Update</th>	
								<th>Aksi</th>
								<th>Harga<th>			
							</thead>
							</tbody>";	
					
				$i = 0;
				while($dat = $res->fetch_array(MYSQLI_BOTH)){
	 				$i++;
	 				if($dat["aktif"] == 1){
	 					$status ="Aktif";
	 				}else{
	 					$status ="Tidak Aktif";
	 				}
	 					echo "<tr>
	 							<td>$i</td>
	 							<td>".$dat["id"]."</td>
	 							<td>".$dat["kategori_nama"]."</td>
	 							<td>".$dat["barcode"]."</td>
	 							<td>".$dat["nama"]."</td>
	 							<td>".$dat["satuan_id"]."</td>
	 							<td>".$dat["hpp"]."</td>
	 							<td>".$status."</td>
	 							<td>".$dat['crt']."</td>
	 							<td>".$dat["crt_date"]."</td>
	 							<td>".$dat["upd"]."</td>
	 							<td>".$dat["upd_date"]."</td>
	 							<td><a href='upditem.php?id=".$dat['id']."'>Update</a> | <a href='barangpros.php?id=".$dat['id']."'>Delete</td>
	 							<td>".$dat["harga"]."</td>
	 						</tr>";
	 					}
	 					echo "</tbody>
	 						</table>" 
	 				
		?>
</body>
</html>