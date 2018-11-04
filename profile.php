<?php
    session_start();
    require("bootstrap.php");
   // require("conn.php");
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
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">
    <style>
        #post{
            margin-bottom:4vh;
        }

        #imgStyle{
            height:30vh;
             width:30vh; 
             box-shadow:1px 1px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    <img src="shuttergramDefault.png" class="img-thumbnail rounded-circle" alt="" id="imgStyle" >
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
                    <div class="row justify-content-center">
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
            
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4" id="post">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div> 

            <!-- mdbootstrap  -->
            <div class="col-4">
                <div class="view overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="sample image">
                    <div class="mask flex-center rgba-black-strong">
                        <h3 class="white-text text-center">
                        200 <i style='font-size:auto' class='far'>&#xf004;</i>&nbsp;&nbsp;
                        20 <i style='font-size:auto' class='far'>&#xf27a;</i>
                        </h3>
                    </div>
                </div>
            </div>
    </div>
    
     
      
            
    
</body>

<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>