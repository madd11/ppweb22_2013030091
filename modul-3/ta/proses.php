<?php
	include '../koneksi.php';

//tambah data ta
	if (isset($_POST['proses']) && $_POST['proses']=='Tambah') {
		$id=$_POST['id'];
		$nama=$_POST['nama'];

		$sql = "INSERT INTO ta(id,nama)
				VALUES
				('$id','$nama')";
		$crud = mysqli_query($conn,$sql);
		if ($crud) {
			header("Location: index.php?action=berhasil");
		}else{
			header("Location: index.php?action=gagal");
		}
	}

//HAPUS data ta
	if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE from ta
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: index.php");
}

//EDIT data mhs
	if (isset($_POST['proses']) && $_POST['proses']=='Ubah') {
	$id=$_POST['id'];
	$nama=$_POST['nama'];

	$sql = mysqli_query($conn,"UPDATE ta SET id='$id',nama='$nama' WHERE id='$id'");

	if ($sql) {
			header("Location:index.php?action=berhasil");
		}else{
			header("Location:index.php?action=gagal");
		}	
	}
?>


