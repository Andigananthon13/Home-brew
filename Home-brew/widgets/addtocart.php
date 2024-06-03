<?php 
    if(isset($_POST["submit"])){
      include_once('../models/Products.php');
        $newProduct = new Products($_POST["product_name"],$_POST["price"],$_POST["image"]);
        $newProduct->save();
    }

?>

<form action="" method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter Productname" name="product_name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter Price" name="price" required>
    </div>
    <div class="col">
      <input type="file" class="form-control" placeholder="Enter Image" name="image" required>
    </div>
    <div class="col">
        <input href="../index.php" type="submit" value="Create new product" name="submit" class="btn btn-primary">
    </div>
  </div>
</form>