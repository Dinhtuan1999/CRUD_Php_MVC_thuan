<?php

namespace App\Models;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=demo';
        $this->username = 'root';
        $this->password = '123456';
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