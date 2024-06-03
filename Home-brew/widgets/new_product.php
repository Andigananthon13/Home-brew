<?php
      include_once('../models/Products.php');

    if(isset($_POST["submit"])){
        $newProduct = new Products($_POST["product_name"],$_POST["price"],$_POST["image"]);
        $newProduct->save();
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Brew | Mati City</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href=" ../new_product.css">
</head>
<body>
<div class="nav">
<h2>Add Product</h2>
<a href="../index.php"><img src="../images/logo.png" alt=""></a>
</div>
<div class="container-form">
<form method="POST">
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
      <input type="submit" value="Create new product" name="submit" class="btn btn-primary">
    </div>
  </div>
</form>

</div>

<div class="container mt-5">
        <div class="list">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- START MAO NI ATONG E LOOP UNYA -->
                <?php
                    $result  = Products::getAll();

                    if($result->num_rows > 0){
                         while($row = $result->fetch_assoc()){
                ?>
                    <tr> 
                        <td><?=$row["id"]?></td>
                        <td><?=$row["product_name"]?></td>
                        <td>₱<?=$row["price"]?></td>
                        <td><img src=" ../images/<?=$row["image"]?>"></td>
                        <td>
                            <a class="btn btn-primary" href="../update_products.php?id=<?=$row["id"]?>">Edit</a>
                            <a class="btn btn-danger" href="../delete_products.php?id=<?=$row["id"]?>">Delete</a>
                        </td>
                    </tr>
                  <?php
                        } //CLOSING SA WHILE
                    } // CLOSING SA IF
                  ?>
                <!-- END MAO NI ATONG E LOOP UNYA -->
            </table>
        </div>
    </div>
    <div id="back">
    <a class="btn btn-light" href="../index.php">Back</a>
    </div>

</body>
</html>