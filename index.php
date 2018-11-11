<!DOCTYPE html>
<html lang="en">
<head>
  <?php require("head.php"); ?>
<link rel="stylesheet" href="index.css">
    <?php 
      session_start();
      require("bootstrap.php");
      require("conn.php");
    ?>
</head>
<body>
  <?php
    if(!empty($_SESSION['name']) && !empty($_SESSION['username']) && !empty($_SESSION['email']) && !empty($_SESSION['dp'])){
		header("Location:timeline.php");
	};
  ?>
  <!-- login form -->
  <div class="container align-items-center">
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
          $array = mysqli_fetch_array($results,MYSQLI_ASSOC);
          if($array == NULL){ ?>
          <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Cannot find an account with the specified credentials</strong>
          </div>
      <?php
          }else{
            session_start();
            $_SESSION['name'] = $array['name'];
            $_SESSION['username'] = $array['username'];
            $_SESSION['email'] = $array['email'];
            $_SESSION['dp'] = $array['dp'];
            header("Location:timeline.php");
          }
        }else{
          die(mysqli_error());
        }
      }
    }
  ?>

    <div class="row justify-content-center">
      <div class="col-sm-7 col-lg-6">
      <div class="card">
      <div class="card-header text-center"><span class="h2">Login</span></div>
      <div class="card-body text-center">
        <div class="form-group text-center">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value=""><br>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
          <input type="submit" value="Login" name="loginBtn" id="loginBtn" class="btn btn-block btnbg">
        </div>
      </div>
      <div class="card-footer text-center">
        <div class="h5">Not a member yet ? <a href="register.php" class="btn btn-sm btnbg">Register Here</a></div>
      </div>
    </div>
      </div>
    </div>
</div>
</body>
</html>