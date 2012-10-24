mobileMainPageFunctions = {
    toggleAddHushamBox : function() {
        var $box = $(".add-husham-box");
        if($box.hasClass("hidden-phone")) {
            $box.removeClass("hidden-phone").css("display", "none");
        }
        $box.toggle('slide', {
            direction : 'up'
        });
    }
}

function loadPage() {
    $(".husham-textbox").focus();
}

$(function() {
    // jQuery stuff

    $(".husham-box-tagging-box").tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", {
        theme : "facebook",
        allowFreeTagging : true
    });

    // Events
    $(".reset-form").click(function() {
        var result = confirm("האם אתה בטוח שברצונך למחוק את המלל?");

        return result;
    });

    $("button.add-husham-phone").click(mobileMainPageFunctions.toggleAddHushamBox);

    loadPage();
});
