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
            if (scroll > pos - windowHeight) {
                $(this).addClass('scroll');
            }
        });
    }

    $(window).on('load scroll', function () {
        fadeAnime();
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

        $('.js-fade-left').each(function () {
            var pos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > pos - windowHeight) {
                $(this).addClass('fade-left');
            }
        });
    }

    $(window).on('load scroll', function () {
        fadeAnime();
    });
});