<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSiswa);

    $nilaiTersaring = array_slice($nilaiSiswa, 2, -2);

    $totalSkor = 0;
    foreach ($nilaiTersaring as $nilai) {
        $totalSkor += $nilai;
    }

    $rataRata = $totalSkor / count($nilaiTersaring);

    echo "original score : " . implode(", ", $nilaiSiswa) . "<br>";
    echo "after removing 2 highest and lowest: " . implode(", ", $nilaiTersaring) . "<br>";
    echo "total score: $totalSkor <br>";
    echo "average : $rataRata";
?>
