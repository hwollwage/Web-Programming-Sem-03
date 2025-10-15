<?php
    $targetdirectory = "documents/";

    if(!file_exists($targetdirectory)) {
        mkdir($targetdirectory, 0777, true);
    }

    if($_FILES["file"]["name"][0]) {
        $totalfiles = count($_FILES["file"]["name"]);

        for($i = 0; $i < $totalfiles; $i++) {
            $filename = $_FILES["file"]["name"][$i];
            $targetfile = $targetdirectory . $filename;

            if(move_uploaded_file($_FILES["file"]["tmp_name"][$i], $targetfile)) {
                echo "file $filename berhasil diunggah <br>";
            }else {
                echo "gagal unggah file $filename <br>";
            }
        }
    }else {
        echo "tidak ada file yang diunggah";
    }
?>