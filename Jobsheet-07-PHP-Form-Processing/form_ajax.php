<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <h2>form contoh</h2>
    <form id="myForm">
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

    <div id="hasil">

    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();

                var formData = $("#myForm").serialize();

                $.ajax({
                    url: "proses_lanjut.php",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>