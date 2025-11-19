<?php
abstract class Model {
    // insertData expects an array $data in implementations
    public abstract function insertData($data);
    public abstract function getData();
    public abstract function getDataById($id);
    public abstract function updateData($id, $data);
    public abstract function deleteData($id);
}
