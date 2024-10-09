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
        $('#navbar').css('box-shadow', 'none');
    } else {
        $('#navbar').css('padding', '5px 0');
        $('#navbar').css('box-shadow', 'rgba(0, 0, 0, 0.45) 0px 25px 20px -20px');
    }
});