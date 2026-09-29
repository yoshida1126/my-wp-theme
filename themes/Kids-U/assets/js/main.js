jQuery(function ($) {
    $('.hamburger').click(function () {
        $(this).toggleClass('active');
        $('.nav-sp').toggleClass('active');
    });
});

jQuery(function ($) {
    $('.nav-sp').click(function () {
        $('.hamburger').toggleClass('active');
        $('.nav-sp').toggleClass('active');
    });
});

jQuery(function ($) {
    $(window).on('scroll', function () {

        var scrollTop = $(this).scrollTop();
        var windowHeight = $(this).height();
    
        var targetTop = $('#feature').offset().top;
        var footerTop = $('#footer').offset().top;

        var isPastTarget = (scrollTop + windowHeight) > targetTop;
    
        var isBeforeFooter = (scrollTop + windowHeight) < footerTop;

        if (isPastTarget && isBeforeFooter) {
            $('#side-btn').addClass('active');
        } else {
            $('#side-btn').removeClass('active');
        }
    });
});