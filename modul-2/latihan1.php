<!DOCTYPE html>
<html lang="en">

<div class="Luas dan Volume Balok">
        <h2 class="judul">Luas dan Volume Balok</h2>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Panjang :
        <input type="number" name="Panjang"><br><br>
        Lebar :
        <input type="number" name="Lebar"><br><br>
        Tinggi :
        <input type="number" name="Tinggi"><br><br>
        <input type="submit" name="Volume" value="Hitung">
        
        
    </form>
    <?php
      $Panjang=0;
      $Lebar=0;
      $Tinggi=0;
    class volume
    {
        function Balok($p, $l, $t)
        {
            $v = $p * $l * $t;
            return $v;
        }

        function Luas($p,$l,$t){
            $L=2*($p*$l + $p*$t +$l*$t);
            return $L;
        }
    }
  
    $volume = new volume;
    if (isset($_GET['Panjang'])) {
        $Panjang = $_GET['Panjang'];
        $Lebar = $_GET['Lebar'];
        $Tinggi = $_GET['Tinggi'];
    }
    $hasil = $volume->Balok($Panjang, $Lebar, $Tinggi);
    $luas = $volume ->Luas($Panjang, $Lebar, $Tinggi)
    ?>
    volume :<input type="number" value="<?php echo $hasil ?>">
    <br><br>
    Luas Alas:<input type="number" value="<?php echo $luas ?>">
</body>

</html>