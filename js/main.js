//= include plugins/*

$(document).ready(() => {
    //= include components/header.js
    //= include components/footer.js

    $('#reviewsShowmore').click(() => {
        $('.reviews__center').addClass('active');
        $('#reviewsShowmore').addClass('hide');
    });
});

//= include components/helpers.js
//= include components/modules/popup.js
//= include components/modules/calculator-popup.js

