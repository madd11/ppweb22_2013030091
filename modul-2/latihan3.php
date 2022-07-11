<html>
<head>

<div class="Menghitung Nilai Matakuliah">
        <h2 class="judul">Menghitung Nilai Matakuliah</h2>

</head>
<body>
<?php
function grade($nilai){
	if($nilai <=100) { $grade = "A";}
	if($nilai <85) { $grade = "B";}
	if($nilai <75) { $grade = "C";}
	if($nilai <65) { $grade = "D";}
	if($nilai <55) { $grade = "E";}
return $grade;
}
?>
<form action="" method="post">
<div> NPM</div>
<input type="text" name="NPM" placeholder="NPM">
<div> Nama</div>
<input type="text" name="Nama" placeholder="Nama">
<div> Jumlah Kehadiran</div>
<input type="text" name="jk" size="10">
<div> Jumlah Pertemuan</div>
<input type="text" name="jp" size="10">
<div>  Nilai Tugas</div>
<input type="text" name="nilaitugas" size="10" placeholder="0-100">
<div>  Nilai UTS</div>
<input type="text" name="nilaiuts" size="10" placeholder="0-100">
<div>  Nilai UAS</div>
<input type="text" name="nilaiuas" size="10" placeholder="0-100">
<br>
<input type="submit" value="Simpan Data">
</form>
<br>
<?php
$NPM	= trim($_POST['NPM']);
$Nama	= trim($_POST['Nama']); 
$jk	=trim($_POST['jk']);
$jp	=trim($_POST['jp']); 
$nilaitugas	=trim($_POST['nilaitugas']);
$nilaiuts	=trim($_POST['nilaiuts']); 
$nilaiuas	=trim($_POST['nilaiuas']);
 $absensi=($jk/$jp)*100;
 $nilai =($absensi*0.1)+($nilaitugas*0.2)+($nilaiuts*0.3)+($nilaiuas*0.4);
 $grade = grade($nilai);
 ?>
 <h2>Data Nilai Mahasiswa</h2>
	<table width="100%" bgcolor="red" cellspacing="1">
	<tr bgcolor="pink">
		<th width="100">NPM</th>
		<th> Nama</th>
		<th width="100"> Nilai Absensi</th>
		<th width="100"> Nilai Tugas</th>
		<th width="100"> Nilai UTS</th>
		<th width="100"> Nilai UAS</th>
		<th width="100"> Grade</th>
	</tr>
		<tr bgcolor="red">
		<td align="center"><?php echo $NPM;?></td>
		<td><?php echo $Nama;?></td>
			<td align="center"><?php echo $absensi;?></td>
			<td align="center"><?php echo $nilaitugas;?></td>
		<td align="center"><?php echo $nilaiuts;?></td>
		<td align="center"><?php echo $nilaiuas;?></td>
		<td align="center"><?php echo $grade;?></td>
	</tr>
	</table>
	</body>
	</form>
		
		
 
 
 
 







