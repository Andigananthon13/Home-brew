<?php

class Products{

    public $id;
    public $pname;
    public $price;
    public $image;

    public static $tblName = "products";

        function __construct($pn=null,$pr=null,$im=null){
            $this->pname = $pn;
            $this->price = $pr;
            $this->image = $im;
        }

        public static function search($id){
            require("dbconfig.php");

            $sql = "SELECT * FROM ".self::$tblName.
                    " WHERE id=$id";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $emp = new Products();
                while($row = $result->fetch_assoc()){
                    $emp->id = $row["id"];
                    $emp->pname = $row["product_name"];
                    $emp->price = $row["price"];
                    $emp->image = $row["image"];
                }
                return $emp;
            }else{
                echo "Product not found.";
            }

            
            $conn->close();
        }

        function save(){
            require("../dbconfig.php");
            
            $sql = "INSERT INTO ".self::$tblName." (product_name,price,image) 
                    VALUES ('".$this->pname."',
                            '".$this->price."',
                            '".$this->image."'
                    )";
            if($conn->query($sql) === TRUE){
                header("location: ../index.php");
            }
            else{
                echo "Error while saving data.";
            }
            
            $conn->close();
        }

        function remove(){
            require("./dbconfig.php");
            $sql = "DELETE FROM ".self::$tblName." WHERE id=$this->id";

            if($conn->query($sql)===TRUE){
                header("location: widgets/new_product.php");
            }else{
                echo "Opps! Something went while deleting data.";
            }

            $conn->close();
        }

        function update(){
            require("./dbconfig.php");
            $sql = "UPDATE ".self::$tblName." SET 
                    product_name='$this->pname', 
                    price='$this->price',
                    image='$this->image' 
                    WHERE id=$this->id";
            if($conn->query($sql) === TRUE){
                header("location:index.php");
            }else{
                echo "Opps! Something went wrong while updating.";
            }

            $conn->close();
        }

        public static function getAll(){
            require("../dbconfig.php");

            $sql = "SELECT * FROM ".self::$tblName;
            $result = $conn->query($sql);

            $conn->close();
            return $result;
        }

        

}
?>

