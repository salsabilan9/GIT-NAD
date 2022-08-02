<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <h3>Menghitung Luas Lingkaran</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Masukkan nilai jari-jari (r) : </td>
                <td><input type="number" name="jari" placeholder="Masukkan nilai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="hitungluas" value="kirim"></td>
            </tr>
        </table>
        <br>

            <?php
                if(isset($_POST['hitungluas'])){
                    $r = $_POST['jari'];
                    $phi = 3.14;
                    $luas = $phi*($r*$r);

                    echo "Luas Lingkaran dengan phi $phi dan jari-jari $r adalah sebesar $luas";
                }   
            ?>
    </form>

</body>
</html>