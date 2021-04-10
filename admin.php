<?php

session_start();
if (isset($_SESSION['umob1'])) {
} else {
  header('location:index.php');
}

$user = $_SESSION['umob1'];
$name = $_SESSION['name'];
$role= $_SESSION['role1'];
// echo $user;
// echo $name;
// echo $role;


?>
<?php

 include("dbConnection.php");
 if(isset($_POST['submit'])){
    $item_category = $_POST['item_category'];
    $img = $_FILES['img']['name'];
    $simg = $_FILES['img']['tmp_name'];
    move_uploaded_file($simg, "img/" . $img);	
 
  
    $query = " INSERT INTO `tbl_category`(`item_category`,`item_image`)
     VALUES ('$item_category','$img')";
     $run = mysqli_query($con,$query) or die("con not insert the dataaz.".mysqli_error($con));
     if($run){
       echo "insert";
     }else{
       echo" not insert";
     }


 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Store</title>
  <!-- bootstarp css  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body class="bg-light">
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Stock.php">Stock</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
                    <a class="nav-link" href="advertisement.php">Advertisement</a>
                </li>
      </ul>
    </div>
    <div class="dropdown">
                <img src="img/b10.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php echo $name?></a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>

  </nav>

  <!-- jumbotraon  -->

  <div class="jumbotron text-center">
    <h1 class="display-4">Welcome To Your Book Store</h1>
    <p class="lead">Book is your Best Friend</p>
  </div>
 

<!-- main  -->
  <div class="container">
    <div class="row">
  <div class="col-sm-4"></div>

    <div class="col-sm-4 shadow rounded mt-5 mb-5">
        <h4 class="text-center"> Add Category</h4>
        <hr class="bg-danger" />
        <form action="#" method="POST">
         
          <div class="form-group">
            <label for="item_category">Item Category</label>
            <input type="text" class="form-control" id="item_category" name="item_category" required />
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="img" accept="image/*" required>
                  <label class="custom-file-label" for="customFile">Add Photo</label>
          </div>
         
          <div class="d-flex justify-content-between mb-3">
            <div>
              <button type="submit" name="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <div class="col-sm-4"></div>
  </div>
  </div>
<hr class="bg-danger"  >

<div class="container">
    <div class="row">
      <div class="col-sm-4"></div>

      <div class="col-sm-4 shadow rounded mt-5 mb-5">
        <h4 class="text-center"> Add Product</h4>
        <hr class="bg-danger" />
        <form action="productprocess.php" method="POST">
         
          <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required />
          </div>
         
          <div class="form-group">
            <label for="item_price">Item Price</label>
            <input type="text" class="form-control" id="item_price" name="item_price" required />
          </div>
          <div class="form-group">
            <label for="item_Category">Item Category</label>
            <input type="text" class="form-control" id="item_category" name="item_category" required />
          </div>
          <div class="form-group">
            <label for="item_stock">Item Stock</label>
            <input type="text" class="form-control" id="item_stock" name="item_stock" required />
          </div>
         
          <div class="form-group">
            <label for="item_brand">Item Brand  </label>
            <input type="text" class="form-control" id="item_brand" name="item_brand" required />
          </div>
          <div class="d-flex justify-content-between mb-3">
            <div>
              <button type="submit" name="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
  </div>




  <div class="text-center mt-5 bg-dark">
    <a href="#" class="text-light">Book Store</a>
  </div>

 
  <!-- js  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>