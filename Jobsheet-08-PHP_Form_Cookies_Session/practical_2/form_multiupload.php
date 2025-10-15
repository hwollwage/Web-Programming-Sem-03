<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>unggah dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple="multiple" accept=".pdf, .doc, .docx, .png, .jpeg, .jpg"> <br><br>
        <input type="submit" value="unggah">
    </form>
</body>
</html>