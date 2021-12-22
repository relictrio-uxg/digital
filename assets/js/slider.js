$(document).ready(function () {
    $('.customer-logos, .designdevelop__service--slider, .weareexperts__slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1800,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 1350,
            settings: {
                slidesToShow: 5
            }
        }, {
            breakpoint: 834,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 540,
            settings: {
                slidesToShow: 4
            }
        }
        ],

    });
});