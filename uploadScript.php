<?php
    session_start();
    require("conn.php");
    if(isset($_POST['post'])){
        $postUser = $_SESSION['username'];
        $media = $_SESSION['fileDestination'];
        $caption = $_POST['caption'];
        $query = "INSERT into post(postUser,media,caption,postTime) VALUES('$postUser','$media','$caption',CURRENT_TIMESTAMP)";

        if(mysqli_query($conn,$query)){
            header("Location:timeline.php");
        }else{
            echo mysqli_error();
            header("Location:upload.php");
        }
    }else if(isset($_POST['cancel'])){
        $postUser = $_SESSION['username'];
        $media = $_SESSION['fileDestination'];
        $caption = $_POST['caption'];

        unlink($media);
        header("Location:upload.php");
    }

    unset($_SESSION['fileDestination']);
    unset($_SESSION['fileTempName']);
?>