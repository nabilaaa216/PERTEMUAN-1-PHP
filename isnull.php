<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Null</title>
</head>
<body>
    <?php
        $nama = "Nabila Putri";
        $nama = null; //data di hapus

        $isNull = is_null($nama);//mengecek apakah variabel nama ada isinya tidak
        var_dump($isNull);
    ?>
</body>
</html>