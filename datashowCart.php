<?php
include("dbConnection.php")

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

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Book_store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               
            </ul>
            <div class="dropdown">
                <img src="book3.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Name</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>

    <h2 class="text-center my-5"> Cart_Data</h2>

    <div class="container my-3">
       <div class="table-responsive">
            <table class="table table-hover">
                <thead  style=background-color:black;>
                    <tr style="color:white;" >
                        <th  >Item_Name</th>
                        <th>Item_Price</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
                      $query = "SELECT * FROM tbl_cart";
                     $fire = mysqli_query($con,$query);
                     if(mysqli_num_rows($fire)>0){
                        while($user = mysqli_fetch_assoc($fire)){?>
                             <tr>
                              <td><?php echo $user['item_name']?></td>
                              <td><?php echo $user['item_price'] ?></td>
                             
                              
                        </tr>
                             <?php
                         }
                 }
            ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>