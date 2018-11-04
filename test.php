<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <!-- for inline icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="post.css">
</head>
<body>
       <div class="container mx-auto w-50">
        <div id="content"></div>
        <?php
            session_start();
            for($i = 0; $i < 10; $i++){
                $_SESSION['index'] = $i;
                $_SESSION['username'] = 'User '.$i;
                $_SESSION['caption'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, repellat.";
                include('post.php');
            }
        ?>
    </div>

    <script>
        $(document).ready(function(){
            $("button.more").click(function(){
                $(this).sibling
            });
        });
    </script>
</body>
</html>