<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div>
    <a href="index.php?page=list-library">Home</a>
</div>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <form enctype="multipart/form-data" action="index.php?page=add" method="post">
                <div class="form-group">
                    <label class="form-group">
                        <h4 >product_name</h4>
                    </label>
                    <input type="text" class="form-control" name="product_name">
                </div>
                <div class="form-group">
                    <label class="form-group">
                        <h4 >Product_price</h4>
                    </label>
                    <input type="text" class="form-control" name="Product_price" >
                </div>
<!--                <div class="form-group">-->
<!--                    <label class="form-group">-->
<!--                        <h4 style="color: #FFFFFF">Img</h4>-->
<!--                    </label><br>-->
<!--                    <input type="file" name="img">-->
<!--                </div>-->
                <div class="form-group">
                    <label class="form-group">
                        <h4>colors</h4>
                    </label>
                    <input type="text" class="form-control" name="colors" >
                </div>

                <div class="form-group">
                    <label class="form-group">
                        <h4>category</h4>
                    </label>
                    <input type="text" class="form-control" name="category" >
                </div>

                <div>
                    <button type="submit" class="btn-outline-success">CREATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>