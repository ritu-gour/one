<?php
    require("config.php");
    if(isset($_GET['upd'])){
        $id = $_GET['upd'];

        $query = "SELECT * FROM tb_php WHERE id = $id";
        $fire = mysqli_query($con,$query) or die("can not the fetch the data.".mysqli_error($con));

        if($fire)
       // echo "we got the data";
       $user = mysqli_fetch_assoc($fire);
     //  echo $user['fullname'];
    }
     //----update data
  
  
     if(isset($_POST['btnupdate'])){
         $fullname = $_POST['fullname'];
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = md5($_POST['password']);

         $query = "UPDATE tb_php SET fullname='$fullname',username='$username',email='$email',
         password='$password' WHERE id=$id";
         $fire = mysqli_query($con,$query) or die("can not the update the data.".mysqli_error($con));
         if($fire)  
         header("location:rituindex.php");
         //echo "data update the successfully";
           

     


    }
 
?>
<!DOCTYPE html>
<html lang="en">
<heead>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
           <!-----signup from-->
    <div class="col-lg-4 col-lg-offset-4 " >
    <h3>update data</h3>
    <hr>
    
    <form name="signup" id="signup" action="#" method="POST">

    <div class="form-group">
    <label for="fullname" >Fullname</label>
    <input  value="<?php echo $user['fullname']?>" type="text" class="form-control" id="fullname" placeholder="fullname" name="fullname" >
  </div>
  <div class="form-group">
    <label for="username" >Username</label>
    <input value="<?php echo $user['username']?>" type="text"class="form-control" id="username" placeholder="username"  name="username" >
  </div>

  <div class="form-group">

    <label for="email" >Email address</label>
    <input value="<?php echo $user['email']?>"   type="email"  class="form-control" id="email" placeholder="email" name="email" >
   </div>
   
 
  <div class="form-group">
    <label for="password"> NEW Password</label>
    <input type="password" class="form-control" id="password" placeholder=" NEW password" name="password"  >
  </div>
 <div class="form-group">
 <button name="btnupdate" id="btnupdate" class="btn btn-primary btn-block">update</button>
 </div>
  
</form>
    </div>
    </div> 
    </div>
    </div>
    </div>





</body>
</html>