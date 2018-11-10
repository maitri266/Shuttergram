<?php
    session_start();
    require("bootstrap.php");
    require("conn.php");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<? require("bootstrap.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- for setting logo -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
    <!-- for logout logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
<div class="container-fluid srch">
    <div class="row justify-content-between text-center">
            <div class="col-2 text-left my-auto" >
                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModalCenter"><i style="font-size:24px ; color:gray; " class="fa">&#xf013;</i></button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5  class="modal-title" id="exampleModalLongTitle">Profile Settings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-block btn-sm btn-light">Edit Profile</button>
                            <button class="btn btn-block btn-sm btn-light">Change Password</button>
                            <button class="btn btn-block btn-sm btn-light">Change Email</button>
                            <button class="btn btn-block btn-sm btn-danger">Delete Account</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm ">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" placeholder="search by username or fullname" aria-describedby="inputGroup-sizing-sm" id="searchedName" name="searchedName">
                       
                        <button type="submit" name="search" id="search" class="btn btn-light btn-sm pad"><small>search</small></button>
                    </div>       
                </form>
            </div>
           
            <div class="col-2  text-right my-auto">
                <button class="btn btn-sm btn-primary" id="logoutBtn">
                    <!-- <i style="font-size:24px" class="fa">&#xf08b;</i> -->
                    Logout
                </button>
            </div>
        </div>
</div>

 <?php 
                   if(isset( $_POST['search']) && $_POST['searchedName']!==''){
                 $searchedName= $_POST['searchedName'];
                 if(!$conn){
                     die("Error connecting to the database. ERROR: ".mysqli_connect_errno());
                 }else{
             
                   $query= 'SELECT * FROM user';  
                   $result = mysqli_query($conn, $query);
                   $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
                   $flag=0;
                     foreach($arr as $userinfo){
                         if( strtolower($userinfo['username']) ===  strtolower($searchedName) ||  strtolower($userinfo['name'])===  strtolower($searchedName)){
                             $flag=1;
                             $_SESSION['username']=$searchedName;
                            //  header('Location: profile.php');
                         }
                     }   
                     if($flag==0){
                         echo("<script>alert('no such user with name or username as $searchedName found.')</script>");
                     }

                    //  echo "alert('working fine')";
                   mysqli_free_result($result);
                   mysqli_close($conn);
                 }
                 $_POST['search']='';
                 $_POST['searchedName']='';
                }
            ?>

<!-- ------------timelinecontent-------------- -->
    <div class="container mx-auto">
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
                    <br>
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
                            <span class="muted"><?php echo substr($row['caption'],0,30); ?></small>
                            <span style = "margin-left : -0.2rem;"id="caption<?php echo $row['postId']; ?>" <?php if(strlen($row['caption']) > 30){ ?>class="collapse inline"<?php } ?>>
                                <?php echo substr($row['caption'],30); ?>
                            </span>
                            <?php if(strlen($row['caption']) > 30){ ?>
                                <button class="btn btn-outline-dark btn-sm more" data-target="#caption<?php echo $row['postId']; ?>" class="muted" data-toggle="collapse" id="expandCaptionBtn">more</button>
                            <?php } ?>
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