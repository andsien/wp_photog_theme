/**
 * Created by andsien on 03/04/18.
 */

$(document).ready(function(){

    var $scrollingDiv = $(".header-overlay .logo"),
        defaultWidth = parseInt($scrollingDiv.css('width')); // whatever is in your css as
    $(window).scroll(function() {
        var winScrollTop = $(window).scrollTop(),
            zeroSizeHeight = $(".header-overlay").height(),
            newSize = defaultWidth * (1 - (winScrollTop / zeroSizeHeight));

         if(newSize > 122) $scrollingDiv.css("width", newSize);
    });

    $(document).on('click', '.anchor-tag', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

});

AOS.init();




