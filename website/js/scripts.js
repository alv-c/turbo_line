$(document).ready(function () {
    switch (pagina) {
        case 'inicial':
            $.getScript("/website/js/paginas/index.js");
            break;
    }
});