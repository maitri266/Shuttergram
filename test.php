<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test</title>
        <?php 
            require("bootstrap.php");
            require("conn.php"); ?>
        <!-- for inline icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
        <!-- For Individual Post -->
        <link rel="stylesheet" href="post.css">
    </head>
    <body>
        <div class="container mx-auto w-50">
        <?php
<<<<<<< HEAD
            session_start();    //starting the session      

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
                    die("Query return Unsuccessfull");
                }
         
            }
=======
            session_start();
            $i=0;
                $_SESSION['index'] = $i;
                $_SESSION['username'] = 'User '.$i;
                $_SESSION['caption'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi autem odit reprehenderit culpa dignissimos accusamus, ipsam laborum, inventore delectus odio officia ipsa quos. Quod, hic nam architecto iure voluptate natus nisi nihil debitis vero pariatur consequatur quibusdam totam distinctio sint.";
                include('post.php');
            
>>>>>>> refs/remotes/origin/master
        ?>
        </div>
    </body>
</html>