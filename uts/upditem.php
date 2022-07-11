<?php
include "koneksi.php";
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE Data tabel item</title>
</head>
<body>
	<?php
	include 'menu.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM item WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
	 ?>
	<a href="upditem.php?id=<?php echo $id?>">Update data Item </a> |
	<a href="item.php">Lihat Data</a>
	<br><br><br>
	<form action="itemproses.php" method="post">
		ID item :
		<input type="text" name="id" value="<?php echo $d['id'];?>"readonly><br>
		grup item :
		<select name="item_grp_id" value="<?=$d['item_grp_id']?>">
			<?php
			$sql = "SELECT * FROM item_grp";
			$res = $conn->query($sql);
			while ($dat= $res->fetch_array(MYSQLI_BOTH)){?><option value="<?=$dat['id']?>"<?php if($dat['id'] == $d['item_grp_id']){
				echo "selected";
			} ?>><?=$dat['nama']?></option>
			<?php } ?>
			?>			
		</select><br>
		<br><br>
		barcode item :
		<input type="text" name="barcode" value="<?php echo $d['barcode'];?>"><br><br>
		Nama item:
		<input type="text" name="nama" size="30" placeholder="nama" value="<?php echo $d['nama'];?>"><br><br>
		Satuan itemnya:
		<select name="satuan_id" value="<?=$d['satuan_id']?>">
			<?php
			$sql = "SELECT * FROM satuan";
			$res = $conn->query($sql);
			while($dat=$res->fetch_array(MYSQLI_BOTH)) { ?>
			<option value="<?=$dat['id']?>"<?php if ($dat['id']==$d['satuan_id']){
				echo "selected";
			}?>><?=$dat['nama']?>
				</option>	
			<?php } ?>
			?>
		</select><br>
		hpp :
		<input type="text" name="hpp" value="<?php echo $d['hpp'];?>"><br><br> 
		status itemnya:<select name="aktif" value = "<?=$d['aktif']?>">
			<option value="1">aktif</option>
			<option value="0">tidak aktif</option>
		</select><br><br>
		harga<input type="text" name="harga" value="<?php echo $d['harga']?>"><br><br>
		<input type="submit" name="proses" value="UPDATE">
	</form>
	<?php
}
	?>
</body>
</html>