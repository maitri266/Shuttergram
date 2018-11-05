<?php
    require("conn.php");
    require("bootstrap.php");

    if(isset($_POST['submit'])){
        $file = $_FILES["uploadImage"];
        var_dump($file);

        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTempName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];
    }
?>
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
        <form class="form-group" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadImage" id="uploadImage" class="form-control">    
            <input type="submit" value="Upload" class="btn btn-sm btn-dark" name="submit">
        </form>
        <br><br><br>
        <?php require("footbar.php"); ?>        
    </div>
</body>
</html>