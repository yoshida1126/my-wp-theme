jQuery(function ($) {
    function fadeout_loader() {
        $('.loader').fadeOut(800);
    }
    $(window).on('load', function () {
        setTimeout(function () {
            fadeout_loader();
        }, 1000)
    })
})

jQuery(function ($) {
    $('.header-hamburger').click(function () {
        $(this).toggleClass('active');
        $('.sp-header-nav').toggleClass('active');
    });
});

jQuery(function ($) {
    $('.sp-header-nav').click(function () {
        $('.header-hamburger').toggleClass('active');
        $('.sp-header-nav').toggleClass('active');
    });
});

jQuery(function ($) {
    var isThrottled = false;

    function fadeAnime() {
        if (isThrottled) return;

        isThrottled = true;

        setTimeout(function () {
            isThrottled = false;
        }, 100);

        $('.js-fade').each(function () {
            var pos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > pos - windowHeight + 100) {
                $(this).addClass('scroll');
            }
        });
    };

    $(window).on('load scroll', function() {
        fadeAnime();
    });
});