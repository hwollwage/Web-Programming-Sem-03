<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "1234") {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        echo "anda berhasil login. Silahkan menuju <a href='homeSession.php'>halaman home</a>";
    }else {
        echo "gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>halaman login</a>";
    }
?>