<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array1.css">
</head>
<body>
    <?php
        $listDosen = ["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraha"];

        echo $listDosen[2] . "<br>";
        echo $listDosen[0] . "<br>";
        echo $listDosen[1] . "<br>";

        echo "<br>";

        echo "using loop : <br>";
        foreach($listDosen as $dosen) {
            echo $dosen . "<br>";
        }
    ?>
</body>
</html>