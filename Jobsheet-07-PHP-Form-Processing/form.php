<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>form input php</h2>
    <form action="form_process.php" method="POST">
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>