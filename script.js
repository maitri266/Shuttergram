$(document).ready(function(){
    $("#logoutBtn").click(function(){
        window.location.replace("logout.php");
    });

    $("#expandCaptionBtn").click(function(){
        if($(this).html()=="more"){
            $(this).html("less");
        }else if($(this).html()=="less"){
            $(this).html("more");
        }
    });
}); 