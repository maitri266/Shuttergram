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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        #post{
            margin-bottom:4vh
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="shuttergramDefault.png" class="img-thumbnail rounded" alt="">
                </div>
                <div class="col-8">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <span id="username"><b>siddarthrai</b></span>
                        </div>
                        <div class="col-3">
                            <a name="editProfile" id="editProfile" class="btn btn-outline-dark btn-sm" href="#" >edit profile</a>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-3">345 followers</div>
                        <div class="col-3">145 posts</div>
                        <div class="col-3">454 following</div>
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
            <div class="col-4" id="post">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div> 
            <div class="col-4" id="post">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div> 
            <div class="col-4" id="post">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
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