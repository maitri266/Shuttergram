
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require("bootstrap.php");
        require("head.php"); 
    ?>
    <!-- for setting logo -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
    <!-- for logout logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<div class="container-fluid" style="border-bottom:1px solid rgba(0,0,0,.1); background : white">
    <div class="row justify-content-between text-center">
            <div class="col-2 text-left my-auto" >
                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModalCenter"><i style="font-size:24px ; color:gray; " class="fa">&#xf013;</i></button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5  class="modal-title" id="exampleModalLongTitle">Profile Settings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-block btn-sm btn-light">Edit Profile</button>
                            <button class="btn btn-block btn-sm btn-light">Change Password</button>
                            <button class="btn btn-block btn-sm btn-light">Change Email</button>
                            <button class="btn btn-block btn-sm btn-danger">Delete Account</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm ">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form>
                    <input list="searhbar"class="form-control" onkeyup="showSuggestions(this.value)">
                </form>
                
            </div>
            
            <div class="col-2  text-right my-auto">
                <button class="btn btn-sm btn-primary" id="logoutBtn">
                    <!-- <i style="font-size:24px" class="fa">&#xf08b;</i> -->
                    Logout
                </button>
            </div>
        </div>
        <div class="row justify-content-between text-center">
            <div class="col justify-content-between text-center" id="output"></div>
        </div>

</div>

    <script>
        var output = document.getElementById("output");

        function showSuggestions(value){
            if(value.length==0){
                output.innerHTML = "";
            }else{
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        output.innerHTML ="<a href=\"#\"><span class=\"badge badge-pill badge-info\">" + this.responseText + "</span></a>";
                }
                };
                xhttp.open("GET", "searchScript.php?q="+value, true);
                xhttp.send(); 
            }
        }
    </script>
</body>
</html>
