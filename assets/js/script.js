/**
 * Created by andsien on 03/04/18.
 */

$(document).ready(function(){

    //var $scrollingDiv = $(".header-overlay .logo"),
    //    defaultWidth = parseInt($scrollingDiv.css('width')); // whatever is in your css as
    //$(window).scroll(function() {
    //    var winScrollTop = $(window).scrollTop(),
    //        zeroSizeHeight = $(".header-overlay").height(),
    //        newSize = defaultWidth * (1 - (winScrollTop / zeroSizeHeight));
    //
    //     if(newSize > 122) $scrollingDiv.css("width", newSize);
    //});

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
        $("#" + $(this).attr("data-overlay")).show();
    });
});

AOS.init();




