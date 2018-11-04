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
    <div class="card postCard">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-1"><img src="Logo Final.png" class="rounded-circle postImg" alt="Profile"></div>
                <div class="col-sm-11 h4 align-self-center postTitle"><?php echo $_SESSION['username']; ?></div>
            </div>
        </div>
        <div class="card-body">
            <img src="bridge.jpg" class="img-fluid" alt="">        
        </div>
        <div class="card-footer">
            <h3>
                <i class='far'>&#xf004;</i>&nbsp;
                <span class="h5">665</span>&nbsp;
                <i  style=";" class='far farCustom'>&#xf27a;</i>
            </h3>
            <a class="h5 username" href="#"><?php echo $_SESSION['username']; ?></a>
            <span class="muted"><?php echo $_SESSION['caption']; ?></small>
            <button class="btn btn-outline-dark btn-sm more" data-target="#caption<?php echo $_SESSION['index']; ?>" class="muted" data-toggle="collapse">more</button>
            <div id="caption<?php echo $_SESSION['index']; ?>" class="collapse">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptate iure dolor, iusto, recusandae non quae, blanditiis incidunt numquam odit voluptatibus minima possimus atque impedit officia nostrum dolore ut ducimus!
            </div>
        </div>
    </div>
</body>
</html>