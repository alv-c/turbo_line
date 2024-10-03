$(document).ready(function () {
    switch (pagina) {
        case 'inicial':
            $.getScript("/website/js/paginas/index.js");
            break;
    }

    $('#navbar').on('shown.bs.collapse', function () {
        $('body').css('overflow', 'hidden');
    });

    $('#navbar').on('hidden.bs.collapse', function () {
        $('body').css('overflow', 'auto');
    });
});

//efeito navbar superior
$(window).on('scroll', function () {
    if ($(window).scrollTop() === 0) {
        $('#navbar').css('padding', '15px 0');
    } else {
        $('#navbar').css('padding', '5px 0');
    }
});