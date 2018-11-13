<?php
    require("conn.php");

    $query = "SELECT username FROM user";
    $users = mysqli_query($conn,$query);
    $userArray  =array();
    if(mysqli_num_rows($users) > 0){
        while($row = mysqli_fetch_assoc($users)){
            array_push($userArray,$row['username']);
        }
    }else{
        $empty = true;
    }

    $q = $_REQUEST['q'];
    $suggestion = "";
    if($q !== ""){
        $q = strtolower($q);
        $len = strlen($q);
        for($u=0;$u < sizeof($userArray);$u++){
            if(stristr($q,substr($userArray[$u] ,0,$len))){
                if($suggestion === ""){
                    $suggestion = $userArray[$u];
                    echo "$suggestion";
                }
            }
        }
    }



?>