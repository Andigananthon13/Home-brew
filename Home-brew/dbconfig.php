<?php

    $servername = "localhost";
    $name = "root";
    $password = "";
    $dbname = "ecommerce_store";

    $conn = new mysqli($servername,$name,$password,$dbname);

    if ($conn->connect_error){ 

        die("Opps! an error occured : ".$conn->connect_error);
    
    }
    
?>