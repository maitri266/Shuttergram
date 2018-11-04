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
            $i=0;
                $_SESSION['index'] = $i;
                $_SESSION['username'] = 'User '.$i;
                $_SESSION['caption'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi autem odit reprehenderit culpa dignissimos accusamus, ipsam laborum, inventore delectus odio officia ipsa quos. Quod, hic nam architecto iure voluptate natus nisi nihil debitis vero pariatur consequatur quibusdam totam distinctio sint.";
                include('post.php');
            
        ?>
    </div>

    <script>
        // $(document).ready(function(){
        //     $("button").click(function(){
        //         $var = $(this).attr('data-target');
        //         $(this).closest($var).slideToggle();
        //     });
        // });
    </script>
</body>
</html>