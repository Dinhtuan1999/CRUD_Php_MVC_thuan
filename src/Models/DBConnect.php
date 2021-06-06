<?php

namespace App\Models;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=quan_ly_cua_hang';
        $this->username = 'root';
        $this->password = '123456789';
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
           return $e->getMessage();
            exit();
        }
    }
}