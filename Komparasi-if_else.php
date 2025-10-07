<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komparasi IF ELSE</title>
</head>
<body>
    <?php
    //pernyataan  if
        $nilai = 85;
        if ($nilai >= 75) {
            echo "Lulus";
        }
        echo  "<br>";
    
    //pernyataan if-else
        $nilai = 65;
        if ($nilai >= 75){
            echo "Lulus";
        }
        else {
            echo "Tidak Lulus";
        }
        echo "<br>";

    //pernyataan if-elseif-else
        $nilai = 85;
        if ($nilai >= 90){
            echo "A";
        }
        elseif ($nilai >= 80){
            echo "B";
        }
        elseif($nilai >= 70){
            echo "C";
        }
        else {
            echo "D";
        }
    ?>
</body>
</html>