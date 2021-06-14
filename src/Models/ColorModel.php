<?php

namespace App\Models;

class ColorModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAllColor()
    {
        $sql = "SELECT * FROM Colors";
        $stmt = $this->database->query($sql);
        return $data = $stmt->fetchAll();

    }


}

