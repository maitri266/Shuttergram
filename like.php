<?php
    session_start();
    require("conn.php");


    $username = $_SESSION['username'];
    $postId = $_POST['postId'];
    $likeStatus = $_POST['liked'];

    if($likeStatus == 1){
        //insert values into database
        $query = "INSERT INTO likes(user,post) VALUES('$username','$postId')";
        mysqli_query($conn,$query);
        $query = "SELECT count(post) from likes WHERE post='$postId'";
        $result = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($result);
        echo $result['count(post)'];
    }else if($likeStatus == 0){
        //delete values from database
        $query = "DELETE from likes WHERE user='$username' && post='$postId'";
        mysqli_query($conn,$query);
        $query = "SELECT count(post) from likes WHERE post='$postId'";
        $result = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($result);
        echo $result['count(post)'];
    }


?>
