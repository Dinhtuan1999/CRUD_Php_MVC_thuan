<?php

namespace App\Models;

class CategoryModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM Categories";
        $stmt = $this->database->query($sql);
        return $data = $stmt->fetchAll();
    }

}
