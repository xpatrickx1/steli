$(document).ready(() => {

    //= include ../components/modules/calculator.js

    $('#reviewsShowmore').click(() => {
        $('.reviews__center').addClass('active');
        $('#reviewsShowmore').addClass('hide');
    });
});