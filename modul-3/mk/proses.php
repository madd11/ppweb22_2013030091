<?php
	include '../koneksi.php';



//tambah data mk
	if (isset($_POST['proses']) && $_POST['proses']=='Tambah') {
		$kode=$_POST['kode'];
		$nama=$_POST['nama'];

		$sql = "INSERT INTO mk(kode,nama)
				VALUES
				('$kode','$nama')";
		$crud = mysqli_query($conn,$sql);
		if ($crud) {
			header("Location: index.php?action=berhasil");

		}else{
			header("Location: index.php?action=gagal");
		}
	}

//HAPUS data mhs
	if (isset($_GET['kode'])){
	$kode = $_GET['kode'];
	$sql = "DELETE from mk
			WHERE kode='$kode'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: index.php");
}

//EDIT data mhs
	if (isset($_POST['proses']) && $_POST['proses']=='Ubah') {
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];

	$sql = mysqli_query($conn,"UPDATE mk SET kode='$kode',nama='$nama' WHERE kode='$kode'");

	if ($sql) {
			header("Location:index.php?action=berhasil");
		}else{
			header("Location:index.php?action=gagal");
		}	
	}
?>


