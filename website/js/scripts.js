$(document).ready(function () {
    switch (pagina) {
        case 'inicial':
            $.getScript("/website/js/paginas/index.js");
            break;
        
        case 'Institucional':
            $.getScript("/website/js/paginas/institucional.js");
            break;
    }
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

/**
 * MODAL VIDEO
 */
$(".video-modal").click(function () {
    let options = {
        modestbranding: 1,
        rel: 0,
        controls: 1,
        showinfo: 0,
        html5: 1,
        autoplay: 1,
        mute: 1,
        loop: 1,
        fs: 0
    }

    var theModal = $(this).data("target"),
        videoSRC = getId($(this).attr("data-video")),
        videoSRCauto = videoSRC + `?${new URLSearchParams(options).toString()}`;

    setTimeout(function () {
        $(theModal + ' iframe').attr('src', videoSRCauto);
    }, 1000);

    $(theModal).on('hidden.bs.modal', function () {
        $(theModal + ' iframe').attr('src', videoSRC);
    });
});

function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return `https://www.youtube.com/embed/${match[2]}`
    } else {
        return 'error';
    }
}
/**
 * FIM MODAL VIDEO
 */