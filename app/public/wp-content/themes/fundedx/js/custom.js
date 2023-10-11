(() => {
    // HERO SLIDER
    jQuery('.js-hero').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 6000,
        items: 1
    });

    jQuery('.js-logo-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 6000,
        margin: 20,
        responsive: {
            0 : {
                items: 2,
                center: true,
                stagePadding: 50
            },
            768 :  {
                items: 3,
            },
            1024 : {
                items: 5,
                stagePadding: 0,
                margin: 40
            }
        }
    });

    if ($.fn.owlCarousel) {
        var testimonialSlider = $('.client-feedback-slides');
        testimonialSlider.owlCarousel({
            items: 3,
            margin: 40,
            loop: true,
            // autoplay: true,
            smartSpeed: 800,
            // autoplayTimeout: 5000,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                480: {
                    items: 1,
                    margin: 15,
                },
                768: {
                    items: 3,
                },
                1024: {
                    items: 3,
                }
            }
        })
    }

    // Mobile Menu
    const _mobileMenu = jQuery('.mobile-navigation');
    jQuery('.js-mobile-open').click(function(){
        _mobileMenu.addClass('open');
    });

    jQuery('.js-mobile-close').click(function(){
        _mobileMenu.removeClass('open');
    });

    const _faqs = document.querySelectorAll('.faq-list');
    if( _faqs ) {
        _faqs.forEach( _faq => {
            const _question = _faq.querySelectorAll('.faq-question');

            _question.forEach( _toggle => {
                _toggle.addEventListener('click', e => {
                    e.preventDefault();
                    const _target = e.currentTarget;
                    const _parent = _target.parentNode;

                    _parent.classList.toggle('active');
                });
            });
        });
    }

    // LAZY LOAD IMAGES
    const _images = document.querySelectorAll('img');

	[].forEach.call( _images, image => {
	
        let _source = image.getAttribute('data-src');

        image.setAttribute('src', _source);

        image.onload = () => {

        image.removeAttribute('data-src');

        }

	});

    //IMG TAG TO SVG CODE
    $('.img-svg').each(function() {
        var $img = $(this);
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');
            // Replace image with new SVG
            $img.replaceWith($svg);
        });
    });

// SLICK SLIDER FOR CHALLENGES
$('.card--carousel')
.on('afterChange init', function(event, slick, direction){
    console.log('afterChange/init', event);
    // remove all prev/next
    slick.$slides.removeClass('card--prev').removeClass('card--next');

    // find current slide
    for (var i = 0; i < slick.$slides.length; i++)
    {
        var $slide = $(slick.$slides[i]);
        if ($slide.hasClass('slick-current')) {
            // update DOM siblings
            $slide.prev().addClass('card--prev');
            $slide.next().addClass('card--next');
            break;
        }
    }
}
)

.on('beforeChange', function(event, slick) {
    // optional, but cleaner maybe
    // remove all prev/next
    slick.$slides.removeClass('card--prev').removeClass('card--next');
    })
    .slick({
        centerMode: true,
        centerPadding: '0',
        arrows: true,
        slidesToShow: 3,
        initialSlide: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 1024, 
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768, 
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480, 
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
 
// update progress bar
$('.card--carousel').on('afterChange', (event, slick, currentSlide) => {
    updateProgressBar(slick, currentSlide);
});
const updateProgressBar = (slick, currentSlide) => {
    console.log('updateProgressBar called', currentSlide);  // Debugging line

    let progress;
    let tooltipText;
    switch (currentSlide) {
        case 1:
            console.log('case 1');
            progress = (1 / 3) * 100;
            tooltipText = '<p style="font-size: 16px;font-weight: 500;}">Trading Period <br> $10,000.00</p>Unlimited Days';
            break;
        case 2:
            console.log('case 2');
            progress = (2 / 3) * 100;
            tooltipText = '<p style="font-size: 16px;font-weight: 500;}">Trading Period <br> $25,000.00</p>Unlimited Days';
            break;
        case 3:
            console.log('case 3');
            progress = (3 / 3) * 100;
            tooltipText = '<p style="font-size: 16px;font-weight: 500;}">Trading Period <br> $5,000.00</p>Unlimited Days';
            break;
        default:
            console.error('Unexpected slide index:', currentSlide);
            return;
    }

    const progressBarFill = document.getElementById('slider-progress-fill');
    const tooltip = document.getElementById('tooltip_bar');
    const progressBarWidth = document.getElementById('slider-progress').offsetWidth;

    progressBarFill.style.width = `${progress}%`;
    $(tooltip).html(tooltipText);
};

updateProgressBar($('.card--carousel').slick('getSlick'), $('.card--carousel').slick('slickCurrentSlide'));



})();

