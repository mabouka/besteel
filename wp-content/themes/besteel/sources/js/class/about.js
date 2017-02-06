b.about = {
    init: function() {
        this.getElements();
        this.startSlider();
    },

    getElements: function() {
        this.$slider        = $('.gallery__list');
        this.$sliderLink    = $('.gallery__link');
        this.$sliderPrev    = $('.gallery__prev');
        this.$sliderNext    = $('.gallery__next');
    },


    startSlider: function() {
        b.about.$slider.slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: b.about.$sliderPrev,
            nextArrow: b.about.$sliderNext,
        });

        $('.gallery__link').zoombox({
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
