<?php 
include "koneksi.php";
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data item</title>
</head>
<body>
	<?php
	include "menu.php"; 
	?>
	<a href="tambahitem.php">Tambah Data item</a> | 
	<a href="item.php">Lihat Data</a>
	<br>
	<br>
	<br>
	<form action="itemproses.php" method="POST">
		ID:<br>
		<input type="text" name="id"><br>
		item_grp_id:<br>
		<select name="item_grp_id">
			<?php
			$sql = "SELECT * FROM item_grp";
			$res = $conn->query($sql);
			while ($dat=$res->fetch_array(MYSQLI_BOTH)) {
				echo "<option value='".$dat['id']."'>".$dat['nama']."</option>";
			}
			?>		
		</select><br>
		barcode:<br>
		<input type="text" name="barcode"><br>
		Nama:<br>
		<input type="text" name="nama"><br>
		satuan_id:<br>
		<select name="satuan_id">
			<?php
			$sql = "SELECT * FROM satuan";
			$res = $conn->query($sql);
			while($dat=$res->fetch_array(MYSQLI_BOTH)){
				echo "<option value'".$dat['id']."'>".$dat['nama']."</option>";
			}
			?>
		</select><br>
		hpp:<br>
		<input type="text" name="hpp" ><br>
		aktif<br>
		<select name="aktif">
			<option value="1">aktif</option>
			<option value="0">tidak aktif</option>
		</select><br><br>
		harga<input type="text" name="harga"><br>
		<input type="submit" name="proses" value="TAMBAH">

	</form>

</body>
</html>