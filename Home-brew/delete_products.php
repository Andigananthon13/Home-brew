<?php 
   if(isset($_GET["id"]) && $_GET["id"]){
        include_once("models/Products.php");
        $empID = $_GET["id"];
        //SEARCH DATABASE FOR EMPLOYE
        $emp = Products::search($empID);
        $emp->remove();
   }else{
    header("location: ../new_product.php");
    die();
   }
?>