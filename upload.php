<!DOCTYPE html>
<html lang="en">
<head>
<?php require("head.php"); ?>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <?php 
        session_start();
        $uploadedFlag  = false;
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
            
            //saving file metadata
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileTempName = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];
            $fileDestination = "";

            //checking extension
            $fileExtension = explode(".",$fileName);
            $fileExtension = strtolower(end($fileExtension));
            $allowed = array("jpg","jpeg","png","bmp");
            if($fileSize > 100 && $fileSize < 30000000){ // If file size is less than 10mb
                if(in_array($fileExtension,$allowed)){//If file type is supported
                    if($fileError === 0){//if file is not corrupt
                        $fileNameNew = uniqid($_SESSION['username']).".".$fileExtension; //generate a unique Name for image preceded by Username and Succeeded by File Extension
                        $fileDestination = $username."/".$fileNameNew; //set The file destination for the image

                        $_SESSION['fileTempName'] = $fileTempName;
                        $_SESSION['fileDestination'] = $fileDestination;

                        move_uploaded_file($fileTempName,$fileDestination); //move the file to the user's directory
                        $uploadedFlag = true;
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
        <div class="row justify-content-center">
            <div class="col-sm-7 col-lg-6">
                <div class="card">
                    <div class="card-header text-center"><span class="h2">Upload File</span></div>
                        <div class="card-body text-center">
                            <div class="form-group text-center">
                            
                            <!-- if the user has not uploaded image -->
                            <?php 
                                if($uploadedFlag === false){
                            ?>
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                                        <input type="file" name="uploadImage" id="uploadImage" class="form-control " value=""> 
                                </div>
                                <div class="card-footer text-center">
                                        <input type="submit" value="Upload" class="btn btn-block btnbg" name="submit">
                                    </form>
                            <?php }else{ ?>
                                <form action="uploadScript.php" method = "POST">
                                    <div class="row text-center">
                                        <div class="col-2 text-center">
                                            <img src="<?php echo $_SESSION['dp']; ?>" class="img-fluid rounded-circle imageSmall" alt="Profile Picture">
                                        </div>
                                        <div class="col-8 text-center">
                                            <textarea class="form-control" name="caption" id="caption" rows="3" placeholder="caption"></textarea>
                                        </div>
                                        <div class="col-2 text-center">
                                            <img src="<?php echo $fileDestination ?>" class="img-fluid" alt="Uploaded">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <input type="submit" value="Post" class="btn btn-lg btn-dark" name="post">
                                        <input type="submit" value="Cancel" class="btn btn-lg btn-danger" name="cancel">
                                    </div>
                                </form>
                                
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <br><br><br>
        <?php require("footbar.php"); ?>     

    </div>
    

</body>
</html>
