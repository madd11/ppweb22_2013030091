<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');


//MENAMBAH ITEMM
if(isset($_POST['proses']) && $_POST['proses']=='TAMBAH') {
	$id=$_POST['id'];
	$item_grp_id=$_POST['item_grp_id'];
	$barcode=$_POST['barcode'];
	$nama=$_POST['nama'];
	$satuan_id=$_POST['satuan_id'];
	$hpp=$_POST['hpp'];
	$aktif=$_POST['aktif'];
	$crt = NULl;
	$crt_date = date("Y-m-d H:i:s");
	$upd = NULL;
	$upd_date = date("Y-m-d H:i:s");
	$harga=$_POST['harga'];

	$sql = "INSERT INTO item
			(id,item_grp_id,barcode,nama,satuan_id,hpp,aktif,crt,crt_date,upd,upd_date,harga)
			VALUES
			('$id', '$item_grp_id', '$barcode', '$nama', '$satuan_id', '$hpp', '$aktif', '$crt', '$crt_date','$upd', '$upd_date','$harga')";
	$crud = mysqli_query($conn,$sql);
	if ($crud){
		header("Location: item.php?action=berhasil");
	}else{
		header("location: item.php?action=gagal");
	}

}

//hapus item
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE from item
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: item.php");
}


//update tabel item
if(isset($_POST['proses']) && $_POST['proses']=='UPDATE'){
	var_dump($_POST);
	$id=$_POST['id'];
	$item_grp_id=$_POST['item_grp_id'];
	$barcode=$_POST['barcode'];
	$nama=$_POST['nama'];
	$satuan_id=$_POST['satuan_id'];
	$hpp=$_POST['hpp'];
	$aktif=$_POST['aktif'];
	$crt = NULL;
	$upd = NULL;
	$upd_date=date("Y-m-d H:i:s");
	$harga=$_POST['harga'];

	$sql = mysqli_query($conn,"UPDATE item
			SET nama='$nama',barcode='$barcode',item_grp_id='$item_grp_id',satuan_id='$satuan_id',hpp='$hpp',aktif='$aktif',crt='$crt',upd='$upd',upd_date='$upd_date',harga='$harga'
			WHERE id='$id'");

	if ($sql){
		header("Location:item.php?action=berhasil");
	}else{
		header("location: item.php?action=gagal");
	}
}
	
?>