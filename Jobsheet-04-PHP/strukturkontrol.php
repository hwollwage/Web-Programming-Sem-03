<?php
    $nilaiNumerik = 92;

    if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "nilai huruf : A";
    }elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "nilai huruf : B";
    }elseif($nilaiNumerik >= 70 && $nilaiNumerik < 90) {
        echo "nilai huruf : C";
    }elseif($nilaiNumerik < 70) {
        echo "nilai huruf : D";
    }

    echo "<br><br>";
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }
    echo "atlet tersebut memelukan $hari hari untuk mencapai jarak 500 kilometer";
    echo "<br><br>";
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }
    echo "jumlah buah yang akan dipanen adalah : $jumlahBuah";
    echo "<br><br>";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach($skorUjian as $skor) {
        $totalSkor += $skor;
    }
    echo "total skor ujian adalah :  $totalSkor";
    echo "<br><br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach($nilaiSiswa as $nilai) {
        if($nilai < 60) {
            echo "nilai : $nilai (tidak lulus) <br>";
            continue;
        }
        echo "nilai : $nilai (lulus) <br>";
    }

?>