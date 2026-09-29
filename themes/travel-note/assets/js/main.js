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