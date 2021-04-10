<?php

session_start();
 if (isset($_SESSION['umob1'])) {
} else {
 header('location:index.php');
 }

 $user = $_SESSION['umob1'];
$name = $_SESSION['name'];
 $role = $_SESSION['role1'];
// echo $user;
// echo $name;
// echo $role;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <!-- boostrap css  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- js and jquery  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- external css  -->
    <link rel="stylesheet" href="style.css">

    <style>
        @media only screen and (min-width: 667px) {
            .dropdown-menu {
                left: -100px;
            }
        }
    </style>
</head>

<body class="bg-light">







    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
                <li class="nav-item">
                    <a class="nav-link" href="Cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail.html">Product Detail</a>
                </li>

            </ul>
            <div class="dropdown">
                <img src="img/b10.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> <?php echo $name ?> </a>
                    <a class="dropdown-item" href="#"> <?php echo $user ?> </a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>





<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>






<!-- The slideshow -->
<div class="carousel-inner">
<?php
 include("dbConnection.php");

 $query = "SELECT * FROM tbl_advertisement";
 $run= mysqli_query($con,$query);
 
 $x = "active";
    while($fetch = mysqli_fetch_assoc($run))
    { 
      ?>
    <div class="carousel-item <?php echo $x;?>">
    <img src="img/<?php echo $fetch['img_name'];?>" alt="Los Angeles" width="100%" height="500" />
  </div>    
<?php
$x = "";
}
?>

</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<div class="container mt-4">
        <div class="input-group col-sm-12">
            <form > 
            <input type="text" class="form-control" placeholder="Search ..." id="search_text" name="search">
            <div class="input-group-append">
                <a class="btn btn-success" type="submit" name="submit">Go</a>
            </div>
            </form>
        </div>
    </div>
    

    <div class="container mt-4">
        <h4>Deal Of The Day</h4>
        <div class="row">

        
        <?php
                include("dbConnection.php");
                $query = "SELECT * FROM tbl_product  WHERE item_hompage='Deal Of The Day'";
                $run = mysqli_query($con,$query) or die("con not.".mysqli_error($con));
                while($fetch = mysqli_fetch_assoc($run)){
                    
                    ?>
                    <div class="col-sm-4">
                <div class="card mb-3">
                <img src="img/ritu1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <a href="category_show.php?bid=<?php echo $fetch['item_category']; ?>" class="btn btn-primary"><?php  echo $fetch['item_category']?></a>
                </div>
            </div>
            </div>

            <?php
            }

            ?>
            
        </div>
    </div>

    <div class="container mt-4">
        <h4>Top Brand Discount</h4>
        <div class="row">

        
        <?php
                include("dbConnection.php");
                $query = "SELECT * FROM tbl_product  WHERE item_hompage='Top Brand Discount'";
                $run = mysqli_query($con,$query) or die("con not.".mysqli_error($con));
                while($fetch = mysqli_fetch_assoc($run)){
                    
                    ?>
                    <div class="col-sm-4">
                <div class="card mb-3">
                <img src="img/ritu1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <a href="category_show.php?bid=<?php echo $fetch['item_category']; ?>" class="btn btn-primary"><?php  echo $fetch['item_category']?></a>
                </div>
            </div>
            </div>

            <?php
            }

            ?>
            
        </div>
    </div>
    <div class="container mt-4">
        <h4>Popular Book</h4>
        <div class="row">
        <?php
                include("dbConnection.php");
                $query = "SELECT * FROM tbl_product  WHERE item_hompage='Popular Book'";
                $run = mysqli_query($con,$query) or die("con not.".mysqli_error($con));
                while($fetch = mysqli_fetch_assoc($run)){
                    
                    ?>
                    <div class="col-sm-4">
                <div class="card mb-3">
                <img src="img/ritu1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="category_show.php?bid=<?php echo $fetch['item_category']; ?>" class="btn btn-primary"><?php  echo $fetch['item_category']?></a>
                </div>
            </div>
            </div>
            <?php
            }

            ?>
            
        </div>
    </div>

    <div class="container-fluid bg-dark text-light text-center">
        <div class="row">
            <div class="col-sm-4">
                <h1>Contact</h1>
                <p>kasdhf,dfj</p>
            </div>
            <div class="col-sm-4">
                <h2>Address</h2>
                <p>kjdfhlkdjfkd</p>

            </div>
            <div class="col-sm-4">
                <h2>Connect</h2>
                <p>kADHFLIdb,iDG</p>
            </div>

        </div>

    </div>
</body>

</html>