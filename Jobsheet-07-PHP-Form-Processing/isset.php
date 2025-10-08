<?php
    $umur;
    if(isset($umur) && $umur >= 18) {
        echo "anda sudah dewasa <br>";
    }else {
        echo "anda belum dewasa atau variabel 'umur' tidak ditemukan <br>";
    }
    
    //add
    $data = array("nama" => "Jane", "usia" => 25);
    if(isset($data["nama"])) {
        echo "nama : " . $data["nama"];
    }else {
        echo "variabel 'nama' tidak ditemukan";
    }
?>