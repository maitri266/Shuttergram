<!-- Instagram like looking footbar with buttons to navigate to different pages.-->
<!-- Making footbar.php saves us from  copy pasting same code snippet in all files. Rather we can just include this file using the include / require function in order for better scalability-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("head.php"); ?>
    <link rel="stylesheet" href="footbar.css">
    <!-- for home , serach , add-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- for user profile  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <div class=" container-fluid fixed-bottom" style="border-top:1px solid rgba(0,0,0,.1);">
        <div class="footbar row justify-content-between  text-center">
            <div  class=" footbar col-3 my-auto">
                <a href="timeline.php"><i class="icon fa">&#xf015;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href="search.php"><i class="icon fa">&#xf002;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto" >
                <a href="upload.php"><i class="icon fas fa-upload" ></i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href="profile.php"><i class="icon fas fa-user-alt"></i></a>
            </div>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>

</html>
