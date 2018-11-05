<?php
    session_start();
    require("conn.php");
    if(isset($_POST['post'])){
        $postUser = $_SESSION['username'];
        $media = $_SESSION['fileDestination'];
        $caption = $_POST['caption'];
        $query = "INSERT into post(postUser,media,caption) VALUES('$postUser','$media','$caption')";

        if(mysqli_query($conn,$query)){
            header("Location:timeline.php");
        }else{
            header("Location:upload.php");
        }
    }
?>