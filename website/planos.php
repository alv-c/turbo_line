<?php
$nomePrimarioTitulo = '';
$pagina = 'Planos';
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/header.php';
?>
<section class="bg-planos">
    <div class="container">
        <span class="titulo">Planos</span>
    </div>
</section>

<section class="listagem-planos">
    <div class="container">
        <span class="titulo">Ofertas por tempo limitado, <strong>assine agora mesmo</strong></span>
        <span class="desc">
            Assine agora mesmo a internet banda larga e tenha internet com estabilidade e segurança
        </span>

        <div class="grid-btns">
            <div class="left">
                <button type="button" class="btn-filtro active">Para você</button>
            </div>
            <div class="right">
                <button type="button" class="btn-filtro">Para sua empresa</button>
            </div>
        </div>
    </div>
</section>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/footer.php';
?>