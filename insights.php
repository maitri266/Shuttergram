<?php
    session_start();
    require("bootstrap.php");
    require("conn.php");
    
    $username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insights</title>
</head>
<body>
    <?php require("navbar.php"); ?>
    <h1 class="text-center my-5">STATISTICS</h1>
    <table class="table text-center container my-5">
        <thead>
            <tr>
                <th>USERNAME</th>
                <th>NUMBER OF POSTS</th>
                <th>TOTAL NUMBER OF LIKES</th>
                <th>MAX LIKES ON A POST</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                //number of posts
                $queryNumberOfPosts = "SELECT count(media) from post WHERE postUser='".$username."'";
                $resultNumberOfPosts = mysqli_query($conn,$queryNumberOfPosts);
                $resultNumberOfPosts = mysqli_fetch_assoc($resultNumberOfPosts);
                $resultNumberOfPosts = $resultNumberOfPosts['count(media)'];

                //number of likes and max likes
                $sql = "SELECT count(user)\n"

                . "FROM post\n"
            
                . "LEFT JOIN likes ON post.postId = likes.post WHERE postUser='".$username."'";
                $resultLikes = mysqli_query($conn,$sql);
                // var_dump($resultLikes);
                $resultLikePosts = mysqli_fetch_assoc($resultLikes);
                $resultLikeSumPosts = $resultLikePosts['count(user)'];

                $sql2 = "SELECT count(user)\n"
                        . "FROM likes,post WHERE post.postId = likes.post AND post.postUser = '".$username."' GROUP BY post ORDER BY COUNT(user) DESC LIMIT 1";                
                $resultMaxLikes = mysqli_query($conn,$sql2);
                $resultMaxLikePosts = mysqli_fetch_assoc($resultMaxLikes);
                // print_r($resultMaxLikePosts);
                $resultMaxLikesnew = $resultMaxLikePosts["count(user)"];
                // echo $resultMaxLikesnew;
            ?>
                <tr>
                    <td scope="row" class="table-primary"><?php echo $username; ?></td>
                    <td class="table-primary"><?php echo $resultNumberOfPosts; ?></td>
                    <td class="table-primary"><?php echo $resultLikeSumPosts; ?></td>
                    <td class="table-primary"><?php echo $resultMaxLikesnew; ?></td>
                </tr>
            <?php ?>
        </tbody>
    </table>

    <br><br><br><br><br><br>
    <?php require("footbar.php"); ?>
    <script src="script.js"></script>
</body>
</html>