$(document).ready(() => {

    //= include ../components/faq.js
    
    $( '.inner__sidebar a' ).click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
          location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 175
                }, 1000);
            }
        }
    });

    var lastId,
        topMenu = $('.inner__sidebar'),
        topMenuHeight = topMenu.outerHeight()+1,
        menuItems = topMenu.find('a'),
        scrollItems = menuItems.map(function(){
            var item = $($(this).attr('href'));
            if (item.length) { return item; }
        });

    menuItems.click(function(e){
        var href = $(this).attr('href'),
            offsetTop = href === '#' ? 0 : $(href).offset().top-topMenuHeight+1;
        $('html, body').stop().animate({ 
            scrollTop: offsetTop
        }, 850);
        e.preventDefault();
    });

    $(window).scroll(function(){
        var fromTop = $(this).scrollTop()+topMenuHeight;
  
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
                return this;
        });
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : '';
  
        if (lastId !== id) {
            lastId = id;
            menuItems
                .parent().removeClass('active')
                .end().filter('[href="#'+id+'"]').parent().addClass('active');
        }                   
    });
});