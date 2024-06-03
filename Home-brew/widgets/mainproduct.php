<!-- 
<h1 class="heading"> Latest <span>products</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product.jpg" alt="">
        </div>
        <div class="content">
            <h3>Arctic Coffee</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱499 <span>₱510</span></div>
        </div>
    </div>

    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product.jpg" alt="">
        </div>
        <div class="content">
            <h3>Red Oak Roaster</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱640 <span>₱700</span></div>
        </div>
    </div>
    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product.jpg" alt="">
        </div>
        <div class="content">
            <h3>Origines</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱500 <span>₱530</span></div>
        </div>
    </div>
    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product-4.jpg" alt="">
        </div>
        <div class="content">
            <h3>Iced Mocha</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱70</div>
        </div>
    </div>
    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product-5.jpg" alt="">
        </div>
        <div class="content">
            <h3>Caramel Macchiato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱70</div>
        </div>
    </div>
    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="images/product-6.jpg" alt="">
        </div>
        <div class="content">
            <h3>Muscovado Latte</h3>
            <div class="stars">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱75</div>
        </div>
    </div>

</div> -->


<?php

require_once 'dbconfig.php';
$sql = 'SELECT * FROM latest_products';
$all = $conn->query($sql);

?>
<h1 class="heading"> Latest <span>product</span></h1>
<div class="box-container">

<?php

    while ($row = mysqli_fetch_assoc($all)){


    ?>
     
     <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="<?=$row['image']?>" alt="">
        </div>
        <div class="content">
            <h3><?=$row['name']?></h3>
            <div class="stars">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱<?=$row['price']?><span>₱<?=$row['discount']?></span></div>
        </div>
    </div>

    <?php
}
?>
</div>
