<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        Name : <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_REQUEST['fname'];
            if(empty($name)) {
                echo "name empty";
            }else {
                echo "hello, $name nice to meet you";
            }
        }
    ?>
</body>
</html>