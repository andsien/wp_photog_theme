/**
 * Created by andsien on 03/04/18.
 */

$(document).ready(function(){

    if($(window).width() <= "768") $(".li-book").remove();

    $(window).scroll(function() {
        if ($(this).scrollTop() > ($(".header-overlay").height() - 60)) {
            $("#showHideBook").fadeIn();
            $(".header").css("background-color","#ffffff");
        } else {
            $("#showHideBook").fadeOut();
            $(".header").css("background-color","#ffffffe6");
        }
    });

    $(document).on('click', '.btnOverlayClose', function (e) {
        e.preventDefault();
        $("#xPhotoOverlay").css("width", "0%");
        $(".overlay-content").hide();

    });

    $(document).on('click', '.btnOverlayOpen', function (e) {
        e.preventDefault();
        $("#xPhotoOverlay").css("width", "100%");
        $("#" + $(this).attr("data-overlay")).fadeIn(1500);
    });
});

AOS.init({
    disable: 'mobile'
});




