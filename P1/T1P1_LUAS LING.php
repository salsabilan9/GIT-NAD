<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h3>MENGHITUNG LUAS LINGKARAN</h3>
    <hr>
    <table>
    <form action="" method="POST">
        <tr>
            <td><h5>Masukkan nilai jari-jari (r) :</h5></td>
            <br>
            <td><input type="number" name="jari_jari" placeholder="Masukkan nilai">
        </tr>
        <tr>
            <td><button onclick="submit()" name="submit">Check</button></td>
        </tr>
    </form>
    </table>

    <?php
        if(isset($_POST['submit'])) {
        $r = $_POST['jari_jari'];
        $phie = 3.14;

        $luas = $phie*($r*$r);

        echo "Luas Lingkaran adalah = $luas"; 
    }
    ?>
    
    
</body>
</html>