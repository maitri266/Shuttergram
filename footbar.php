<?php
session_start();
    require("bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .footbar{
            border-left: 1px solid rgba(0,0,0,.1);
            border-collapse: collapse;
            font-size:24px; color:gray; 
        }

        .icon{
            color:gray;
            padding:5px;
        }
    </style>

    <!-- for home , serach , add-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- for user profile  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid fixed-bottom" style="border-top:1px solid rgba(0,0,0,.1);">
    <div class="row justify-content-between  text-center">
            <div  class=" footbar col-3 my-auto">
                <a href=""><i class="icon fa">&#xf015;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href=""><i class="icon fa">&#xf002;</i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href=""><i class="icon fas fa-upload"></i></a>
            </div>
            <div  class=" footbar col-3 my-auto">
                <a href=""><i class="icon fas fa-user-alt"></i></a>
            </div>
    </div>
</div>

</body>
</html>