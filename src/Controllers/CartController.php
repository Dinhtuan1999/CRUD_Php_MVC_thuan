<?php

namespace App\Controllers;

use App\Models\CartModel;

class CartController
{
    protected $data;

    public function __construct()
    {
        $this->data = new CartModel();
    }

    public function index()
    {
        $Carts = $this->data->getAll();
//        var_dump($Carts);
        include "src/Views/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'src/Views/add.php';
        } else {
            $productName = $_POST['product_name'];
            $productPrice = $_POST['product_price'];
            $img = $_FILES['image']['name'];
            $img_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $colors = $_POST['colors'];
            $category = $_POST['category'];
            $this->data->add($productName, $productPrice, $colors, $category, $img);
            header('location: index.php?page=list');
        }
    }

}