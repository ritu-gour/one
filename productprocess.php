<?php

include("dbConnection.php");
if(isset($_POST['submit'])){
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_category = $_POST['item_category'];
$item_stock = $_POST['item_stock'];

$item_brand = $_POST['item_brand'];

$query ="INSERT INTO `tbl_product`( `item_name`, `item_price`, `item_category`, `item_stock`,  
 `item_brand`) VALUES 
('$item_name','$item_price','$item_category','$item_stock','$item_brand')";

$run = mysqli_query($con,$query);
if($run){
    echo " submited the database";

}else{
    echo "not insert";
}

}

?>