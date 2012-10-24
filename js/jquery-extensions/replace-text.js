$.fn.replaceJustText = function(text) {
    var oldText = $(this).text();
    var oldHtml = $(this).html();
    var newHtml = oldHtml.replace(oldText, text);
    $(this).html(newHtml);
    
    return ($(this));
};

$.fn.htmlFade = function(newHtml, speed) {
    if (newHtml instanceof jQuery) {
        newHtml = newHtml.html();
    }
    
    if (!speed) {
        speed = 100;
    }
    
    $(this).fadeOut(speed, function() {
        $(this).html(newHtml).fadeIn(speed);
    });
};