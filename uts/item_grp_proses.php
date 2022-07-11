<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
//TAMBAH ITEM GRP
if(isset($_POST['proses']) && $_POST['proses']== 'TAMBAH_GRP'){
	$id = $_POST['id'];
	$upline =$_POST['upline'];
	$level =$_POST['level'];
	$nama =$_POST['nama'];
	$keterangan =$_POST['keterangan'];
	$status=$_POST['aktif'];
	$crt=NULL;
	$crt_date = date('Y-m-d H:i:s');
	$upd=NULL;
	$upd_date=date('Y-m-d H:i:s');

	$sql = "INSERT into item_grp
			(id,upline,level,nama,keterangan,aktif,crt,crt_date,upd,upd_date)
			VALUES
			('$id','$upline','$levvel','$nama','$keterangan','$aktif','$crt','$crt_date','$upd','$upd_date')";
	if ($conn->query($sql)){
        header("Location: item_grp.php?action=berhasil");
    }
    else{
        header("Location: item_grp.php?action=gagal");
    }
}
//HAPUS ITEM GRP
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE from item_grp
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

//UPDATE ITEM_GRP

if (isset($_POST['proses']) && $_POST['proses']=='UPDATE_GRP') {
	$id = $_POST['id'];
    $upline = $_POST['upline'];
    $levvel = $_POST['level_item'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $aktif= $_POST['aktif'];
    $crt = $_POST['crt'];
    $crt_date = date("Y-m-d H:i:s");
    $upd = $_POST['upd'];
    $upd_date = date("Y-m-d H:i:s");

    $sql = "UPDATE item_grp SET upline='$upline',nama='$nama',keterangan='$keterangan',
			aktif='$aktif',crt_date='$crt_date',upd_date='$upd_date',level='$levvel'
			WHERE id='$id'";
    mysqli_query($conn,$sql);
    if ($conn->query($sql)){
        header("Location: item_grp.php?action=berhasil");
    }
    else{
        header("Location: item_grp.php?action=gagal");
    }
}
?>

