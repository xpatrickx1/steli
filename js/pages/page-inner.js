$(document).ready(() => {

    //= include ../components/modules/calculator.js

    $( '.inner__sidebar a' ).click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
          location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 75
                }, 1000);
            }
        }
    });

    $(window).scroll(function() {
        var fromTop = $(this).scrollTop();

        var cur = scrollItems.map(function(){
            if ($(this).offset().top <= fromTop + 80) // Adjust 80 as needed (offset + possible menu height)
                return this;
        });
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : '';

        $('.table-content a').removeClass('active');
        if (id) {
            $('.table-content a[href="#' + id + '"]').addClass('active');
        }
    });

    function highlightMenuItem(target) {
        $('.table-content a').removeClass('active');
        $('.table-content a[href="#' + target.attr('id') + '"]').addClass('active');
    }

});