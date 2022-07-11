<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="konversi">
            <form action="" method="GET">
                <div class="judul">
                    <center>
                        <h1>konversi nilai</h1>
                    </center>
                    <input type="number" name="nilai" placeholder="masukkan nilai ">
                    <input type="submit" name="hasil" value="konversi">
                </div>
            </form>
            <?php
            $nilai = null;
            echo "hasil konversi :";
            if (isset($_GET['hasil'])) {
                $nilai = $_GET['nilai'];
            }
            if ($nilai <= 40) {
                $nilai = "D";
                echo "<input type='text' value ='$nilai'>";
            } elseif ($nilai <= 60) {
                $nilai = "C";
                echo "<input type='text' value ='$nilai'>";
            } elseif ($nilai <= 90) {
                $nilai = "B";
                echo "<input type='text' value ='$nilai'>";
            } elseif ($nilai <= 100) {
                $nilai = "A";
                echo "<input type='text' value ='$nilai'>";
            } elseif ($nilai > 100) {

                echo "<h4 style 'color:red'>angka yang anda masukkan melebihi nilai yang di tentukan</h4>";
            }

            ?>
        </div>
    </div>
</body>

</html>