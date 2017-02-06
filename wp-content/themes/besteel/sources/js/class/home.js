b.home = {
    init: function() {
        this.getElements();
        this.startTopSlider();
        this.startBottomSlider();
    },

    getElements: function() {
        this.$topSlider        = $('.hSlider__list');
        this.$topSliderPrev    = $('.hSlider__prev');
        this.$topSliderNext    = $('.hSlider__next');

        this.$bottomSlider        = $('.gallery__list');
        this.$bottomSliderLink    = $('.gallery__link');
        this.$bottomSliderPrev    = $('.gallery__prev');
        this.$bottomSliderNext    = $('.gallery__next');
    },

    startTopSlider: function() {
        b.home.$topSlider.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear',
            speed: 500,
            prevArrow: b.home.$topSliderPrev,
            nextArrow: b.home.$topSliderNext
        });
    },
    startBottomSlider: function() {
        b.home.$bottomSlider.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: b.home.$bottomSliderPrev,
            nextArrow: b.home.$bottomSliderNext,
        });

        b.home.$bottomSliderLink.zoombox({
            theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
            opacity     : 0.8,              // Black overlay opacity
            duration    : 300,              // Animation duration
            animation   : true,             // Do we have to animate the box ?
            width       : 600,              // Default width
            height      : 400,              // Default height
            gallery     : true,             // Allow gallery thumb view
            autoplay : false                // Autoplay for video
        });
    }
}
