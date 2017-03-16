/**
 * Created by granevich on 06.05.2016.
 */



jQuery( document ).ready(function( $ ) {
    //nav
    // $('.blog').on('click', function () {
    //     $('.under_nav').slideToggle();
    // });
    // $('.under_nav:last-child').on('click', function () {
    //     $('.under_nav').slideToggle();
    // });

    $('.search-icon').on('click', function () {
        $('.search').slideToggle();
    });

    var Menu = {

        el: {
            ham: $('.menu-humb'),
            menuTop: $('.menu-top'),
            menuMiddle: $('.menu-middle'),
            menuBottom: $('.menu-bottom')
        },

        init: function() {
            Menu.bindUIactions();
        },

        bindUIactions: function() {
            Menu.el.ham
                .on(
                    'click',
                    function(event) {

                        $('.small-wp-menu ').fadeToggle();
                        Menu.activateMenu(event);
                        event.preventDefault();
                    }
                );
        },

        activateMenu: function() {
            Menu.el.menuTop.toggleClass('menu-top-click');
            Menu.el.menuMiddle.toggleClass('menu-middle-click');
            Menu.el.menuBottom.toggleClass('menu-bottom-click');
        }
    };

    Menu.init();
    //nav
});
// Code that uses other library's $ can follow here.
