<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan(Looping)</title>
</head>
<body>
    <?php
        //for loop
        for ($i = 0; $i < 10; $i++) {
            echo "Ini perulangan ke-$i<br>";
        }
        echo "<br>";

        //while loop
        $i = 0;
        while ($i < 10){
            echo "Ini perulangan ke-$i<br>";
            $i++;
        }
        echo "<br>";

        //do-while loop
        $i = 0;
        do {
            echo "Ini perulangan ke-$i<br>";
            $i++;
        } while ($i < 10);
        echo "<br>";

        //foreach loop
        $buah = array("Apel", "Jeruk", "Mangga");
        foreach ($buah as $item) {
            echo "Buah: $item<br>";
        }
    ?>
</body>
</html>