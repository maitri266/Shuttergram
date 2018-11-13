

$(document).ready(function(){
    $("#logoutBtn").click(function(){
        window.location.replace("logout.php");
    });

    $("#expandCaptionBtn").click(function(){
        console.log("clicked");
        if($(this).html()=="more"){
            $(this).html("less");
        }else if($(this).html()=="less"){
            $(this).html("more");
        }
    });

    $("i.far.likeBtn").click(function(){
        var $dataLiked = parseInt($(this).attr("data-liked"));
        $dataLiked = $dataLiked + 1;
        $dataLiked = $dataLiked % 2;
        $(this).attr("data-liked",$dataLiked);//changed the value of data-liked on click

        var $postId = $(this).parent("h3").parent("div.card-footer").siblings("div.card-body").children("img").attr("data-postId");
        var $data = {};
        $data['postId'] = $postId;
        $data['liked'] = $dataLiked;
        var $spanElement = $(this).siblings("span.h5.likeCount");

        $.post("like.php",
            $data,
            function(data){
                $(this).attr("data-liked",$dataLiked);
                $spanElement.html(data);
        });
        
        if($dataLiked == 1){
            $(this).removeClass("far");
            $(this).addClass("fas");
            $(this).css("color","red");
        }else{
            $(this).removeClass("fas");
            $(this).addClass("far");
            $(this).css("color","#444");
        }
        
    });

}); 