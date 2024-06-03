



<?php
$allitems = [
         ["image"=>"./images/blog-1.jpeg","title"=>"Merry christmas & happy New year",
         "pan"=>"by Homebrew Cafe admin","pan1"=>"Coffee is always a good idea.",
         "pan2"=>"read more"],

         ["image"=>"./images/blog-2.jpeg","title"=>"Grand Opening of HomeBrew cafe",
         "pan"=>"by Homebrew Cafe admin","pan1"=>"There is always time for Coffee.",
         "pan2"=>"read more"],

         ["image"=>"./images/blog-3.jpeg","title"=>"Happy Anniversary Homebrew Cafe",
         "pan"=>"by Homebrew Cafe admin","pan1"=>"Anytime is Coffee time.",
         "pan2"=>"read more"]

];

?>
<h1 class="heading"> our <span>blogs</span> </h1>

<div class="box-container">
<?php

  foreach($allitems as $index => $i){


    ?>
      <div class="box">
        <div class="image">
            <img src="<?=$i["image"]?>" alt="">
        </div>
        <div class="content">
            <a href="#" class="title"><?=$i["title"]?></a>
            <span><?=$i["pan"]?></span>
            <p><?=$i["pan1"]?></p>
            <a href="#" class="btn"><?=$i["pan2"]?></a>
        </div>
    </div>
    <?php
  }
?>
</div>