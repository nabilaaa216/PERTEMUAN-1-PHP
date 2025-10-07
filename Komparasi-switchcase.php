<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komparasi Switch Case</title>
</head>
<body>
    <?php
        $warnaFavorit = "merah";

        switch ($warnaFavorit) {
            case "merah":
                echo "Warna Favorit Kamu Merah!";
                break;
            case "biru":
                echo "Warna Favorit Kamu Biru!";
                break;
            case "hijau":
                echo "Warna Favorit Kamu Hijau!";
                break;
            default:
                echo "Warna Favorit Kamu Tidak Ada!";
        }
    ?>
</body>
</html>