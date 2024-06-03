<nav class="navbar">
         
<?php
$path = "./src/";
$item = file($path."nav.txt");


foreach($item as $i){
 list($text,$list) = explode(",",$i);

?>
<a href="<?=$list?>"><?=$text?></a>
<?php


}

?>
</nav>

