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
        if (!empty($_POST['product_name'])
            && !empty($_POST['product_price'])
            && !empty($_FILES['colors'])
            && !empty($_POST['category'])
            && !empty($_POST['img'])
        ) {
            $productName = $_POST['product_name'];
            $productPrice = $_POST['product_price'];
//            $img = $_FILES['img']['name'];
//            $img_tmp = $_FILES['img']['tmp_name'];
//            move_uploaded_file($img_tmp, 'img/' . $img);
            $colors = $_POST['colors'];
            $category = $_POST['category'];
            $this->data->add($productName, $productPrice, $colors, $category);
            header('location: index.php');
        } else {
            include "src/Views/add.php";
        }
    }

}