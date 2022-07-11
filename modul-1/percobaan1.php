<html>
<head>
<title>membuat list tahun</title>
</head>

<body>
<form name= "form1" method="post" action=""> pilih tahun
	<select name="tahun" id="tahun">
		<?php for($thn=1; $thn < 30; $thn++){ ?>
			<option value="<?php echo (2000+$thn);?>"><?php echo (2000+$thn); ?></option><?php } ?>
		</select>
</form>
</body>
</html>