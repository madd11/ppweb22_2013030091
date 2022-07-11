<html>
<head>
<title>list/menu pilihan</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
	<select name="pilihan[]" size ="4" multiple ="multiple" id= "pilihan[]"><?php for ($i=1; $i<5; $i++) { ?>
	<option value = "<?php echo $i; ?>">
		list menu <?php echo $i; ?>
	</option>
	<?php } ?>
</select>
<br>
<input type= "submit" name="button" id="button" value= "submit">
<hr/>
<?php
if (isset ($_POST["pilihlah"])){
	foreach ($_POST["pilihan"] as $value){
		echo $value ."<br/>";
	}
}else{
	if (isset ($_POST["button"])){
		echo "maaf!, anda harus";
		echo "memilih salah satu item";
	}else{
		echo "pilihlah salah satu data";
	}
}
?>
</form>
</body>
</html>