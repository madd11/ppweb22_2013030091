<?php
	include '../koneksi.php';



//tambah data mhs
	if (isset($_POST['proses']) && $_POST['proses']=='Tambah') {
		$npm=$_POST['npm'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];

		$sql = "INSERT INTO mhs(npm,nama,alamat)
				VALUES
				('$npm','$nama','$alamat')";
		$crud = mysqli_query($conn,$sql);
		if ($crud) {
			header("Location: index.php?action=berhasil");

		}else{
			header("Location: index.php?action=gagal");
		}
	}

//HAPUS data mhs
	if (isset($_GET['npm'])){
	$npm = $_GET['npm'];
	$sql = "DELETE from mhs
			WHERE npm='$npm'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: index.php");
}

//EDIT data mhs
	if (isset($_POST['proses']) && $_POST['proses']=='Ubah') {
	$npm=$_POST['npm'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];

	$sql = mysqli_query($conn,"UPDATE mhs SET npm='$npm',nama='$nama',alamat='$alamat' WHERE npm='$npm'");

	if ($sql) {
			header("Location:index.php?action=berhasil");
		}else{
			header("Location:index.php?action=gagal");
		}	
	}
?>


