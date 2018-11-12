<?php
    session_start();
    $username=$_SESSION['username'];
    
    require("bootstrap.php");
    require("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require("head.php"); ?>
    <!-- for inline icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
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
                            <span id="username"><b><?php echo $_SESSION['username']; ?></b></span>
                        </div>
                        <div class="col-3">
                            <a name="editProfile" id="editProfile" class="btn btn-outline-dark btn-sm" href="#" >edit profile</a>
                        </div>
                        <!-- <div class="col-3"></div> -->
                    </div>
                    <br>
                    <div class="row justify-content-center ">
                        <div class="col-2">345<br>followers</div>
                        <div class="col-2"><?php 
                            $query = "SELECT count(media) FROM post WHERE postUser='".$username."'";
                            $result = mysqli_query($conn,$query);
                            $value = mysqli_fetch_assoc($result);
                            echo $value['count(media)'];
                        ?><br>posts</div>
                        <div class="col-2">454<br>following</div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-10">
                        <?php 
                            $query = "SELECT description FROM user WHERE username='".$username."'";
                            $result = mysqli_query($conn,$query);
                            $value = mysqli_fetch_assoc($result);
                            echo $value['description'];
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <hr>
        <div class="container">
            <div class="row row-eq-height" >
                <?php
                    if(!$conn){
                        die("Error connecting to the database. ERROR: ".mysqli_connect_errno());
                    }else{
                        //query for retriving the user posts
                        $postquery = "SELECT * from post WHERE postUser='$username' ORDER BY postTime DESC";
                        $posts = mysqli_query($conn,$postquery);

                        //executing query
                        if(mysqli_num_rows($posts) > 0){ //if query is successful

                            //traversing and displaying user posts
                            while($row = mysqli_fetch_assoc($posts)){
                                $postId = $row['postId'];
                                $queryLikes = "SELECT count(post) from likes WHERE post='$postId'";
                                $resultLikes = mysqli_query($conn,$queryLikes);
                                $resultLikes = mysqli_fetch_assoc($resultLikes);
                                $resultLikes = $resultLikes['count(post)'];

                            ?>
                                 <div class="col-4">
                                    <div class="row justify-content-around">
                                        <div class="col-11 piccon text-center align-items-center">
                                            <div class="imgfix">
                                                <img src="<?php echo $row['media']; ?>" alt="Sorry, this image is unavailable at the moment" class="rounded img-fluid mx-auto" data-postId = "<?php echo $row['postId']; ?>">
                                            </div>
                                            <hr>
                                            <span class="lnc"><i class="far fa-heart" data-liked="0"></i> <?php echo $resultLikes; ?> &nbsp;&nbsp;<i class="far fa-comment-alt"></i> 32</span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } //closing bracket of traversing user posts while loop
                                
                        }else{
                            //if Number of Posts available is 0
                            ?>
                                <div class="container" style="color:white">
                                   <div class="card ">
                                   
                                        <center>
                                            <iframe src="https://giphy.com/embed/iAQ5T6IdeyFn4zkVU5" width="480" height="480" frameBorder="0" class="giphy-embed img-fluid" allowFullScreen></iframe>
                                        </center>
                                        
                                    </div>
                                </div>
                            <?php
                        }
                    }            
                ?>
            </div>
        </div>
        
    </div>
    
    <br><br><br><br><br><br>
    <?php require("footbar.php"); ?>
</body>
</html>