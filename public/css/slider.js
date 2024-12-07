$(document).ready(function(){
    $('.items').slick({
        infinite: true,         // Infinite loop
        slidesToShow: 4,        // Number of visible slides
        slidesToScroll: 1,      // Scroll one item at a time
        autoplay: true,         // Enable auto sliding
        autoplaySpeed: 2000,    // Set auto slide speed (2000ms = 2 seconds)
        arrows: true,           // Show next/prev buttons
        prevArrow: '<button type="button" class="slick-prev">❮</button>',
        nextArrow: '<button type="button" class="slick-next">❯</button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,   // Adjust for medium screens
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,   // Adjust for smaller screens
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,   // Adjust for very small screens (mobile)
                }
            }
        ]
    });
});