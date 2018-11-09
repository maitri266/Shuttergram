<?php
    session_start();
   if(isset( $_POST['search'])){
    $searchedName= $_POST['search'];
   }
    $username=$_SESSION['username'];
    require("bootstrap.php");
    require("conn.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
<? require("bootstrap.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- for setting logo -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
    <!-- for logout logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
<div class="container-fluid srch">
    <div class="row justify-content-between text-center">
            <div class="col-2 text-left my-auto" >
                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModalCenter"><i style="font-size:24px ; color:gray; " class="fa">&#xf013;</i></button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5  class="modal-title" id="exampleModalLongTitle">Profile Settings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-block btn-sm btn-light">Edit Profile</button>
                            <button class="btn btn-block btn-sm btn-light">Change Password</button>
                            <button class="btn btn-block btn-sm btn-light">Change Email</button>
                            <button class="btn btn-block btn-sm btn-danger">Delete Account</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm ">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form action="$_SERVER['PHP_SELF']" method="post">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Search &nbsp;<i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="search" name="search">
                    </div>
                </form>
            </div>
            
            <div class="col-2  text-right my-auto">
                <button class="btn btn-sm btn-primary" id="logoutBtn">
                    <!-- <i style="font-size:24px" class="fa">&#xf08b;</i> -->
                    Logout
                </button>
            </div>
        </div>
</div>




<br><br><br><br><br><br>
<?php require("footbar.php"); ?>
</body>
</html>