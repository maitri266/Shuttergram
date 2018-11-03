<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="register.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <?php require("bootstrap.php");
          require("conn.php");
    ?>
</head>
<body>
  
  <div class="container mx-auto">
  <?php
    if(isset($_POST['registerBtn'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      if(!$conn){
        die("Connection Failed ".mysqli_connect_errno());
      }else{
        if(!($name="") || !($username="") || !($email="") || !($password=""))
        $query = "INSERT INTO user(name,email,username,password) VALUES('$name','$email','$username','$password')";
        if(mysqli_query($conn,$query)){
           ?>
          <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Successfully Registered</strong>
          </div>
      <?php
          }else{
          die(mysqli_error($conn));
        }
      }
    }
  ?>
  <!-- REGISTER form -->
    <div class="card">
      <div class="card-header text-center"><span class="h2">Register</span></div>
      <div class="card-body text-center">
        <div class="form-group text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
          <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required><br>
          <input type="text" name="email" id="email" class="form-control" placeholder="Email Id" value="" required><br>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="" required><br>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required><br>
          <input type="submit" value="Register" name="registerBtn" id="registerBtn" class="btn btn-dark btn-lg">
        </div>
      </div>
      <div class="card-footer text-center">
        <div class="h5">Already a member ? <a href="index.php" class="btn btn-sm btn-primary">Login Here</a></div>
      </div>
    </div>
</div>
</body>
</html>