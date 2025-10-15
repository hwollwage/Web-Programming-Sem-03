<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Image Upload (AJAX)</title>
</head>
<body>
    <h2>Unggah Beberapa Gambar</h2>
    <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" id="file" multiple accept=".jpg,.jpeg,.png,.gif"><br><br>
        <input type="submit" value="Unggah">
    </form>

    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>
