<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=add">Thêm</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loại
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ngôn Tình</a>
            </li>
        </ul>00
    </div>
</nav>


<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">IMG</th>
        <th scope="col">Colors</th>
        <th scope="col">Category</th>


    </tr>
    </thead>
    <tbody>
    <?php
//    $Carts = $this->cartModel->getAll();
    foreach ($Carts as $key => $cart): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td> <?php echo $cart['product_name'] ?> </td>
            <td> <?php echo $cart['product_price'] ?> </td>
            <td style="width: 100px">
                <img src="img/<?php echo $cart['img'] ?>" style="width: 100px" >
            </td>
            <td> <?php echo $cart['colors'] ?> </td>
           <td> <?php echo $cart['category'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!--giao dien-->
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="../../img/hawei.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" >
                    <div class="card-body" style="text-align: center ">
                        <p class="card-text">Hauwei</p>
                        <p class="card-text">1200$</p>
                        <p class="card-text">Red</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end giao dien-->
<footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>