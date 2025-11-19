<?php
include('../lib/Session.php');
include('../lib/Secure.php');
include('../model/BukuModel.php');

$session = new Session();

if ($session->get('is_login') !== true) {
    echo json_encode(['status' => false, 'message' => 'Unauthorized']);
    exit;
}

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'load') {
    $buku = new BukuModel();
    $data = $buku->getData();

    $result = [];
    $i = 1;

    while ($row = $data->fetch_assoc()) {
        $result['data'][] = [
            $i,
            $row['buku_kode'],
            $row['buku_nama'],
            $row['jumlah'],
            $row['kategori_nama'],
            $row['deskripsi'],
            $row['gambar'],
            '<button class="btn btn-sm btn-warning" onclick="editBuku('.$row['buku_id'].')"><i class="fa fa-edit"></i></button>
             <button class="btn btn-sm btn-danger" onclick="deleteBuku('.$row['buku_id'].')"><i class="fa fa-trash"></i></button>'
        ];
        $i++;
    }

    echo json_encode($result);
    exit;
}

if ($act == 'get') {
    $id = (ctype_digit($_GET['id'])) ? $_GET['id'] : 0;
    $buku = new BukuModel();
    echo json_encode($buku->getDataById($id));
    exit;
}

if ($act == 'save') {
    $buku = new BukuModel();

    $data = [
        'kategori_id' => intval($_POST['kategori_id']),
        'buku_kode'   => antiSqlInjection($_POST['buku_kode']),
        'buku_nama'   => antiSqlInjection($_POST['buku_nama']),
        'jumlah'      => intval($_POST['jumlah']),
        'deskripsi'   => antiSqlInjection($_POST['deskripsi']),
        'gambar'      => antiSqlInjection($_POST['gambar'])
    ];

    $buku->insertData($data);

    echo json_encode(['status' => true, 'message' => 'Data saved']);
    exit;
}

if ($act == 'update') {
    $id = (ctype_digit($_GET['id'])) ? $_GET['id'] : 0;
    $buku = new BukuModel();

    $data = [
        'kategori_id' => intval($_POST['kategori_id']),
        'buku_kode'   => antiSqlInjection($_POST['buku_kode']),
        'buku_nama'   => antiSqlInjection($_POST['buku_nama']),
        'jumlah'      => intval($_POST['jumlah']),
        'deskripsi'   => antiSqlInjection($_POST['deskripsi']),
        'gambar'      => antiSqlInjection($_POST['gambar'])
    ];

    $buku->updateData($id, $data);

    echo json_encode(['status' => true, 'message' => 'Data updated']);
    exit;
}

if ($act == 'delete') {
    $id = (ctype_digit($_GET['id'])) ? $_GET['id'] : 0;
    $buku = new BukuModel();
    $buku->deleteData($id);

    echo json_encode(['status' => true, 'message' => 'Data deleted']);
    exit;
}

echo json_encode(['status' => false, 'message' => 'Invalid action']);
exit;
