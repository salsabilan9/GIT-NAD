<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Dua Bilangan</title>
</head>
<body>
<h3>Cek Dua Bilangan</h3>
    <form action="" method="POST">
        <table>
            <tr><h5>Mengecek nilai dua bilangan, apakah bernilai sama ataukah salah satunya lebih besar</h5></tr>
            <tr>
                <td>Masukkan nilai bilangan pertama (a) : </td>
                <td><input type="number" name="a" placeholder="Masukkan nilai"></td>
            </tr>
            <tr>
                <td>Masukkan nilai bilangan kedua (b) : </td>
                <td><input type="number" name="b" placeholder="Masukkan nilai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="cek" value="kirim"></td>
            </tr>
        </table>
        <br>

            <?php
                 if(isset($_POST['cek']))
                 {
                    $n_a = $_POST['a'];
                        $n_b = $_POST['b'];
                    if($n_a>$n_b){
                        echo "Nilai bilangan a lebih besar daripada b (A>B)";
                    } else if($n_a<$n_b) {
                        echo "Nilai bilangan a lebih kecil daripada b (A<B)";
                    } else {
                        echo "Kedua nilai bilangan adalah sama besar (A=B)";
                    }
                 }
            ?>
    </form>
    
</body>
</html>