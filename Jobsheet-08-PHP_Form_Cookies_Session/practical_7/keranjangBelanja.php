<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>keranjang belanja</h2>
    <?php
        $beliNovel = $_COOKIE["beliNovel"];
        $beliBuku = $_COOKIE["beliBuku"];

        echo "jumlah novel : " . $beliNovel . "<br>";
        echo "jumlah buku : " . $beliBuku;
    ?>
</body>
</html>