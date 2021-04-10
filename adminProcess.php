<?php
error_reporting(0);
  include('dbConnection.php');

  if (isset($_POST['submit'])) {

    $shop_id = $_POST['shop_id'];
    $password = $_POST['password'];
    echo $shop_id;
    echo $password;

    // $sql = "SELECT * FROM tbl_shop WHERE shop_id ='$shop_id' AND shop_password='$password' ";
    $query = mysqli_query($con, "SELECT * FROM tbl_shop WHERE shop_id ='$shop_id' AND shop_password = '$password' ");

    $row = mysqli_fetch_assoc($query);
    $shop = $row['shop_id'];
    $shop_pass= $row['shop_password'];
    // echo $shop;
    // echo $shop_pass;
    if(!$shop&&!$shop_pass){
      echo " not Admin Login";
      echo $shop;
      echo $shop_pass;
    }
    else{
      echo "admin Login";
    }
    
  }
  ?>