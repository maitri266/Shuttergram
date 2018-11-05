<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Timeline</title>
        <?php
            session_start();    //starting the session      
            require("bootstrap.php");
            require("conn.php"); ?>
        <!-- for inline icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
        <!-- For Individual Post -->
        <link rel="stylesheet" href="timeline.css">
    </head>
    <body>

        <?php include("navbar.php"); ?>
        <div class="container mx-auto">
        <?php

            if(!$conn){
                die("Error connecting to the database");
            }else{
                //query for retriving the posts
                $query = "SELECT * from post";
                $posts = mysqli_query($conn,$query);

                //executing query
                if(mysqli_num_rows($posts) > 0){ //if query is successfull

                    //traversing and displaying posts
                    while($row = mysqli_fetch_assoc($posts)){
                        $username = $row['postUser'];
                        $dpquery = "SELECT dp from user WHERE username = '$username'";
                        $result = mysqli_query($conn,$dpquery);
                        $dpvar = mysqli_fetch_assoc($result);
                        $dp = $dpvar['dp'];
                    ?>
                    <div class="card postCard">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-1"><img src="<?php echo $dp; ?>" class="rounded-circle postImg" alt="Profile"></div>
                                <div class="col-sm-11 h4 align-self-center postTitle"><?php echo $row['postUser']; ?></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="bridge.jpg" class="img-fluid" alt="">        
                        </div>
                        <div class="card-footer">
                            <h3>
                                <i class='far'>&#xf004;</i>&nbsp;
                                <span class="h5"><?php echo $row['likes']; ?></span>&nbsp;
                                <i  style=";" class='far farCustom'>&#xf27a;</i>
                            </h3>
                            <a class="h5 username" href="#"><?php echo $row['postUser']; ?></a>
                            <span class="muted"><?php echo substr($row['caption'],0,30); ?></small>
                            <span style = "margin-left : -0.2rem;"id="caption<?php echo $row['postId']; ?>" class="collapse inline">
                                <?php echo substr($row['caption'],30); ?>
                            </span>
                            <button class="btn btn-outline-dark btn-sm more" data-target="#caption<?php echo $row['postId']; ?>" class="muted" data-toggle="collapse">more</button>
                        </div>
                    </div> 
                    <?php
                    } //closing bracket of traversing posts for loop
                        
                }else{
                    //if Number of Posts available is 0
                    ?>
                        <div class="jumbotron jumbotron-fluid">
                            <div class="h2 text-center">
                                No more posts to show
                            </div>
                            <center>
                                <iframe src="https://giphy.com/embed/X8yP0AgGK0GQZaVXz9" frameBorder="0" class="giphy-embed img-fluid"></iframe>
                            </center>
                            <div class="h3 text-center muted">Come Back Later</div>
                        </div>
                    <?php
                }
            }            
        ?>
        </div>
        <br><br><br>
        <?php require("footbar.php"); ?>
    </body>
</html>