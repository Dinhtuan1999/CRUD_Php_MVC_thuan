<?php

namespace App\Controllers;

use App\Models\CartModel;
use  App\Models\ColorModel;
use  App\Models\CategoryModel;

class CartController
{
    protected $data;
    protected $color;
    protected $category;

    public function __construct()
    {
        $this->color = new ColorModel();
        $this->category = new CategoryModel();
        $this->data = new CartModel();

    }

    public function index()
    {
        $Carts = $this->data->getAll();
//        var_dump($Carts);
        include "src/Views/list.php";
    }

    public function detail ($id)
    {
        $id = $_REQUEST['id'];
        $details = $this->data->getByProduct($id);
//        print_r($details);
//        die();
        include "src/Views/detail.php";
    }

    public function show()
    {
        $Carts = $this->data->getPage();
        $products = $this->data->getPage();
        $numberPages = $this->data->pageProduct();
        $colors =$this->color->getAllColor();
        $categorys = $this->category->getAllCategory();
        include "src/Views/home.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $colors =$this->color->getAllColor();
            $categorys = $this->category->getAllCategory();
//                      var_dump($categorys);die;
            include 'src/Views/add.php';
        } else {
            $productName = $_POST['product_name'];

            $productPrice = $_POST['product_price'];
            $colors = $_POST['color_id'];
            $category = $_POST['category_id'];
            $img = $_FILES['image']['name'];
            $img_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $content = $_POST['content'];

            $this->data->add($productName, $productPrice, $colors, $category, $img, $content);
            header('location: index.php?page=list');
        }
    }

    public function search ()
    {

    }
}