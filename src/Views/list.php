<div class="container">
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
                <img src="img/<?php echo $cart['image'] ?>" style="width: 100px" >
            </td>
            <td> <?php echo $cart['colors'] ?> </td>
           <td> <?php echo $cart['category'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>



