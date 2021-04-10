<?php

session_start();
 if (isset($_SESSION['umob1'])) {
} else {
 header('location:index.php');
 }

 $user = $_SESSION['umob1'];
$name = $_SESSION['name'];
 $role = $_SESSION['role1'];

 $bid1 = $_GET['bid'];
//  echo $bid1;
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Books</title>
  </head>
  <body>


<div >
<div class="container ">
<div class="input-group mb-3 my-2 ">
 <input type="text" class="form-control" placeholder="search:Enter name"    aria-label="search:Name" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-info " type="button" id="button-addon2">Go</button>
  </div>
 </div> 
 <hr class="bg-danger" > 
<div class="container my-5" >
    <div class="row ">
    <?php
                include("dbConnection.php");
                $query = "SELECT * FROM tbl_product  WHERE item_category = '$bid1'";
                $run = mysqli_query($con,$query) or die("con not.".mysqli_error($con));
                while($fetch = mysqli_fetch_assoc($run)){
                    
                    ?>
                    <div class="col-sm-4">
                <div class="card mb-3">
                <img src="img/ritu1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category Name : <?php  echo $fetch['item_category']?></h5>
                    <p class="card-title">Product Name : <?php  echo $fetch['item_name']?></p>
                    <p class="card-title">Product Price : <?php  echo $fetch['item_price']?></p>
                </div>
            </div>
            </div>

            <?php
            }

            ?>
      <div class="col-sm-3">
      <div class="card" style="width: 15rem;">
        <div class="card" style="width:15rem">
      <img class="card-img-top" src="image/b1.jpg" alt="Card image">
    
  </div>
    </div>
  </div>
 


<hr class="bg-danger" > 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>