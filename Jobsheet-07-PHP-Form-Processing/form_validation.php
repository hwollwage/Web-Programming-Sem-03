<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <h2>form input dengan validasi</h2>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function() {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if(nama === "") {
                    $("#nama-error").text("email harus diisi");
                    valid = false;
                }else {
                    $("#nama-error").text("");
                }

                if(valid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
