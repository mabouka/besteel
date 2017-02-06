b.menu = {
    init: function() {
        this.getElements();
        this.setEvents();
    },

    getElements: function() {
        this.$links        = $('.mainNav__item--hasChilds .mainNav__link ');

    },

    setEvents: function() {
        b.menu.$links.on('click', b.menu.event_click);
    },

    // Events
    event_click: function(e) {
        e.preventDefault();
        b.menu.openSubMenu($(this).closest('.mainNav__item'));

    },

    // Functions
    openSubMenu: function(target) {
        $(target).addClass('mainNav__item--active');
        b.$body.click(function(e){
            if(!$(event.target).closest('.mainNav__item--hasChilds').length) {
                $('.mainNav__item--active').removeClass('mainNav__item--active');
            }
        })
    }

}
