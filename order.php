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
                   
                    <a class="dropdown-item" href="#">Name </a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>
    <!-- main  -->
    <div class="container my-4">
      <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4 shadow rounded mt-5 mb-5">
          <h4 class="text-center">Order</h4>
          <hr class="bg-danger" />
          <form action="#" method="POST" >
          <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  aria-describedby="uHelp"
                  name="name"
                  placeholder="Enter name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="reguser">Mobile Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="reguser"
                  aria-describedby="uHelp"
                  name="Mobile"
                  placeholder="Enter Number"
                  required
                />
                <small id="uHelp" class="form-text text-muted"
                  >We'll never share your mobile with anyone else.</small
                >
              </div>
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
                <label for="price">Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  aria-describedby="uHelp"
                  name="price"
                  placeholder="Enter price"
                  required
                />
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  aria-describedby="uHelp"
                  name="address"
                  placeholder="Enter address"
                  required
                />
              </div>
            <div class="form-group">
                <label for="date_order_placed">date_order_placed</label>
                <input
                  type="date_order_placed"
                  class="form-control"
                  id="date_order_placed"
                  aria-describedby="uHelp"
                  name="date_order_placed"
                  placeholder="Enter date_order_placed"
                  required
                />
              </div>
              <div class="form-group">
                <label for="order_status">Order_status</label>
                <input
                  type="order_status"
                  class="form-control"
                  id="order_status"
                  aria-describedby="uHelp"
                  name="order_status"
                  placeholder="Enter order_status"
                  required
                />
              </div>
              <div class="form-group">
                <label for="payment_mode">Payment_mode</label>
                <input
                  type="payment_mode"
                  class="form-control"
                  id="payment_mode"
                  aria-describedby="uHelp"
                  name="payment_mode"
                  placeholder="Enter payment_mode"
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
$name = $_POST['name']; 
$Mobile = $_POST['Mobile'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$address = $_POST['address'];
$date_order_placed = $_POST['date_order_placed'];
$order_status = $_POST['order_status'];
$Payment_mode = $_POST['payment_mode'];
$query ="INSERT INTO `tbl_order`(`name`, `mobile`,`item_name`, `price`, `address`, `date_order_placed`, `order_status`, `payment_mode`) VALUES 
('$name','$Mobile','$item_name','$price','$address','$date_order_placed','$order_status','$payment_mode')";

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
