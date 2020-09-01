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

    $('.hapo-slide-block').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('[data-toggle="tooltip"]').tooltip();

    if ($("#exampleModal input").hasClass("is-invalid")) {
        $("#exampleModal").modal("show");
    }

    // search filter
    $(document).ready(function() {
        $('#myInput').on('keyup', function(event) {
            event.preventDefault();
            var key = $(this).val().toLowerCase();
            $('#myTable tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(key)>-1);
            });
        });
    });

    var fullRating = $('#fiveStarVal').val();
    var fourStar = $('#fourStarVal').val();
    var threeStar = $('#threeStarVal').val();
    var twoStar = $('#twoStarVal').val();
    var oneStar = $('#oneStarVal').val();
    $('#fiveStar').width(fullRating);
    $('#fourStar').width(fourStar);
    $('#threeStar').width(threeStar);
    $('#twoStar').width(twoStar);
    $('#oneStar').width(oneStar);
});
