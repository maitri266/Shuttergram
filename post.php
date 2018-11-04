<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <?php require("bootstrap.php") ?>
     <!-- for inline icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="post.css">


    <style>
        #cap{
            white-space: nowrap; 
            width: 45vw; 
            overflow: hidden;
            text-overflow: ellipsis; 
            word-wrap: break-word;
        }

     #cap:hover {
         overflow: visible;
         white-space: wrap; 
         word-wrap: break-word;
     }
    </style>
</head>
<body>
    <div class="card postCard">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-1"><img src="shuttergram.png" class="rounded-circle postImg" alt="Profile"></div>
                <div class="col-sm-11 h4 align-self-center postTitle"><?php echo $_SESSION['username']; ?></div>
            </div>
        </div>
        <div class="card-body">
            <img src="bridge.jpg" class="img-fluid" alt="">        
        </div>
        <div class="card-footer">
            <h3>
                <i class='far'>&#xf004;</i>&nbsp;
                <span class="h5 my-auto">665</span>&nbsp;
                <i class='far farCustom'>&#xf27a;</i>
            </h3>
            <a class="h5 username" href="#"><?php echo $_SESSION['username']; ?></a>
            <div id="cap"><span class="muted"><?php echo $_SESSION['caption']; ?></span></div>
        </div>
    </div>
</body>
</html>