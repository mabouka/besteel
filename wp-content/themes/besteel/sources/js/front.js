var b = {
    // global vars
    sCurrent: null,
    isLoaded: false,
    // global elements
    $body: null,

    // setup
    init: function () {
        b.getElements();
        b.sCurrent = b.getCurrentPage();
        b.loadPage();
        b.menu.init();
        b.isLoaded = true;
    },
    loadPage: function () {
        if (b.sCurrent) b[b.sCurrent].init();
    },
    // functions
    getElements: function () {
        b.$body = $('body');
    },
    getCurrentPage: function () {
        if (b.$body.hasClass('page-template-template-about')) return 'about';
        if (b.$body.hasClass('single-product')) return 'about';
        if (b.$body.hasClass('home')) return 'home';

        return false;
    }
};

$(window).on('load', b.init);
