<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login/css/main1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php 
      session_start();
      require("../bootstrap.php");
      require("../conn.php");
      require("../loginlinks.php");
    ?>
</head>
<body>
<?php
if(!empty($_SESSION['name']) && !empty($_SESSION['username']) && !empty($_SESSION['email']) && !empty($_SESSION['dp'])){
	header("Location:..\\timeline.php");
};
?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
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
					header("Location:..\\timeline.php");
				  }
				}else{
				  die(mysqli_error());
				}
			  }
			}
		  ?>
		
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
					<span class="login50-form-title p-b-32 p-t-27">
						Welcome to shuttergram!
					</span>
					
					<span class="login100-form-title p-b-50 p-t-0">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100"  type="text" name="username" id="username" placeholder="Username" value="">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password"  placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="loginBtn" id="loginBtn" >
						login</button>
					</div>

					<div class="text-center p-t-50">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
						<br>
						<a class="txt1" href="#">
							New here? Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>