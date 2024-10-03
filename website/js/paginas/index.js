$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<img src='/website/img/index/arrow-left.svg'>", "<img src='/website/img/index/arrow-right.svg'>"],
        dots: false,
        dotsData: true,
        dotsContainer: '.owl-dots',
        startPosition: 1,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".banners-home > .aligner > .owl-dots > button.owl-dot").click(function () {
        let itens = $('.banners-home > .aligner > .owl-dots > button.owl-dot');
        for(let i = 0; i < itens.length; i++) {
            $(itens[i]).removeClass('active');
        }
        $(this).addClass('active');
    });
});