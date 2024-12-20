<?php
$nomePrimarioTitulo = '';
$pagina = 'contato';
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/header.php';
?>
<section class="bg-contato">
    <div class="container">
        <span class="titulo">Contato</span>
    </div>
</section>
<section class="form-contato">
    <div class="container">
        <div class="grid">
            <div class="left">
                <span class="titulo">Fale conosco</span>
                <span class="desc">
                    Entre em contato através dos nossos canais de atendimento ou deixe uma mensagem no formúlario.
                </span>
                <span class="subtitulo">Canais de atendimento:</span>
                <div class="item-canal">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1074 12.1081C13.7355 12.1081 13.0196 13.4871 12.5897 13.4871C12.4777 13.4824 12.369 13.4482 12.2748 13.3879C11.4729 12.9891 10.771 12.5774 10.1122 11.9524C9.56726 11.4405 8.96637 10.6726 8.65243 10.005C8.6091 9.94172 8.58387 9.86801 8.57944 9.79167C8.57944 9.46429 9.56926 8.85417 9.56926 8.31349C9.56926 8.17163 8.83939 6.24008 8.73741 5.99702C8.59444 5.62798 8.52345 5.51389 8.13752 5.51389C7.95055 5.51389 7.77759 5.47123 7.60762 5.47123C7.30567 5.47123 7.07771 5.58532 6.86175 5.78373C6.17388 6.42361 5.82994 7.09127 5.80195 8.02976V8.14286C5.78695 9.125 6.27386 10.1042 6.81876 10.9008C8.04854 12.7063 9.3243 14.2837 11.3719 15.2063C11.9878 15.4911 13.4066 16.0873 14.0934 16.0873C14.9103 16.0873 16.243 15.5764 16.571 14.7798C16.701 14.4524 16.8149 14.0556 16.8149 13.7004C16.8149 13.6429 16.8149 13.5575 16.7849 13.4871C16.685 13.3165 14.3514 12.1081 14.1074 12.1081ZM11.2 19.6409C9.45328 19.6409 7.7206 19.1151 6.25886 18.1627L2.79249 19.256L3.92429 15.9454C2.80777 14.4265 2.20566 12.5953 2.2046 10.7153C2.2046 5.7996 6.24386 1.79167 11.2 1.79167C16.1561 1.79167 20.1963 5.79861 20.1963 10.7143C20.1963 15.6329 16.1571 19.6409 11.2 19.6409ZM11.2 0C5.24105 0 0.401927 4.80357 0.401927 10.7143C0.401927 12.6627 0.93183 14.5814 1.94765 16.244L0 22L5.97291 20.0952C7.61755 20.9961 9.47048 21.456 11.3489 21.4294C13.2273 21.4029 15.0663 20.8908 16.6844 19.9438C18.3025 18.9968 19.6438 17.6476 20.5759 16.0292C21.5081 14.4109 21.9989 12.5793 22 10.7153C22 4.80456 17.1589 0 11.2 0Z" fill="black" />
                        </svg>
                    </div>
                    <span>(62) 3094-3385</span>
                </div>
                <div class="item-canal">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <mask id="mask0_1939_3355" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
                                <rect width="25" height="25" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M9.50065 22.9166C7.66037 22.9166 6.15864 22.6258 4.99544 22.0442C3.83225 21.4626 3.25065 20.7117 3.25065 19.7916C3.25065 19.3749 3.37652 18.9886 3.62826 18.6327C3.87999 18.2768 4.23155 17.9687 4.68294 17.7083L6.32357 19.2447C6.16732 19.3142 5.99805 19.3923 5.81576 19.4791C5.63346 19.5659 5.49023 19.6701 5.38607 19.7916C5.61176 20.0694 6.1326 20.3124 6.94857 20.5208C7.76454 20.7291 8.61523 20.8333 9.50065 20.8333C10.3861 20.8333 11.2411 20.7291 12.0658 20.5208C12.8904 20.3124 13.4156 20.0694 13.6413 19.7916C13.5197 19.6527 13.3635 19.5399 13.1725 19.453C12.9816 19.3662 12.7993 19.2881 12.6257 19.2187L14.2402 17.6562C14.7263 17.9339 15.0996 18.2508 15.36 18.6067C15.6204 18.9626 15.7507 19.3576 15.7507 19.7916C15.7507 20.7117 15.1691 21.4626 14.0059 22.0442C12.8427 22.6258 11.3409 22.9166 9.50065 22.9166ZM9.52669 17.1874C11.2454 15.9201 12.5388 14.6484 13.4069 13.3723C14.275 12.0963 14.709 10.8159 14.709 9.53117C14.709 7.76034 14.1447 6.42353 13.0163 5.52075C11.8878 4.61797 10.7159 4.16659 9.50065 4.16659C8.28537 4.16659 7.1135 4.61797 5.98503 5.52075C4.85655 6.42353 4.29232 7.76034 4.29232 9.53117C4.29232 10.6944 4.71766 11.9053 5.56836 13.164C6.41905 14.4227 7.7385 15.7638 9.52669 17.1874ZM9.50065 19.7916C7.05273 17.986 5.22548 16.2326 4.01888 14.5312C2.81228 12.8298 2.20898 11.1631 2.20898 9.53117C2.20898 8.29853 2.43034 7.2178 2.87305 6.28898C3.31576 5.36016 3.88433 4.58325 4.57878 3.95825C5.27322 3.33325 6.05447 2.8645 6.92253 2.552C7.79058 2.2395 8.64996 2.08325 9.50065 2.08325C10.3513 2.08325 11.2107 2.2395 12.0788 2.552C12.9468 2.8645 13.7281 3.33325 14.4225 3.95825C15.117 4.58325 15.6855 5.36016 16.1283 6.28898C16.571 7.2178 16.7923 8.29853 16.7923 9.53117C16.7923 11.1631 16.189 12.8298 14.9824 14.5312C13.7758 16.2326 11.9486 17.986 9.50065 19.7916ZM9.50065 11.4583C10.0736 11.4583 10.564 11.2543 10.972 10.8463C11.38 10.4383 11.584 9.94784 11.584 9.37492C11.584 8.802 11.38 8.31155 10.972 7.90356C10.564 7.49558 10.0736 7.29159 9.50065 7.29159C8.92773 7.29159 8.43728 7.49558 8.0293 7.90356C7.62131 8.31155 7.41732 8.802 7.41732 9.37492C7.41732 9.94784 7.62131 10.4383 8.0293 10.8463C8.43728 11.2543 8.92773 11.4583 9.50065 11.4583Z" fill="#1C1B1F" />
                            </g>
                        </svg>
                    </div>
                    <span>Avenida Tropical Quadra 106 Lt 03 - Setor Garavelo</span>
                </div>
            </div>
            <div class="right">
                <fieldset>
                    <form action="#" method="post" id="form-contato">
                        <div class="item">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-contato" placeholder="Nome completo" required>
                        </div>
                        <div class="grid-form">
                            <div class="item">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-contato" placeholder="contato@exemplo.com" required>
                            </div>
                            <div class="item">
                                <label for="whatsapp">Whatsapp</label>
                                <input type="text" name="whatsapp" id="whatsapp" class="form-contato mask_tel" placeholder="(00) 00000-0000" required>
                            </div>
                        </div>
                        <div class="item">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" class="form-contato" rows="3" placeholder="Fale um pouco sobre o que você está buscando..." required minlength="5" maxlength="500"></textarea>
                        </div>
                        <div class="item-check">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="aceite_termos" class="custom-control-input" id="form-chck-termos">
                                <label class="custom-control-label" for="form-chck-termos">
                                    Eu li e concordo com os termos de uso
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="submit-cntt">Enviar agora</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</section>
<section class="mapa-contato">
    <div class="content-map">
        <div id="mapa"></div>
    </div>
</section>

<script>
    // Função para enviar os dados via WhatsApp
    document.querySelector("form#form-contato").addEventListener("submit", function(event) {
        event.preventDefault();
        const nome = document.getElementById("nome").value;
        const email = document.getElementById("email").value;
        const whatsapp = document.getElementById("whatsapp").value;
        const mensagem = document.getElementById("mensagem").value;
        const aceiteTermos = document.getElementById("form-chck-termos").checked;
        if (!aceiteTermos) {
            alert("Você precisa aceitar os termos de uso para enviar o formulário.");
            return;
        }
        const mensagemWhatsApp = `
            Olá, meu nome é ${nome};
            E-mail: ${email};
            WhatsApp: ${whatsapp};
            Mensagem: ${mensagem}
        `;
        const numeroWhatsApp = "556230943385";
        const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(mensagemWhatsApp)}`;
        window.open(urlWhatsApp, "_blank");
        document.getElementById("nome").value = "";
        document.getElementById("email").value = "";
        document.getElementById("whatsapp").value = "";
        document.getElementById("mensagem").value = "";
        document.getElementById("form-chck-termos").checked = false;
    });
</script>


<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/footer.php';
?>