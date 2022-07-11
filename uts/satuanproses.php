<?php
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

//menambah data satuan
if(isset($_POST['proses']) && $_POST['proses']=='TAMBAH'){
	// $id = $_POST['id_satuan'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['status'];
	$crt = NULL;
	$crt_date = date("Y-m-d H:i:s") ;

	$sql = "INSERT INTO satuan
			(id,nama,keterangan,aktif,crt,crt_date)
			VALUES
			('$nama','$nama','$keterangan','$aktif','$crt','$crt_date')";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: satuan.php");	  
} 

//hapus satuan
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE from satuan
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}


//updatetabel satuan
if(isset($_POST['proses']) && $_POST['proses']=='UPDATE'){
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif =$_POST['status'];
	$upd_date = date("Y-m-d H:i:s") ;

	$sql = "UPDATE satuan
			set id='$nama',nama='$nama',keterangan='$keterangan',
			aktif='$aktif',upd_date='$upd_date' WHERE id='$nama'";
	if (!$res = $conn->query($sql))
		echo $sql;
	else
		header("location: satuan.php");
}

?>