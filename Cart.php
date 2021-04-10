<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Store</title>
    <!-- bootstarp css  -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
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
            </ul>
            <div class="dropdown">
                <img src="img/ritu1.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> Name</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>
    

    <!-- main  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4 shadow rounded mt-5 mb-5">
          <h4 class="text-center">Cart</h4>
          <hr class="bg-danger" />
          <form action="#" method="POST" >
          <div class="form-group">
                <label for="item_name">item_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="item_name"
                  aria-describedby="uHelp"
                  name="item_name"
                  placeholder="Enter item_name"
                  required
                />
              </div>
            <div class="form-group">
                <label for="item_price">item_price</label>
                <input
                  type="item_price"
                  class="form-control"
                  id="item_price"
                  aria-describedby="uHelp"
                  name="item_price"
                  placeholder="Enter item_price"
                  required
                />
              </div>
            <div class="d-flex justify-content-between mb-3">
            <div class="d-flex justify-content-between mb-3 mr-3 ml-3">
                <div>
                  <button type="submit" class="btn btn-primary" name="submit">
                    submit
                  </button>
                
                </div>
                <div>
              </form>
             
            </div>
          
          
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>


    <?php

include("dbConnection.php");
if(isset($_POST['submit'])){
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];


$query ="INSERT INTO `tbl_cart`( `item_name`, `item_price`) VALUES 
('$item_name','$item_price')";

$run = mysqli_query($con,$query);
if($run){
    echo " submited the database";

}else{
    echo "not insert";
}

}

?>

    
    
      
    <!-- js  -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
