<?php
namespace App\Models;

class CartModel {
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
        $this->database->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }

    public function getAll ()
    {
        $sql = "SELECT * FROM carts ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function add($productname,$productprice,$colors,$category, $img )
    {
        $sql = "INSERT INTO `carts`( `product_name`, `product_price`, `colors`, `category`, `image`) VALUES (?,?,?,?, ?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$productname);
        $stmt->bindParam(2,$productprice);
        $stmt->bindParam(3,$colors);
        $stmt->bindParam(4,$category);
        $stmt->bindParam(5, $img);
        $stmt->execute();
    }

}