 
 <?php
$path = "./widgets/";
$navbar = $path."navbar.php";
$navIcon = $path."navIcon.php";
$navcart = $path."navcart.php";
$navlogo = $path."navLogo.php";
?>

           <?php include($navlogo)?>
            
            <?php include($navbar)?>

            <?php include($navIcon)?>

            <div class="cart-items-container">
                <?php include($navcart) ?>
            </div>
