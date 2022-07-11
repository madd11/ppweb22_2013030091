<?php
	include '../koneksi.php';



//tambah data krs
	if (isset($_POST['proses']) && $_POST['proses']=='Tambah') {
		$id=$_POST['id'];
		$npm=$_POST['npm'];
		$mk=$_POST['mk'];
		$semester=$_POST['semester'];
		$tahunajaran=$_POST['tahunajaran'];
		$nilai=$_POST['nilai'];

		$sql = "INSERT INTO krs(id,mhs_npm,mk_kode,sem,ta_id,nilai)
				VALUES
				('$id','$npm','$mk','$semester','$tahunajaran','$nilai')";
		$crud = mysqli_query($conn,$sql);
		if ($crud) {
			header("Location: index.php?action=berhasil");

		}else{
			header("Location: index.php?action=gagal");
		}
	}

//HAPUS data krs
	if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE from krs
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: index.php");
}

//EDIT data krs
	if (isset($_POST['proses']) && $_POST['proses']=='Ubah') {
	$id=$_POST['id'];
	$npm=$_POST['npm'];
	$mk=$_POST['mk'];
	$semester=$_POST['semester'];
	$tahunajaran=$_POST['tahunajaran'];
	$nilai=$_POST['nilai'];

	$sql = mysqli_query($conn,"UPDATE krs SET nilai='$nilai' WHERE id='$id'");

	if ($sql) {
			header("Location:index.php?action=berhasil");
		}else{
			header("Location:index.php?action=gagal");
		}	
	}
?>


