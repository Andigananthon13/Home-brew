<?php 
$path = "./widgets/";
$maincon = $path."maincontent.php";
$mainAbout = $path."mainAbout.php";
$mainMenu = $path."mainMenu.php";
$mainproduct = $path."mainproduct.php";
$mainReview = $path."mainReview.php";
$mainContact = $path."mainContact.php";
$mainblog = $path."mainblog.php";
?>

<section class="home" id="home">

      <div class="content">
                 
          <?php include($maincon) ?>
                </div>

            </section>


            <div class="about" id="about">

            <?php include($mainAbout) ?>

            </div>


            <section class="menu" id="menu">

            <?php include($mainMenu) ?>
            </section>


            <section class="products" id="products">
            <?php include($mainproduct) ?>
            </section>


            <section class="review" id="review">

            <?php include($mainReview) ?>

            </section>


            <section class="contact" id="contact">

            <?php include($mainContact) ?>
            </section>


            <section class="blogs" id="blogs">

            <?php include($mainblog) ?>

</section>