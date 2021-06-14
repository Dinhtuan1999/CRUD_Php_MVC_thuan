<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->

</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content header-border d-flex flex-row align-items-center justify-content-start">
                            <div class="header_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png" alt="SmartOSC" class="logo"></a></div>
                            <nav class="main_nav">
                                <ul>
                                    <li>
                                        <a href="index.php?page=home">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list">List Product</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=add">Create Product</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--    content-->

    <div class="newsletter" id="addEmployeeModal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2"  style="margin-top: 130px">
                    <div id="content ">
                        <form method="POST" enctype="multipart/form-data" id="user_form" class="content-form" >
                            <table align="center" class="table" style="width: auto; border-radius: 15px">
                                <thead class="thead-dark">
                                <tr>
                                    <td colspan="2" align="center"><h1 style="margin-top: 8px;">Create Product</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td><input type="text" class="form-control" name="product_name" id="product_name" placeholder="Name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Price</td>
                                    <td><input type="number" class="form-control" name="product_price" id="product_price" placeholder="Price" required></td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>
                                        <?php foreach ($colors as $key => $color): ?>
                                            <div class="list-group-item">
                                                <input type="checkbox" value="<?php echo $color['id_color']; ?>"
                                                       name="color_id" id="color_id"> <?php echo $color['color']; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Categories</td>
                                    <td>
                                        <select name="category_id" id="category_id" size="9" style="width: 342px; padding: 6px 12px"
                                                required multiple>
                                            <?php foreach ($categorys as $key => $category): ?>
                                                <option value="<?php echo $category['id_category']; ?>"> <?php echo $category['category'] ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <input type="file" name="image" id="image" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>
                                        <textarea name="content" id="content" cols="27" rows="5"
                                                  style="width: 342px;padding: 6px 12px;"
                                                  placeholder="Mô tả" required></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a class="btn btn-warning" href="index.php?page=list">End</a>
                                    </td>
                                    <td>
                                        <button style="width: 200px" class="btn btn-primary" id="btn-add"  type="submit">Save</button>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <div class="footer_overlay"></div>
    <footer class="footer">
        <div class="footer_background" style="background-image:url(./assets/images/footer.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                        <div class="footer_logo"><a href="index.php?page=home"><img src="./assets/images/logo.png"
                                                                                    alt="SmartOSC" class="logo"></a>
                        </div>
                        <div class="copyright ml-auto mr-auto">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                        </div>
                        <div class="footer_social ml-lg-auto">
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript">

    $(document).on('click','#btn-add',function(e) {
        // console.log(1);
        var data = $("#user_form").serialize();

        $.ajax({
            data: data,
            type: "post",
            url: "http://localhost/cart/cart/index.php?page=add",

            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $('#addEmployeeModal').modal('hide');
                    alert('Data added successfully !');
                    location.reload();
                }
                else if(dataResult.statusCode==201){
                    alert(dataResult);
                }
            }
        });
    });
</script>
</body>
</html>