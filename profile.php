<?php
    session_start();
    require("bootstrap.php");
    require("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- for inline icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile1.css">
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-4 text-center" >
                    <img src="shuttergramDefault.png" class="img-thumbnail rounded-circle" alt="profilepic" id="profilePic">
                </div>
                <div class="col-8 text-center">
                    <div class="row justify-content-center">
                        <!-- <div class="col-3"></div> -->
                        <div class="col-3">
                            <span id="username"><b>siddarthrai</b></span>
                        </div>
                        <div class="col-3">
                            <a name="editProfile" id="editProfile" class="btn btn-outline-dark btn-sm" href="#" >edit profile</a>
                        </div>
                        <!-- <div class="col-3"></div> -->
                    </div>
                    <br>
                    <div class="row justify-content-center ">
                        <div class="col-2">345 followers</div>
                        <div class="col-2">145 posts</div>
                        <div class="col-2">454 following</div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-10">
                       siddarth is fat and cute.He is a teddy, consectetur adipisicing elit. Sint asperiores quibusdam quisquam ipsam voluptate nostrum totam et, nam tenetur! Omnis a aperiam laborum! Accusantium nam laudantium quis, consectetur labore corporis.
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <hr>
        <div class="container">
            <div class="row row-eq-height" >
                <div class="col-4">
                    <div class="row justify-content-around">
                        <div class="col-11 piccon text-center align-items-center">
                            <div class="imgfix">
                                <img src="dummyimg/dumy1.jpg" alt="some post" class="rounded img-fluid mx-auto">
                            </div>
                            <hr>
                            <span class="lnc"><i class="far fa-heart"></i> 233 &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                        </div>
                    </div>
                </div>
                    <div class="col-4">
                        <div class="row justify-content-around">
                            <div class="col-11 piccon text-center my-auto">
                                <div class="imgfix">
                                    <img src="dummyimg/dumy2.jpg" alt="some post" class="rounded img-fluid mx-auto h100">
                                </div>
                                <hr>
                                <span class="lnc"><i class="far fa-heart"></i> 233 &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-around">
                            <div class="col-11 piccon text-center">
                                <div class="imgfix">
                                    <img src="dummyimg/dumy3.jpg" alt="some post" class="rounded img-fluid mx-auto h100">
                                </div>
                                <hr>
                                <span class="lnc"><i class="far fa-heart"></i> 233 &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-around">
                            <div class="col-11 piccon text-center my-auto">
                                <div class="imgfix">
                                    <img src="dummyimg/dumy5.jpg" alt="some post" class="rounded img-fluid mx-auto h100">
                                </div>
                                <hr>
                                <span class="lnc"><i class="far fa-heart"></i> 233 &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-around">
                            <div class="col-11 piccon text-center my-auto">
                                <div class="imgfix">
                                    <img src="dummyimg/dumy4.jpg" alt="some post" class="rounded img-fluid mx-auto h100">
                                </div>
                                <hr>
                                <span class="lnc"><i class="far fa-heart"></i> 233 &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br><br>
    <?php require("footbar.php"); ?>
</body>
</html>