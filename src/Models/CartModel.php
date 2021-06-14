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
        $sql = "SELECT * FROM Products JOIN Colors ON Products.color_id = Colors.id_color JOIN Categories ON Products.category_id = Categories.id_category";

        $stmt = $this->database->query($sql);

        return $stmt->fetchAll();

    }

    public function getPage()
    {
        $paging = 8;
        if (isset($_GET["pages"])){
            $pages = $_GET["pages"];
            settype($pages, "int");
        }else{
            $pages = 1;
        }
        $form = ($pages - 1) * $paging;
        $sql = "SELECT * FROM `Products` LIMIT $form,$paging";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        return $data;
       }

    public function getByProduct($id)
    {
        $sql = "SELECT * FROM Products JOIN Colors ON Products.color_id = Colors.id_color JOIN Categories ON Products.category_id = Categories.id_category WHERE Products.id LIKE :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function pageProduct(){
        $sql = "SELECT * FROM `Products`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $numberPage = ceil(count($data) / 8);
        return $numberPage;
    }

    public function add($productName,$productPrice,$colors,$category, $img, $content )
    {

        $sql = "INSERT INTO `Products`( `name`, `price`, `color_id`, `category_id`, `image`, `content`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$productName);
        $stmt->bindParam(2,$productPrice);
        $stmt->bindParam(3,$colors);
        $stmt->bindParam(4,$category);
        $stmt->bindParam(5, $img);
        $stmt->bindParam(6, $content);
        $stmt->execute();
//        var_dump($stmt);die;
    }

    public function search($search)
    {
        $sql ="SELECT * FROM Products JOIN Colors ON Products.color_id = Colors.id_color JOIN Categories ON Products.category_id = Categories.id.category WHERE Products.id LIKE :id;";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":id" ,'%'. $search .'%' );
        $stmt->execute();
        return $stmt->fetchAll();
    }
}