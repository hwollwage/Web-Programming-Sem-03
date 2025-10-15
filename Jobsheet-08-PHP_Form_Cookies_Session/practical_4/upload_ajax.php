<?php
if (isset($_FILES["images"])) {
    $total = count($_FILES["images"]["name"]);
    $dir = "uploads/";

    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }

    $allowed = ["jpg", "jpeg", "png", "gif"];
    $output = "";

    for ($i = 0; $i < $total; $i++) {
        $name = $_FILES["images"]["name"][$i];
        $tmp = $_FILES["images"]["tmp_name"][$i];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        if (in_array($ext, $allowed)) {
            move_uploaded_file($tmp, $dir . $name);
            $output .= "Gambar <b>$name</b> berhasil diunggah.<br>";
            $output .= "<img src='$dir$name' width='200' style='margin:5px'><br>";
        } else {
            $output .= "File <b>$name</b> bukan gambar dan tidak diunggah.<br>";
        }
    }

    echo $output;
}
?>
