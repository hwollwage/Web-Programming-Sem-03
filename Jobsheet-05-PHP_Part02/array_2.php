<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #e38383ff;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #e9e961ff;
        }
    </style>
</head>
<body>
    <?php
        $dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
