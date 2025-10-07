<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unset Variabel</title>
</head>
<body>
    <?php
        $nama = "Nabila Putri";
        unset($nama); //menghapus variabel dan isinya
        var_dump(isset($nama)); //mengecek var. nama
    ?>
</body>
</html>