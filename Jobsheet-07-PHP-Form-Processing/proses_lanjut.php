<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST["buah"];

        if(isset($_POST["warna"])) {
            $selectedWarna = $_POST["warna"];
        }else {
            $selectedWarna = [];
        }
    }

    $selectedJenisKelamin = $_POST["jenis_kelamin"];

    echo "anda memilih buah : " . $selectedBuah . "<br>";

    if(!empty($selectedWarna)) {
        echo "warana favorit anda : " . implode(", ", $selectedWarna) . "<br>";
    }else {
        echo "anda tidak memilih warna favorit anda <br>";
    }

    echo "jenis kelamin anda : " . $selectedJenisKelamin;
?>