<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>form contoh</h2>
    <form action="proses_lanjut.php" method="POST">
        <label for="buah">pilih buah : </label>
        <select name="buah" id="buah">
            <option value="apel">apel</option>
            <option value="pisang">pisang</option>
            <option value="mangga">mangga</option>
            <option value="jeruk">jeruk</option>
        </select>
        <br>

        <label for="">pilih warna favorit : </label> <br><br>
        <input type="checkbox" name="warna[]" value="merah"> merah <br>
        <input type="checkbox" name="warna[]" value="biru"> biru <br>
        <input type="checkbox" name="warna[]" value="hijau"> hijau <br>

        <br>

        <label for="">pilih jenis kelamin : </label> <br><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan <br>

        <br>

        <input type="submit" value="submit">
    </form>
</body>
</html>