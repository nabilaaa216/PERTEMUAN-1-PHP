<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
        //membuat fungsi
        function salam() {
            echo "Assalamualaikum!";
        }
        echo "<br>";

        //memanggil fungsi
        salam();
        echo "<br>";

        //fungsi dengan parameter
        function perkenalan ($nama) {
            echo "Perkenalkan, nama saya $nama.";
        }
        perkenalan("Nabila");
        echo "<br>";

        //fungsi dengan nilai default
        function setUmur ($umur = 20) {
            echo "Umur saya adalah $umur tahun.";
        }
        setUmur ();
        echo "<br>";

        //fungsi yang mengembalikan nilai
        function tambah ($a, $b) {
            return $a + $b;
        }
        $hasil = tambah (5, 3);
        echo $hasil;
        echo "<br>";

        //fungsi dengan beberapa parameter
        function hitungLuasPersegiPanjang ($panjang, $lebar) {
            return $panjang * $lebar;
        }
        $luas = hitungLuasPersegiPanjang (5, 3);
        echo $luas;
    ?>
</body>
</html>