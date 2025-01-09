
const popupTriggers = [
    '#headerCallbackPopup',
    '#caculatorOrder',
    '#footerOrder',
    '#recommendationOrder',
    '#orderBanner'
];

$( '.popup__close, .popup__bg' ).click( function() {
    $( '.popup' ).removeClass('active');
    setTimeout(function(){
        $( '.popup' ).addClass('disabled');
    }, 100); 
} );

popupTriggers.forEach(trigger => {
    $(trigger).on('click', function(e) {
        e.preventDefault();
        $('.popup').removeClass('disabled');
        setTimeout(function(){
            $('.popup').addClass('active'); 
        }, 10); 
    });
});