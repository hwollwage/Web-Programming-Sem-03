<?php
include('Model.php');

class KategoriModel extends Model {
    private $db;
    private $table = 'm_kategori';

    public function __construct() {
        // include the DB connection (relative to model folder)
        include_once('../lib/Connection.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function insertData($data) {
        $query = $this->db->prepare(
            "INSERT INTO {$this->table} (kategori_kode, kategori_nama) VALUES (?, ?)"
        );
        $query->bind_param('ss', $data['kategori_kode'], $data['kategori_nama']);
        $query->execute();
    }

    public function getData() {
        return $this->db->query("SELECT * FROM {$this->table} ORDER BY kategori_id DESC");
    }

    public function getDataById($id) {
        $query = $this->db->prepare(
            "SELECT * FROM {$this->table} WHERE kategori_id = ?"
        );
        $query->bind_param('i', $id);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function updateData($id, $data) {
        $query = $this->db->prepare(
            "UPDATE {$this->table} SET kategori_kode = ?, kategori_nama = ? WHERE kategori_id = ?"
        );
        $query->bind_param('ssi', $data['kategori_kode'], $data['kategori_nama'], $id);
        $query->execute();
    }

    public function deleteData($id) {
        $query = $this->db->prepare(
            "DELETE FROM {$this->table} WHERE kategori_id = ?"
        );
        $query->bind_param('i', $id);
        $query->execute();
    }
}
