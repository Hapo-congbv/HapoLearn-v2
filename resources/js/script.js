$(document).ready(function () {
    $('.navbar-toggler').click(function () {
        $('.icon').toggleClass('fa-times');
        $('.icon').toggleClass('fa-bars');
    });

    $('.messenger').click(function () {
        $('.toggle-class').toggle();
    });

    $('.close').click(function () {
        $('.toggle-class').hide();
    });

    $('.hapo-feedback-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        adaptiveHeight: false,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnFocus: true,
        pauseOnHover: true,
        prevArrow: $('.previous-icon'),
        nextArrow: $('.next-icon'),

        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
});
