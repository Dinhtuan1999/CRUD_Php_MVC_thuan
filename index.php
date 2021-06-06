<?php

use App\Controllers\CartController;

$loader = require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

$cartController = new CartController();

var_dump(1);
die();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
switch ($page) {
    case 'add':
        $cartController->add();
        break;
    case 'list':
        $cartController->index();
        break;

    default :
        $cartController->index();
}
?>

</body>
</html>