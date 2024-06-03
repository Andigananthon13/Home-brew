<?php 
    include_once("models/Products.php");
    if(isset($_GET["id"]) && $_GET["id"]){
        $empID = $_GET["id"];
        //SEARCH DATABASE FOR EMPLOYE
        $emp = Products::search($empID);

        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $emp->pname = $_POST["product_name"];
            $emp->price = $_POST["price"];
            $emp->image = $_POST["image"];

            $emp->update();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Brew | Mati City</title>
    <link rel="stylesheet" href="update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

        
        <div class="form">
            <div class="form-con">
                <form action="update_products.php?id=<?= $empID ?>" method="POST">
                    <div>
                        <label for="product_name">Product name:</label>
                        <input value=<?= $emp->pname ?> type="text" class="form-control" placeholder="Enter Product name" name="product_name">
                    </div>
                    <div>
                        <label for="price">Price:</label>
                        <input value=<?= $emp->price ?>  type="text" class="form-control"  placeholder="Enter Lastname" name="price">
                    </div>
                    <div>
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" value=<?= $emp->image ?> class="form-control"  id="" placeholder="Enter Image" name="image">
                    </div>
               
                    <button type="submit" class="btn btn-primary">Update Product Record</button>
                    <a href="widgets/new_product.php" type="submit" class="btn btn-light">Back</a>
                </form>
            </div>
        </div>
</body>
</html>