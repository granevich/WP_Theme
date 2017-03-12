/**
 * Created by granevich on 06.05.2016.
 */



jQuery( document ).ready(function( $ ) {
    //nav
    $('.blog').on('click', function () {
        $('.under_nav').slideToggle();
    });
    $('.under_nav:last-child').on('click', function () {
        $('.under_nav').slideToggle();
    })
    $('.search-icon').on('click', function () {
        $('.search').slideToggle();
    });

    //nav
});
// Code that uses other library's $ can follow here.
