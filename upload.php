<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <?php include("navbar.php"); ?>
    
    <div class="container">

    <?php
        session_start();
        require("conn.php");
        require("bootstrap.php");

        if(isset($_POST['submit'])){
            $file = $_FILES["uploadImage"];
            // var_dump($file);

            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileTempName = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];

            //checking extension
            $fileExtension = explode(".",$fileName);
            $fileExtension = strtolower(end($fileExtension));
            $allowed = array("jpg","jpeg","png","bmp","mp4","avi","mpeg4","mkv");
            if($fileSize < 70){
                if(in_array($fileExtension,$allowed)){
                    if($fileError === 0){
                        echo "Normal";
                    }else{
                        echo "File is Corrupted";
                    }
                }else{
                    echo "File Extension Invalid";
                }
            }else{
                ?>
                    <!-- If file is too big -->
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>File Uploaded is too big</strong>
                    </div>
                <?php
            }
        }
    ?>

    
        <form class="form-group" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadImage" id="uploadImage" class="form-control">    
            <input type="submit" value="Upload" class="btn btn-sm btn-dark" name="submit">
        </form>
        <br><br><br>
        <?php require("footbar.php"); ?>        
    </div>
</body>
</html>