<?php
    function hitungUmur($thn_sekarang, $thn_lahir) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamuallaikum") {
        echo $salam . ", ";
        echo "perkenalkan, nama saya " . $nama . "<br>";

        echo "saya berusia " . hitungUmur(2025, 2005) . " tahun <br>";
        echo " senang berkenalan dengan anda <br>";
    }

    perkenalan("Hanzel");
    
?>