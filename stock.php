<?php

include("dbConnection.php");
// $user = $_SESSION['umob1'];
// $name = $_SESSION['name'];
// $role= $_SESSION['role1'];
// $shop_id =$_SESSION['shop_id'];
// echo $shop_id;
// echo $user;
// echo $name;
///// echo $role;


?>
<?php
//delete  data base
if(isset($_GET['del'])){
    $category_id = $_GET['del'];
    $query = "DELETE FROM  tbl_category WHERE category_id= $category_id ";
    $fire = mysqli_query($con,$query) or die("cen not DELETED the Database.".mysqli_error($con));
    if($fire){
        echo " Data Deleted form Database";
    }else{
        echo "Not Delete";
        }
}

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
        /* .pagination {
            padding-left: 280px;
        } */

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
        <a class="navbar-brand" href="admin.php">Book Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="people.php">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="people.php">People</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="problem.php">Problem</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="advertisement.php">Advertisement</a>
                </li>
            </ul>
            <div class="dropdown">
                <img src="img/b10.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Name</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>

    <div class="alert alert-warning" role="alert">
        <div class="d-flex  justify-content-between">
            <div>Total Book</div>
            <div>Total Category</div>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-12">
        <input type="text" class="form-control" placeholder="Enter Book Name/Book Id" id="search_text" name="search">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit" name="submit">Go</button>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h2 class="badge badge-secondary">All Books</h2>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Filter Page</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select</option>
                <option>10</option>
                <option>30</option>
                <option>50</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>

        <div class="table-responsive">
            <h1 align="center">Show Database</h1>
            <table class="table table-hover">
                <thead style=background-color:black; >
                    <tr  style="color:white;">
                        
                        <th>Item Category</th>
                        
                        <th>Dbutton</th>
                        <th>btnupdate</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    
                      <?php
                      $query = "SELECT * FROM tbl_category";
                     $fire = mysqli_query($con,$query);
                     if(mysqli_num_rows($fire)>0){
                        while($user = mysqli_fetch_assoc($fire)){?>
                             <tr>
                              <td><?php echo $user['item_category']?></td>
                             
                            
                             <td>
                             <a  href=" <?php $_SERVER['PHP_SELF']?>?del=<?php echo $user['category_id']?>"
                                    class="btn btn-sm btn-danger" >delete</a>

                             </td>
                             <td>
                             
                             <a class="btn btn-sm btn-warning"
                                     href=" update1.php?upd=<?php echo $user['category_id']?>"
                                     >Update</a>
                             </td>
                             </tr>
                             <?php
                         }
                 }
            ?>
                        
                  
                   
                </tbody>
            </table>
        </div>
    <hr class="bg-Danger">
        <div class="table-responsive">
            <h1 align="center">Show Database</h1>
           <h3>Add Product</h3>
            <table class="table table-hover">
                <thead style=background-color:black;>
                    <tr style="color:white;" >
                        
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Item Category</th>
                        <th>Item Stock</th>
                        <th>item Hompage</th>
                        <th>Dbutton</th>
                        <th></th>
                        <th>btnupdate</th>
                    </tr>
                </thead>
                <tbody>
                    
                      <?php
                      $query = "SELECT * FROM tbl_product ";
                     $fire = mysqli_query($con,$query);
                     if(mysqli_num_rows($fire)>0){
                        while($user = mysqli_fetch_assoc($fire)){?>
                             <tr>
                              <td><?php echo $user['item_name']?></td>
                              <td><?php echo $user['item_price'] ?></td>
                              <td><?php echo $user['item_category'] ?></td>
                              <td><?php echo $user['item_stock'] ?></td>
                              <td><?php echo $user['item_hompage'] ?></td>
                            
                             <td>
                             <a  href="<?php $_SERVER['PHP_SELF']?>?del1=<?php echo $user['item_id']?>"
                                    class="btn btn-sm btn-danger" >Delete</a>

                             </td>
                             <td>
                             <td>
                              <a class="btn btn-sm btn-warning"
                                     href=" update2.php?upd1=<?php echo $user['item_id']?>"
                                     >Update</a>
            
                            </td>
                             
                             </td>
                             </tr>
                             <?php
                         }
                 }
            ?>
                        
                  
                   
                </tbody>
            </table>
        </div>
    
<?php
//delete  data base
if(isset($_GET['del1'])){
    $item_id = $_GET['del1'];
    $query = "DELETE FROM  tbl_product WHERE item_id= $item_id ";
    $fire = mysqli_query($con,$query) or die("cen not DELETED the Database.".mysqli_error($con));
    if($fire){
       echo " Data Deleted form Database";
    }
}


?>



</body>

</html>