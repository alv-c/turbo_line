$(document).ready(function () {
    $(function () {
        let owl = $("#carousel-banners");
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
        let owl = $("#carousel-clientes");
        owl.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
                1300: {
                    items: 5,
                }
            }
        });

        $('.custom-next').click(function () {
            owl.trigger('next.owl.carousel');
        });

        $('.custom-prev').click(function () {
            owl.trigger('prev.owl.carousel');
        });
    });
});

const observador = (function () {
    const init = function () {
        createObserver();
    };
    const createObserver = function () {
        let options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.5
        };
        let observer = new IntersectionObserver(
            function (entries, observer) {
                handleIntersect(entries, observer);
            },
            options);
        let targetElements = document.querySelectorAll("[data-animation='true']");
        targetElements.forEach((targetElement) => {
            observer.observe(targetElement);
        });
    };
    const handleIntersect = function (entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animacao");
                observer.unobserve(entry.target);
            }
        });
    };
    return {
        init: init
    };
})();
observador.init();