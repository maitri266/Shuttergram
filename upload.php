<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <?php 
        session_start();
        include("navbar.php"); 
    ?>
    
    <div class="container">

    <?php
        // reference
        // https://www.youtube.com/watch?v=JaRq73y5MJk&t=386s
        require("conn.php");
        require("bootstrap.php");

        $username = $_SESSION['username'];

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
            $allowed = array("jpg","jpeg","png","bmp");
            if($fileSize < 10000000){
                if(in_array($fileExtension,$allowed)){
                    if($fileError === 0){
                        $fileNameNew = uniqid($_SESSION['username']).".".$fileExtension;
                        $fileDestination = $username."/".$fileNameNew;
                        move_uploaded_file($fileTempName,$fileDestination);
                        ?>
                            <!-- File Uploaded Successfully -->
                            <div class="alert alert-dismissible alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>File Uploaded Succesfully</strong>
                            </div>
                        <?php
                    }else{
                        ?>
                            <!-- File Corrupted -->
                            <div class="alert alert-dismissible alert-warning">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>File is Corrupted</strong>
                            </div>
                        <?php
                    }
                }else{
                    ?>
                        <!-- Unexpected File Extension -->
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>File Uploaded is too big</strong>
                        </div>
                    <?php
                }
            }else{
                ?>
                    <!-- If file is too big -->
                    <div class="alert alert-dismissible alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>The uploaded File Type is not supported</strong>
                    </div>
                <?php
            }
        }
    ?>

        <!-- Upload Form -->
        <div class="card">
            <div class="card-header text-center"><span class="h2">Upload File</span></div>
                <div class="card-body text-center">
                    <div class="form-group text-center">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="uploadImage" id="uploadImage" class="form-control "> 
                    </div>
                    <div class="card-footer text-center">
                            <input type="submit" value="Upload" class="btn btn-lg btn-dark" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>
        <?php require("footbar.php"); ?>        
    </div>
</body>
</html>
