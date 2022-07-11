<?php 
include "koneksi.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE ITEM GRP</title>
</head>
<body>
<?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM item_grp where id=$id");
    while ($d = mysqli_fetch_array($sql)) {
    ?>
    <form action="item_grp_proses.php" method="post">
        ID
        <input type="text" name="id" value="<?= $d['id'] ?>"><br><br>
        upline
        <input type="text" name="upline" value="<?= $d['upline'] ?>"><br><br>
        level
        <input type="text" name="level_item" value="<?= $d['level'] ?>"><br><br>
        Nama
        <input type="text" name="nama" value="<?= $d['nama'] ?>"><br><br>
        keterangan
        <input type="text" name="keterangan" value="<?= $d['keterangan'] ?>"><br><br>
        Aktif
        <select name="aktif" value = "<?=$d['aktif']?>">
			<option value="1">aktif</option>
			<option value="0">tidak aktif</option><br><br>
		</select><br><br>
        crt
        <input type="text" name="crt" value="<?= $d['crt'] ?>"><br><br>
        upd
        <input type="text" name="upd" value="<?= $d['upd'] ?>"><br><br>
        <button type="submit" name="proses" value="UPDATE_GRP">Simpan</button>
    </form>
    <?php
    }
    ?>

</body>
</html>