<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php require("bootstrap.php");
          require("conn.php");
    ?>
</head>
<body>
  <!-- login form -->
  <div class="container mx-auto">
  <?php
    if(isset($_POST['loginBtn'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      if(!$conn){
        die("Connection Failed ".mysqli_connect_errno());
      }else{
        $query = "SELECT * from user WHERE username = '$username' && password = '$password'";
        if(mysqli_query($conn,$query)){
          $results = mysqli_query($conn,$query);
          $array = mysqli_fetch_array($results);
          if(count($array) == 0);{ ?>
          <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Username or password incorrect</strong>
          </div>
      <?php
          }
        }else{
          die(mysqli_error());
        }
      }
    }
  ?>

    <div class="card">
      <div class="card-header text-center"><span class="h2">Login</span></div>
      <div class="card-body text-center">
        <div class="form-group text-center">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value=""><br>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
          <input type="submit" value="Login" name="loginBtn" id="loginBtn" class="btn btn-dark btn-lg">
        </div>
      </div>
      <div class="card-footer text-center">
        <div class="h5">Not a member yet ? <a href="register.php" class="btn btn-sm btn-primary">Register Here</a></div>
      </div>
    </div>
</div>
</body>
</html>