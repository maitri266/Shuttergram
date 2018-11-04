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
</head>
<body>
    <div class="card postCard w-50">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-1"><img src="Logo Final.png" class="rounded-circle postImg" alt="Profile"></div>
                <div class="col-sm-11 h4 align-self-center postTitle">&nbsp;&nbsp;&nbsp;Username</div>
            </div>
        </div>
        <div class="card-body">
            <img src="bridge.jpg" class="img-fluid" alt="">        
        </div>
        <div class="card-footer">
            <h3><i class='far'>&#xf004;</i>&nbsp;&nbsp;
            <i  style=";" class='far farCustom'>&#xf27a;</i></h3>
            <p class="h5">665 likes</p>
            <a class="h5 username" href="#"><?php echo "username"; ?></a>
            <span class="muted">Lorem ipsum dolor sit amet. </small>
            <a href="#caption" class="muted" data-toggle="collapse">more</a>
            <div id="caption" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
</body>
</html>