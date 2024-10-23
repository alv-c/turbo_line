<?php
$nomePrimarioTitulo = '';
$pagina = 'Institucional';
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/header.php';
?>

<section class="media-institucional">
    <div class="container">
        <div class="top">
            <span class="titulo">
                Conectando o Futuro com a TurboLine
            </span>
            <span class="desc">
                Somos um time apaixonado por tecnologia, inovação e, acima de tudo, excelência
                em conectividade. Nosso propósito é claro: <strong>levar a melhor experiência em
                    internet de fibra óptica para lares e empresas</strong>, garantindo uma navegação
                rápida, estável e sem interrupções.
            </span>
        </div>


        <div class="bottom">

            <button class="video-modal" data-video="https://www.youtube.com/watch?v=RqlvAIlAwmw&t=7s" data-toggle="modal" data-target="#videoModal">
                <img src="/website/img/institucional/bg-video-inst.png" alt="">

                <!-- VIDEO -->
                <div class="wrap">
                    <div class="button">
                        <svg width="135" height="135" viewBox="0 0 135 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="67.5002" cy="67.5" r="67.3073" fill="white" />
                            <path d="M56.4553 85.87L81.2934 68.7282C81.6935 68.4519 82.0147 68.1091 82.2349 67.7235C82.4551 67.3378 82.5692 66.9183 82.5692 66.4938C82.5692 66.0693 82.4551 65.6498 82.2349 65.2642C82.0147 64.8785 81.6935 64.5357 81.2934 64.2594L56.4553 47.1177C54.0844 45.4817 50.4224 46.8381 50.4224 49.3521L50.4224 83.6405C50.4224 86.1545 54.0844 87.5108 56.4553 85.87V85.87Z" fill="#173F35" />
                        </svg>
                    </div>
                </div>
            </button>

        </div>


    </div>
</section>

<?php require $_SERVER["DOCUMENT_ROOT"] . '/website/includes/modal_video.php'; ?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/footer.php';
?>