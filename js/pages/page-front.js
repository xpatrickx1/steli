$(document).ready(() => {

    //= include ../components/faq.js
    //= include ../components/modules/calculator.js


    $('#reviewsShowmore').click(() => {
        $('.reviews__center').addClass('active');
        $(this).addClass('hide');
    });
});