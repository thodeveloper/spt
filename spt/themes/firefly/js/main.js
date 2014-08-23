$(document).ready(function () {
    var classes = ["col-1", "col-2", "col-3", "col-4", "col-5", "col-6", "col-7"];
    classes.sort(function () { return Math.random() - .5 });

    $(".td_tb").each(function () {
        $(this).addClass(classes.pop());
    });
});

$(function () {
    var $anchors = $('.bg_img');

    (function _loop(idx) {
        $anchors.eq(idx - 2).removeClass('last');
        $anchors.eq(idx - 1).addClass('last');
        $anchors.removeClass('current').eq(idx).addClass('current');
        
        setTimeout(function () {
            _loop((idx + 1) % $anchors.length);
        }, 4000);
    }(0));
});