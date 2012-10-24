function likeDislikeSuccessCallback(data) {
    if (data.husham_id && data.likes && data.dislikes) {
        $hushamBox = $("article").filterByData({hushamId: 66});
        $hushamBox.find(".like-post").replaceJustText(data.likes);
        $hushamBox.find(".dislike-post").replaceJustText(data.dislikes);
    }
}

$(function() {
    function likeDislike(isLike, $input) {
        var hushamId = $input.parents("article").data("hushamId");
    }
    
    
    $(".like-post").click(function() {
        likeDislike(true, $(this));
        
        return false;
    });
    
    $(".dislike-post").click(function() {
        likeDislike(false, $(this));
        
        return false;
    });
});