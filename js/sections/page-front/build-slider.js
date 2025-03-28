
$('.build__slider')
    .on('afterChange init', function (event, slick, direction) {
        slick.$slides.removeClass('prev-slide').removeClass('next-slide');
        for (var i = 0; i < slick.$slides.length; i++) {
            var $slide = $(slick.$slides[i]);
            if ($slide.hasClass('slick-current')) {
                $slide.prev().addClass('prev-slide');
                $slide.next().addClass('next-slide');
                break;
            }
        }
    }
    )
    .on('beforeChange', function (event, slick) {
        slick.$slides.removeClass('prev-slide').removeClass('next-slide');
    })

    .slick({
        infinite: true,
        speed: 300,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<div class="arrow-wrap arrow-wrap--prev"><button class="slick-prev slick-arrow arrow--main" aria-label="Previous" type="button"></button></div>',
        nextArrow: '<div class="arrow-wrap arrow-wrap--next"><button class="slick-next slick-arrow arrow--main" aria-label="Next" type="button"></button></div>',
        responsive: [
            {
                breakpoint: 2560,
                settings: {
                    dots: true,
                    arrows: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                    arrows: false
                }
            }
        ]
    })

    .on('afterChange', e => {
        $(window).scroll();
    });


const arrows = [
    { zone: '.arrow-wrap--next', btn: '.arrow--main.slick-next' },
    { zone: '.arrow-wrap--prev', btn: '.arrow--main.slick-prev' }
];

arrows.forEach(({ zone, btn }) => {
    const redZone = document.querySelector(zone);
    const followBtn = document.querySelector(btn);

    if (!redZone || !followBtn) return;

    redZone.addEventListener('mouseenter', () => {
        followBtn.style.opacity = '1';
    });

    redZone.addEventListener('mousemove', (e) => {
        const { clientX, clientY } = event;
    
        followBtn.animate({
            left: `${clientX - 40}px`,
            top: `${clientY - 60}px`
        
        }, {duration: 1000, fill: 'forwards'});
    });

    redZone.addEventListener('mouseleave', () => {
        followBtn.style.opacity = '0';
        followBtn.style.transform = 'translate(0, 0)';
    });
});
