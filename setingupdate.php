<?php
include("dbConnection.php");


if(isset($_GET['upd3'])){
    $mobile =$_GET['upd3'];
    $query  = "SELECT *FROM  tbl_reg WHERE mobile= $mobile ";
    $fire = mysqli_query($con,$query) or die("can not the data selected.".mysqli_error($con));
    if($fire)
    $user = mysqli_fetch_assoc($fire);
   
}
//Data Delete

  if(isset($_POST['sesubmit'])){

 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $password=$_POST['password'];
 $role=$_POST['role'];
 $query = " UPDATE tbl_reg SET name='name', mobile='$mobile', password='$password' ,role='$role' WHERE  mobile= $mobile";
    $fire = mysqli_query($con ,$query) or die("can not update the database.".mysqli_error($con));

if($fire){
 // echo "data update the succesfully";
header("location:index.php") ;
}else
{
  echo "Not Update";
}
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </div>
</nav>


<div class="container">
    <div class="row">
  <div class="col-sm-4"></div>

    <div class="col-sm-4 shadow rounded mt-5 mb-5">
    <form  action="#" method="POST">
         
         <div class="form-group">
           <label for="name"> Name</label>
           <input   value= "<?php echo $user ['name']?>" type="text" class="form-control" id="name" name="name" placeholder="name" required />
         </div>
        
         <div class="form-group">
           <label for="mobile">mobile</label>
           <input  value= "<?php echo $user ['mobile']?>" type="text" class="form-control" id="mobile" name="mobile"placeholder="mobile"  required />
         </div>
         <div class="form-group">
           <label for="password">password</label>
           <input value= "<?php echo $user ['password']?>"  type="password" class="form-control" id="password" name="password" placeholder="password" required />
         </div>
         <input type="hidden" value= "<?php echo $user ['role']?>"   name="role" value="user"/>
         <div class="d-flex justify-content-between mb-3">
           <div>
             <button type="sesubmit" name="sesubmit" class="btn btn-success">update</button>
           </div>
         </div>
       </form>
</div>


      </div>
    </div>
<div>



<hr>
<div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>