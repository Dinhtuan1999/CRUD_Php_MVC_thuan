<?php

use App\Controllers\CartController;

$loader = require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

$cartController = new CartController();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap4/bootstrap.min.css">
    <link href="./assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
    <link rel="stylesheet" href="./assets/css/Style.css">
</head>
<body>
<script src="./assets/js/jquery-3.2.1.min.js"></script>
<script src="./assets/styles/bootstrap4/popper.js"></script>
<script src="./assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="./assets/plugins/greensock/TweenMax.min.js"></script>
<script src="./assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="./assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="./assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="./assets/plugins/easing/easing.js"></script>
<script src="./assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="./assets/js/custom.js"></script>

<?php
    switch ($page) {
        case 'add':
            $cartController->add();
//            var_dump($cartController);die();
            break;
        case 'list':
            $cartController->index();
            break;
        case 'home':
            $cartController->show();
            break;

        case 'detail':
            $id = $_REQUEST['id'];
           $cartController->detail($id) ;
//            var_dump($cartController);die();
            break;
        default :
            $cartController->show();
    }
?>

</body>
</html>