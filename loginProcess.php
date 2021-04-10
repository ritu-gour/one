<div>
    <?php

    session_start();

    include('dbConnection.php');

    if (isset($_POST['submit1'])) {
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM tbl_reg WHERE mobile ='$mobile' AND password='$password' ";
      $query = mysqli_query($con, $sql);

      $row = mysqli_fetch_assoc($query);
  
      $umob = $row['mobile'];
      $name = $row['name'];
      $pwd = $row['password'];
      $role = $row['role'];
      
      if ($umob == $mobile && $pwd == $password) {
       
        $_SESSION['name'] = $name;
        $_SESSION['umob1'] = $umob;
        $_SESSION['role1'] = $role;


        if ($role === "admin") {

          echo '<script type="text/javascript">';
          echo 'alert("Login Sucess Fully");';
          echo 'window.location = "admin.php";';
          echo '</script>';

        } else if ($role === "user") {
          echo '<script type="text/javascript">';
          echo 'alert("Login Sucess Fully");';
          echo 'window.location = "homepage.php";';
          echo '</script>';
          // echo 'Login';
        }

      } else {
        // echo '<script type="text/javascript">';
        // echo 'alert("User Name And Password Not Matched");';
        // echo 'window.location = "index.php";';
        // echo '</script>';

        echo ' not Login';

      }
    }
    ?>
  </div>
