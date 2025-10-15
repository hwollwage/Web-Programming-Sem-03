<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION["status"] == "login") {
            echo "selamat datang" . $_SESSION["username"];
        
    ?>
        <br><a href="sessionLogout.php">logout</a>
    <?php
        }else {
            echo "anda belum login, silahkan";
        
    ?>
        <a href="sessionLoginForm.html">login</a>
    <?php
        }
    ?>
</body>
</html>