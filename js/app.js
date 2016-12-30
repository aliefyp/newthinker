$(document).foundation();
new WOW().init();

$(window).on('scroll', function () {
    if ($(this).scrollTop() > 30) {
        if (!$('.top-bar').hasClass('shadowed')) {
            $('.top-bar').addClass('shadowed');
        }
    } else {
        if ($('.top-bar').hasClass('shadowed')) {
            $('.top-bar').removeClass('shadowed');
        }
    }
});

$(".img-block").hover(function(){
    $(this).find(".overlay").fadeIn();
    }, function(){
    $(this).find(".overlay").fadeOut();
})

// $(".subfokus").click(function () {
//     $('html, body').animate({
//         scrollTop: $("#respon").offset().top
//     }, 1000);
// });

$(function () {
    $("#tagline").typed({
        strings: ["WEB-APPS.", "WEBSITES.", "MOBILE-APPS."],
        startDelay:500,
        typeSpeed: 100,
        loop:true,
        backDelay: 500,
        backSpeed: 0,
        showCursor: false,
        throttle_delay: 20
    });
});