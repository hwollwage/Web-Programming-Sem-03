<?php
    function perkenalan($nama, $salam="Assalamuallaikum") {
        echo $salam; " , ";
        echo " perkenalkan, nama saya " . $nama . "<br>";
        echo "senang bertemu dengan anda <br>";
    }

    perkenalan("hanzel", "hallo");
    
    echo "<hr>";

    $saya = "elok";
    $ucapanSalam = "selamat pagi";

    perkenalan($saya);
?>
