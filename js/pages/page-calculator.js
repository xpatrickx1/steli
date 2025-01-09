$(document).ready(() => {

    //= include ../components/modules/calculator.js
    //= include components/modules/order.js

    $('#reviewsShowmore').click(() => {
        $('.reviews__center').addClass('active');
        $('#reviewsShowmore').addClass('hide');
    });
});