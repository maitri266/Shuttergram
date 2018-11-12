<?php
    session_start();
    require("bootstrap.php");
    require("conn.php");
    $myusername= $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <? require("bootstrap.php");
    require("head.php"); ?>
        <!-- for font  -->
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <!-- for setting logo -->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
        <!-- for logout logo -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Document</title>
        <link rel="stylesheet" href="search.css">
    </head>
    <body>
        <?php require("searchbar.php"); ?>
        <h1  class="h text-center">EXPLORE OTHER ACCOUNTS</h1> 
        <br><br><br><br><br><br>
        <?php require("footbar.php"); ?>
    </body>
</html>