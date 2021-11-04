;
(function($, window, document, undefined) {
    var $win = $(window);
    var $doc = $(document);
    $doc.ready(function() {
        $('.slider-loved .slides').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            navText: ['<i class="ico-arrow-left-white"></i>', '<i class="ico-arrow-right-white"></i>']
        });
        var $bar = $('.bar');
        var $barInner = $bar.find('.bar-inner');
        var hasAnimated = false;
        if ($win.width() > 767) {
            $win.on('scroll', function(event) {
                if ($bar.offset().top + $bar.outerHeight() < $win.scrollTop()) {
                    $bar.addClass('bar-fixed');
                    if (!hasAnimated) {
                        $barInner.css({
                            top: -$barInner.outerHeight()
                        }).animate({
                            top: 0
                        }, 300);
                        hasAnimated = true;
                    };
                } else {
                    $bar.removeClass('bar-fixed')
                    if (hasAnimated) {
                        $barInner.css({
                            top: $barInner.outerHeight()
                        }).animate({
                            top: 0
                        }, 300, function() {
                            $(this).css({
                                top: 0
                            });
                        });
                        hasAnimated = false;
                    };
                };
            });
        };
        $('.btn-nav').on('click', function(event) {
            event.preventDefault();
            $(this).toggleClass('active');
            $bar.toggleClass('bar-visible');
            $('body').toggleClass('noscroll');
        });
        $('.nav > ul > li > a').one('click', function(event) {
            if ($win.width() < 768 && $(this).siblings('ul').length) {
                event.preventDefault();
                $(this).siblings('ul').slideDown(300);
            };
        });
        $('.isotope').isotope({
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: 0
            }
        })
    });
})(jQuery, window, document);