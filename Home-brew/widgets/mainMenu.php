<?php
require_once 'dbconfig.php';
$sql = 'SELECT * FROM products';
$all = $conn->query($sql);
?>
<h1 class="heading"> our <span>menu</span></h1>
<div class="box-container">
<?php
while ($row = mysqli_fetch_assoc($all)){
?>
    <div class="box">
        <img src="./images/<?=$row["image"]?>" alt="Photos">
        <h3><?=$row["product_name"]?></h3>
        <div class="price">₱<?=$row["price"]?><span>₱<?=$row["discount"]?></span></div>
        <button class="btn btn-info add-to-cart" 
                data-id="<?=$row["id"]?>" 
                data-name="<?=$row["product_name"]?>" 
                data-price="<?=$row["price"]?>" 
                data-image="<?=$row["image"]?>">Add to cart</button>
    </div>
<?php
}
?>
</div>
<div class="add-menu-btn"><a href="./widgets/new_product.php" class="add-menu">Add menu</a></div>
