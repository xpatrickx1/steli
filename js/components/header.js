$('.js-hamburger').click(() => {
    $('body').toggleClass('is-open');
    $('body').toggleClass('no-scroll');
});


$( window ).scroll( scroll, scroll() );

function scroll () {
    if ( $(window).scrollTop() >= 60 ){
        $('.header').addClass('header-fixed');
    } else {
        $('.header').removeClass('header-fixed');
    }
}


$(function () {
    $('.header__navigation li a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});


let anchors = [];
const documentURL = document.location.href;
const pathNameURL = document.location.pathname;

let urlsForCheck = documentURL == 'http://localhost:8080/trustnet/'
  || documentURL == 'http://localhost/trustnet/'
  || documentURL == 'https://trustnet.com/'
  ;


const checkUrls = () => {

    anchors.map( e => {

        if( !urlsForCheck ) {
            if (!($('.header__navigation li:has(ul)'))) {
                $( '.header__navigation li a[href="' + e + '"]' ).attr( 'href', '/' + e );
                $( '.footer__menu--terms li a[href="' + e + '"]' ).attr( 'href', '/' + e );
            }
        }
    } );

};


$('.header__navigation li a').each( function () {

    if  (($( this ).attr( 'href' ) ).match(/^#/i)) {
        anchors.push( $( this ).attr( 'href' ) );
    }

}).promise().done( checkUrls() );

$(window).bind('load', function() {
    $('.header__navigation li a, .footer__menu li a').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
          location.hostname == this.hostname) {
            var target = $(this.hash);
            // target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 75
                }, 1000);
            }
        }

        if( $( 'body' ).hasClass( 'is-open no-scroll' ) ) {
            $('.js-hamburger').click();
        }
    });
});


// const menuItems = document.querySelectorAll('.navigation__link');
// const tabs = document.querySelectorAll('.tab');
// const tabLinks = document.querySelectorAll('.tab a');

// menuItems.forEach(item => {
//     item.addEventListener('mouseenter', () => {
//         if (window.innerWidth > 768) {
//             item.querySelector('.sub-menu').style.display = 'block';
//         }
//     });

//     item.addEventListener('mouseleave', () => {
//         if (window.innerWidth > 768) {
//             item.querySelector('.sub-menu').style.display = 'none';
//         }
//     });

//     item.addEventListener('click', () => {
//         if (window.innerWidth <= 768) {
//             item.querySelector('.sub-menu').style.display = 'flex';
//         }
//     });
// });

// tabLinks.forEach(link => {
//     link.addEventListener('click', (e) => {
//         e.preventDefault();
//         const parent = link.closest('.navigation__link');
//         const subMenus = parent.querySelectorAll('.third-level-sub-menu');

//         subMenus.forEach(subMenu => {
//             subMenu.style.display = 'none';
//         });

//         const targetTab = link.closest('.tab');
//         targetTab.querySelector('.third-level-sub-menu').style.display = 'flex';

//         tabs.forEach(tab => {
//             tab.classList.remove('active');
//         });

//         targetTab.classList.add('active');
//     });
// });

// const menuItemsWithTabs = document.querySelectorAll('.navigation__link .tab');
// menuItemsWithTabs[0].classList.add('active');


// // From Divi

// jQuery(function($) {
//     $(document).ready(function() {
//         function toggleMenu(menu) {
//             $(menu).append('<a href="#" class="mobile-toggle"></a>');
//             $(menu + ' .mobile-toggle').click(function(event) {
//                 event.preventDefault();
//                 $(this).parent('li').toggleClass('dt-open');
//                 $(this).parent('li').find('ul').first().toggleClass('visible'); 
//                 $(this).parent('li').find('ul').first().slideToggle();
				  
// 				  if ($('.sub-menu').find('.dt-open')) {
// 					  $('.sub-menu').find('.dt-open').toggleClass('visible');
// 				  }
//             });
//         }

//         toggleMenu('ul.et_mobile_menu li.menu-item-has-children');
//         toggleMenu('ul.et_mobile_menu li.sub-menu');
//     });
		
//     const $menu = $('nav > ul.nav');
//     const top_level_link = '.menu-item-has-children > a';
//     function setup_collapsible_submenus() {
//         $menu.find(top_level_link).each(function() {
//             $(this).attr('href', '#');
//             $(this).next('.sub-menu').addClass('hide');

//             $(this).on('click', function(event) {
//                 event.stopPropagation();
//                 $(this).next('.sub-menu').toggleClass('visible');
// 	  $menu.find('.sub-menu').first().find('.menu-item-has-children').first().addClass('active');
// 	  $menu.find('.second-level-sub-menu').first().addClass('visible');
//                 return false;
//             });
//         });

//         $('.sub-menu a').each(function() {
//             $(this).on('click', function(event) {
//                 event.stopPropagation();
//                 $('.second-level-sub-menu').removeClass('visible');
//                 $('.sub-menu li').removeClass('active');
//                 $(this).parent().toggleClass('active');
//                 $(this).siblings('.second-level-sub-menu').toggleClass('visible');
//                 return false;
//             });
//         });

//         $(window).click(function(event) {
//             if (!($(event.target).parents('.sub-menu').length)) {
//                 $('.sub-menu').removeClass('visible');
//                 $('.second-level-sub-menu').removeClass('visible');
//             }
//         });
//     }

//     $(window).on('load', function() {
//         if ($(window).width() > 1150) {
//             setTimeout(function() {
//                 setup_collapsible_submenus();
//             }, 700);
//         }
//     });
		
// }); 
	
	