<!DOCTYPE html>
<html lang="en">
    <head>
    <?php require("head.php"); ?>
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
            //echo "Timeline.php"
            if(!$conn){
                die("Error connecting to the database");
            }else{
                //query for retriving the posts
                $query = "SELECT * from post ORDER BY postTime DESC";
                $posts = mysqli_query($conn,$query);

                //executing query
                if(mysqli_num_rows($posts) > 0){ //if query is successful

                    //traversing and displaying posts
                    while($row = mysqli_fetch_assoc($posts)){
                        $username = $row['postUser'];
                        $dpquery = "SELECT dp from user WHERE username = '$username'";
                        $result = mysqli_query($conn,$dpquery);
                        $dpvar = mysqli_fetch_assoc($result);
                        $dp = $dpvar['dp'];
                        $postId = $row['postId'];

                        $queryLikes = "SELECT count(post) from likes WHERE post='$postId'";
                        $resultLikes = mysqli_query($conn,$queryLikes);
                        $resultLikes = mysqli_fetch_assoc($resultLikes);
                        $resultLikes = $resultLikes['count(post)'];

                    ?>
                    <div class="card postCard">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-1"><img src="<?php echo $dp; ?>" class="rounded-circle postImg" alt="Profile"></div>
                                <div class="col-sm-11 h4 align-self-center postTitle"><?php echo $row['postUser']; ?></div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <img src="<?php echo $row['media']; ?>" class="img-fluid" alt="Sorry, this image is unavailable at the moment" data-postId = "<?php echo $row['postId']; ?>">        
                        </div>
                        <div class="card-footer">
                            <h3>
                                <i class='far likeBtn' style="" data-liked="0">&#xf004;</i>&nbsp;
                                <span class="h5 likeCount"><?php echo $resultLikes; ?></span>&nbsp;

                                <i class='far commentBtn' style="cursor: pointer;">&#xf27a;</i>
                                <span class="h5">0</span>&nbsp;
                            </h3>
                            <a class="h5 username" href="#"><?php echo $row['postUser']; ?></a>
                            <span class="muted"><?php echo substr($row['caption'],0,1100); ?></small>
                            <span style = "margin-left : -0.2rem;"id="caption<?php echo $row['postId']; ?>" <?php if(strlen($row['caption']) > 1100){ ?>class="collapse inline"<?php } ?>>
                                <?php echo substr($row['caption'],30); ?>
                            </span>
                            <?php if(strlen($row['caption']) > 30){ ?>
                                <!-- <button class="btn btn-outline-dark btn-sm more" data-target="#caption<?php echo $row['postId']; ?>" class="muted" data-toggle="collapse" id="expandCaptionBtn">more</button> -->
                            <?php } ?>
                        </div>
                    </div> <br><br>
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

     
        <script src="script.js"></script>
    </body>
</html>
