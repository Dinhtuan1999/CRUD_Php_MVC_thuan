<div class="container">

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <form enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label class="form-group">
                        <h4 >Product Name</h4>
                    </label>
                    <input type="text" class="form-control" name="product_name" required>
                </div>
                <div class="form-group">
                    <label class="form-group">
                        <h4 >Product Price</h4>
                    </label>
                    <input type="number" class="form-control" name="product_price" required>
                </div>
               <div class="form-group">
                   <label class="form-group">              
                         <h4>Img</h4>
                    </label><br>
                     <input type="file" name="image" class="form-control-file" required>
               </div>
                <div class="form-group">
                    <label class="form-group">
                        <h4>Colors</h4>
                    </label>
                    <input type="text" class="form-control" name="colors" required>
                </div>

                <div class="form-group">
                    <label class="form-group">
                        <h4>Category</h4>
                    </label>
                    <input type="text" class="form-control" name="category" required>
                </div>

                <div>
                    <button type="submit" class="btn-outline-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

