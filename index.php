

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Book Store</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- jumbotraon  -->

    <div class="jumbotron text-center">
      <h1 class="display-4">Welcome To Your Book Store</h1>
      <p class="lead badge badge-secondary">Book is your Best Friend</p>
    </div>

    <!-- main  -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4 shadow rounded mt-5 mb-5">
          <h4 class="text-center">Login</h4>
          <hr class="bg-danger" />
          <form action="loginProcess.php" method="POST" >
            <div class="form-group">
              <label for="mob">Mobile Number</label>
              <input
                type="number"
                class="form-control"
                id="mob"
                aria-describedby="mobhelp" name="mobile"
                required
              />
              <small id="mobhelp" class="form-text text-muted"
                >We'll never share your mobile Number with anyone else.</small
              >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1" name="password"
                required
              />
            </div>
            <div class="d-flex justify-content-between mb-3">
              <div>
                <button type="submit" name="submit1" class="btn btn-success">Login</button>
              </div>
              </form>
              <div>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-toggle="modal"
                  data-target="#exampleModal"
                >
                  New Account
                </button>
              </div>
            </div>
          
          <div class="text-center">
            <a href="#">Forget password</a>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    <div class="text-center mt-5 bg-dark">
      <a href="#" class="text-light">Book Store</a>
    </div>



    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              New Account
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" method="POST">
              <div class="form-group">
                <label for="nameuser">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="nameuser"
                  aria-describedby="uHelp"
                  name="Name"
                  placeholder="Enter Name"
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
                <label for="uPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="uPassword1"
                  name="pass"
                  placeholder="Enter password"
                  required
                />
              </div>
              <input type="hidden" name="role" value="user"/>
              <div class="d-flex justify-content-between mb-3 mr-3 ml-3">
                <div>
                  <button type="submit" class="btn btn-primary" name="submit">
                    Sign Up
                  </button>
                
                </div>
                <div>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
          </div>
         </form>
        </div>
      </div>
    </div>



    <?php
      include('dbConnection.php');

    if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Mobile = $_POST['Mobile'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
   
    $sql = "INSERT INTO `tbl_reg`(`name`, `mobile`, `password`, `role`)
     VALUES ('$Name','$Mobile','$pass','$role')";
    echo $sql;
    $run = mysqli_query($con, $sql);
    echo $run;
    if ($run == TRUE) {
        // echo '<script type="text/javascript">';
        // echo 'alert("Registered");';
        // echo 'window.location = "index.php";';
        // echo '</script>';
        echo "Inserted";
    } else {
        echo "Not Inserted";
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
