<?php
    session_start();
    require("bootstrap.php");
    require("conn.php");
    $myusername= $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <? require("bootstrap.php");
    require("head.php"); ?>
        <!-- for font  -->
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <!-- for setting logo -->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
        <!-- for logout logo -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Document</title>
        <link rel="stylesheet" href="search.css">
    </head>
    <body>
        <?php require("searchbar.php"); ?>
        <h1  class="h text-center">EXPLORE OTHER ACCOUNTS</h1> 
        <div class="container">
        <?php
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
        <br><br><br><br><br><br>
        <?php require("footbar.php"); ?>
    </body>
</html>