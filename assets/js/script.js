/**
 * Created by andsien on 03/04/18.
 */

$(document).ready(function(){

    $(window).scroll(function() {
        console.log($(".header-overlay").height());
        if ($(this).scrollTop() > ($(".header-overlay").height() - 60)) {
            $("#showHideBook").fadeIn();
        } else {
            $("#showHideBook").fadeOut();
        }
    });

    $(document).on('click', '#menu-main-menu li a', function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $(document).on('click', '.btnOverlayClose', function (e) {
        e.preventDefault();
        $("#xPhotoOverlay").css("width", "0%");
        $(".overlay-content").hide();

    });

    $(document).on('click', '.btnOverlayOpen', function (e) {
        e.preventDefault();
        $("#xPhotoOverlay").css("width", "100%");
        $("#" + $(this).attr("data-overlay")).fadeIn(1800);
    });
});

AOS.init();




