$(document).ready(function () {
    $(function () {
        var owl = $("#carousel-banners");
        owl.owlCarousel({
            items: 1,
            margin: 10,
            loop: true,
            nav: true,
            navText: ["<img src='/website/img/index/arrow-left.svg'>", "<img src='/website/img/index/arrow-right.svg'>"],
            dots: false,
            dotsData: true,
            dotsContainer: '.owl-dots',
            startPosition: 1,
            autoplay: true,
            autoplayHoverPause: true,
            startPosition: 1,
            autoplay: true,
            autoplayHoverPause: true,
        });
    });


    $(".banners-home > .aligner > .owl-dots > button.owl-dot").click(function () {
        let itens = $('.banners-home > .aligner > .owl-dots > button.owl-dot');
        for (let i = 0; i < itens.length; i++) {
            $(itens[i]).removeClass('active');
        }
        $(this).addClass('active');
    });

    $(function () {
        var owl = $("#carousel-clientes");
        owl.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
        });
    });
});