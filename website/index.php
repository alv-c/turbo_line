<?php
$nomePrimarioTitulo = 'Página';
$pagina = 'inicial';
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/header.php';
?>

<section class="banners-home">
    <div class="aligner">
        <div id="carousel-banners" class="owl-carousel owl-theme">
            <div class="item">
                <a href="#">
                    <!-- desktop -->
                    <img src="/website/img/index/banner_1.png" class="d-none d-md-block" alt="Turbo Line internet fibra óptica">
                    <!-- mobille -->
                    <img src="/website/img/img-exemplo-mobille.png" class="d-block d-md-none" alt="Turbo Line internet fibra óptica">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <!-- desktop -->
                    <img src="/website/img/index/banner_2.png" class="d-none d-md-block" alt="Turbo Line internet fibra óptica">
                    <!-- mobille -->
                    <img src="/website/img/img-exemplo-mobille.png" class="d-block d-md-none" alt="Turbo Line internet fibra óptica">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <!-- desktop -->
                    <img src="/website/img/index/banner_3.png" class="d-none d-md-block" alt="Turbo Line internet fibra óptica">
                    <!-- mobille -->
                    <img src="/website/img/img-exemplo-mobille.png" class="d-block d-md-none" alt="Turbo Line internet fibra óptica">
                </a>
            </div>
        </div>
        <div class="owl-dots">
            <button role="button" class="owl-dot"></button>
            <button role="button" class="owl-dot active"></button>
            <button role="button" class="owl-dot"></button>
        </div>
    </div>
</section>
<section class="ofertas-home">
    <div class="container">
        <span class="titulo">
            Ofertas por tempo limitado, <span class="destaque">assine agora mesmo</span>
        </span>
        <span class="subtitulo">
            Assine agora mesmo a internet banda larga e tenha internet com estabilidade e segurança
        </span>
        <div class="contain-filtros-ofertas">
            <button type="button" class="btn-filtro-ofertas">
                Para você
            </button>
            <button type="button" class="btn-filtro-ofertas">
                Para sua empresa
            </button>
        </div>
        <div class="contain-cards-ofertas">
            <div class="coluna">
                <div class="card-oferta">
                    <div class="header-card">
                        <span class="subtitulo">
                            Turbo Fibra
                        </span>
                        <span class="titulo">
                            300 Mega
                        </span>
                    </div>
                    <div class="body-card">
                        <span class="preco">R$ 69,90/mês</span>
                        <span class="validade-oferta">Oferta válida por 12 meses</span>
                        <a href="#" class="assinatura-card">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 9.81225C10.4895 9.81225 9.96882 10.823 9.65615 10.823C9.57469 10.8196 9.49562 10.7945 9.4271 10.7503C8.84394 10.458 8.33349 10.1562 7.8543 9.69809C7.45801 9.32289 7.021 8.76008 6.79267 8.27071C6.76116 8.22436 6.74282 8.17033 6.73959 8.11438C6.73959 7.87442 7.45946 7.42723 7.45946 7.03094C7.45946 6.92696 6.92865 5.51121 6.85448 5.33306C6.7505 5.06257 6.69887 4.97895 6.4182 4.97895C6.28222 4.97895 6.15643 4.94768 6.03281 4.94768C5.81322 4.94768 5.64743 5.0313 5.49037 5.17673C4.99009 5.64573 4.73996 6.1351 4.7196 6.82298V6.90587C4.70869 7.62574 5.06281 8.34343 5.4591 8.92732C6.35348 10.2507 7.28131 11.4069 8.7705 12.0831C9.21842 12.2918 10.2502 12.7288 10.7498 12.7288C11.3438 12.7288 12.3131 12.3543 12.5516 11.7704C12.6462 11.5305 12.7291 11.2396 12.7291 10.9793C12.7291 10.9371 12.729 10.8746 12.7072 10.823C12.6345 10.6979 10.9374 9.81225 10.76 9.81225ZM8.64543 15.3334C7.37511 15.3334 6.11498 14.948 5.0519 14.25L2.5309 15.0513L3.35403 12.6248C2.54201 11.5115 2.10412 10.1693 2.10334 8.79134C2.10334 5.18836 5.04099 2.25072 8.64543 2.25072C12.2499 2.25072 15.1882 5.18764 15.1882 8.79062C15.1882 12.3958 12.2506 15.3334 8.64543 15.3334ZM8.64543 0.9375C4.31167 0.9375 0.79231 4.45831 0.79231 8.79062C0.79231 10.2187 1.17769 11.625 1.91647 12.8437L0.5 17.0626L4.84394 15.6665C6.04003 16.3268 7.38762 16.6638 8.75373 16.6444C10.1199 16.6249 11.4573 16.2496 12.6341 15.5555C13.8109 14.8614 14.7864 13.8724 15.4643 12.6862C16.1423 11.5 16.4992 10.1576 16.5 8.79134C16.5 4.45904 12.9792 0.9375 8.64543 0.9375Z" fill="white" />
                                </svg>
                            </div>
                            <span>Assinar agora</span>
                        </a>
                        <div class="tipo-pag">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <mask id="mask0_1939_1269" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                        <rect x="0.5" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M7.5 17H14.5V15H7.5V17ZM7.5 13H17.5V11H7.5V13ZM7.5 9H17.5V7H7.5V9ZM5.5 21C4.95 21 4.47917 20.8042 4.0875 20.4125C3.69583 20.0208 3.5 19.55 3.5 19V5C3.5 4.45 3.69583 3.97917 4.0875 3.5875C4.47917 3.19583 4.95 3 5.5 3H19.5C20.05 3 20.5208 3.19583 20.9125 3.5875C21.3042 3.97917 21.5 4.45 21.5 5V19C21.5 19.55 21.3042 20.0208 20.9125 20.4125C20.5208 20.8042 20.05 21 19.5 21H5.5ZM5.5 19H19.5V5H5.5V19Z" />
                                    </g>
                                </svg>
                            </div>
                            <span>Pagamento via boleto</span>
                        </div>
                    </div>
                    <div class="footer-card">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect x="0.5" y="0.5" width="47" height="47" rx="3.5" />
                                <mask id="mask0_1939_1333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="24" height="24">
                                    <rect x="12" y="12" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1939_1333)">
                                    <path d="M24.0001 32.7115C23.4347 32.7115 22.9568 32.5164 22.5663 32.126C22.176 31.7357 21.9808 31.2578 21.9808 30.6923C21.9808 30.127 22.176 29.6491 22.5663 29.2588C22.9568 28.8685 23.4347 28.6733 24.0001 28.6733C24.5654 28.6733 25.0433 28.8685 25.4338 29.2588C25.8242 29.6491 26.0193 30.127 26.0193 30.6923C26.0193 31.2578 25.8242 31.7357 25.4338 32.126C25.0433 32.5164 24.5654 32.7115 24.0001 32.7115ZM18.3501 27.35L16.7886 25.7578C17.7142 24.8321 18.792 24.1026 20.0218 23.5693C21.2518 23.036 22.5784 22.7693 24.0016 22.7693C25.4249 22.7693 26.751 23.0385 27.9798 23.577C29.2087 24.1155 30.2859 24.8527 31.2116 25.7885L29.6501 27.35C28.9167 26.6167 28.0667 26.0417 27.1001 25.625C26.1334 25.2084 25.1001 25 24.0001 25C22.9001 25 21.8667 25.2084 20.9001 25.625C19.9334 26.0417 19.0834 26.6167 18.3501 27.35ZM14.1001 23.1L12.5386 21.5385C14.0014 20.0552 15.7097 18.8895 17.6636 18.0415C19.6174 17.1934 21.7296 16.7693 24.0001 16.7693C26.2706 16.7693 28.3827 17.1934 30.3366 18.0415C32.2904 18.8895 33.9987 20.0552 35.4616 21.5385L33.9001 23.1C32.6167 21.8167 31.1292 20.8125 29.4376 20.0875C27.7459 19.3625 25.9334 19 24.0001 19C22.0667 19 20.2542 19.3625 18.5626 20.0875C16.8709 20.8125 15.3834 21.8167 14.1001 23.1Z" fill="red" />
                                </g>
                            </svg>
                        </div>
                        <div class="right-footer-card">
                            <span class="beneficio">
                                1 Ponto Wi-fi
                            </span>
                            <span class="inclusao">
                                Incluído
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coluna">
                <div class="card-oferta oferta">
                    <div class="header-card">
                        <span class="subtitulo">
                            Turbo Fibra
                        </span>
                        <span class="titulo">
                            300 Mega
                        </span>
                    </div>
                    <div class="body-card">
                        <span class="preco">R$ 69,90/mês</span>
                        <span class="validade-oferta">Oferta válida por 12 meses</span>
                        <a href="#" class="assinatura-card">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 9.81225C10.4895 9.81225 9.96882 10.823 9.65615 10.823C9.57469 10.8196 9.49562 10.7945 9.4271 10.7503C8.84394 10.458 8.33349 10.1562 7.8543 9.69809C7.45801 9.32289 7.021 8.76008 6.79267 8.27071C6.76116 8.22436 6.74282 8.17033 6.73959 8.11438C6.73959 7.87442 7.45946 7.42723 7.45946 7.03094C7.45946 6.92696 6.92865 5.51121 6.85448 5.33306C6.7505 5.06257 6.69887 4.97895 6.4182 4.97895C6.28222 4.97895 6.15643 4.94768 6.03281 4.94768C5.81322 4.94768 5.64743 5.0313 5.49037 5.17673C4.99009 5.64573 4.73996 6.1351 4.7196 6.82298V6.90587C4.70869 7.62574 5.06281 8.34343 5.4591 8.92732C6.35348 10.2507 7.28131 11.4069 8.7705 12.0831C9.21842 12.2918 10.2502 12.7288 10.7498 12.7288C11.3438 12.7288 12.3131 12.3543 12.5516 11.7704C12.6462 11.5305 12.7291 11.2396 12.7291 10.9793C12.7291 10.9371 12.729 10.8746 12.7072 10.823C12.6345 10.6979 10.9374 9.81225 10.76 9.81225ZM8.64543 15.3334C7.37511 15.3334 6.11498 14.948 5.0519 14.25L2.5309 15.0513L3.35403 12.6248C2.54201 11.5115 2.10412 10.1693 2.10334 8.79134C2.10334 5.18836 5.04099 2.25072 8.64543 2.25072C12.2499 2.25072 15.1882 5.18764 15.1882 8.79062C15.1882 12.3958 12.2506 15.3334 8.64543 15.3334ZM8.64543 0.9375C4.31167 0.9375 0.79231 4.45831 0.79231 8.79062C0.79231 10.2187 1.17769 11.625 1.91647 12.8437L0.5 17.0626L4.84394 15.6665C6.04003 16.3268 7.38762 16.6638 8.75373 16.6444C10.1199 16.6249 11.4573 16.2496 12.6341 15.5555C13.8109 14.8614 14.7864 13.8724 15.4643 12.6862C16.1423 11.5 16.4992 10.1576 16.5 8.79134C16.5 4.45904 12.9792 0.9375 8.64543 0.9375Z" fill="white" />
                                </svg>
                            </div>
                            <span>Assinar agora</span>
                        </a>
                        <div class="tipo-pag">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <mask id="mask0_1939_1269" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                        <rect x="0.5" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M7.5 17H14.5V15H7.5V17ZM7.5 13H17.5V11H7.5V13ZM7.5 9H17.5V7H7.5V9ZM5.5 21C4.95 21 4.47917 20.8042 4.0875 20.4125C3.69583 20.0208 3.5 19.55 3.5 19V5C3.5 4.45 3.69583 3.97917 4.0875 3.5875C4.47917 3.19583 4.95 3 5.5 3H19.5C20.05 3 20.5208 3.19583 20.9125 3.5875C21.3042 3.97917 21.5 4.45 21.5 5V19C21.5 19.55 21.3042 20.0208 20.9125 20.4125C20.5208 20.8042 20.05 21 19.5 21H5.5ZM5.5 19H19.5V5H5.5V19Z" />
                                    </g>
                                </svg>
                            </div>
                            <span>Pagamento via boleto</span>
                        </div>
                    </div>
                    <div class="footer-card">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect x="0.5" y="0.5" width="47" height="47" rx="3.5" />
                                <mask id="mask0_1939_1333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="24" height="24">
                                    <rect x="12" y="12" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1939_1333)">
                                    <path d="M24.0001 32.7115C23.4347 32.7115 22.9568 32.5164 22.5663 32.126C22.176 31.7357 21.9808 31.2578 21.9808 30.6923C21.9808 30.127 22.176 29.6491 22.5663 29.2588C22.9568 28.8685 23.4347 28.6733 24.0001 28.6733C24.5654 28.6733 25.0433 28.8685 25.4338 29.2588C25.8242 29.6491 26.0193 30.127 26.0193 30.6923C26.0193 31.2578 25.8242 31.7357 25.4338 32.126C25.0433 32.5164 24.5654 32.7115 24.0001 32.7115ZM18.3501 27.35L16.7886 25.7578C17.7142 24.8321 18.792 24.1026 20.0218 23.5693C21.2518 23.036 22.5784 22.7693 24.0016 22.7693C25.4249 22.7693 26.751 23.0385 27.9798 23.577C29.2087 24.1155 30.2859 24.8527 31.2116 25.7885L29.6501 27.35C28.9167 26.6167 28.0667 26.0417 27.1001 25.625C26.1334 25.2084 25.1001 25 24.0001 25C22.9001 25 21.8667 25.2084 20.9001 25.625C19.9334 26.0417 19.0834 26.6167 18.3501 27.35ZM14.1001 23.1L12.5386 21.5385C14.0014 20.0552 15.7097 18.8895 17.6636 18.0415C19.6174 17.1934 21.7296 16.7693 24.0001 16.7693C26.2706 16.7693 28.3827 17.1934 30.3366 18.0415C32.2904 18.8895 33.9987 20.0552 35.4616 21.5385L33.9001 23.1C32.6167 21.8167 31.1292 20.8125 29.4376 20.0875C27.7459 19.3625 25.9334 19 24.0001 19C22.0667 19 20.2542 19.3625 18.5626 20.0875C16.8709 20.8125 15.3834 21.8167 14.1001 23.1Z" fill="red" />
                                </g>
                            </svg>
                        </div>
                        <div class="right-footer-card">
                            <span class="beneficio">
                                1 Ponto Wi-fi
                            </span>
                            <span class="inclusao">
                                Incluído
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coluna">
                <div class="card-oferta mais-vendido">
                    <div class="header-card">
                        <span class="subtitulo">
                            Turbo Fibra
                        </span>
                        <span class="titulo">
                            300 Mega
                        </span>
                    </div>
                    <div class="body-card">
                        <span class="preco">R$ 69,90/mês</span>
                        <span class="validade-oferta">Oferta válida por 12 meses</span>
                        <a href="#" class="assinatura-card">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 9.81225C10.4895 9.81225 9.96882 10.823 9.65615 10.823C9.57469 10.8196 9.49562 10.7945 9.4271 10.7503C8.84394 10.458 8.33349 10.1562 7.8543 9.69809C7.45801 9.32289 7.021 8.76008 6.79267 8.27071C6.76116 8.22436 6.74282 8.17033 6.73959 8.11438C6.73959 7.87442 7.45946 7.42723 7.45946 7.03094C7.45946 6.92696 6.92865 5.51121 6.85448 5.33306C6.7505 5.06257 6.69887 4.97895 6.4182 4.97895C6.28222 4.97895 6.15643 4.94768 6.03281 4.94768C5.81322 4.94768 5.64743 5.0313 5.49037 5.17673C4.99009 5.64573 4.73996 6.1351 4.7196 6.82298V6.90587C4.70869 7.62574 5.06281 8.34343 5.4591 8.92732C6.35348 10.2507 7.28131 11.4069 8.7705 12.0831C9.21842 12.2918 10.2502 12.7288 10.7498 12.7288C11.3438 12.7288 12.3131 12.3543 12.5516 11.7704C12.6462 11.5305 12.7291 11.2396 12.7291 10.9793C12.7291 10.9371 12.729 10.8746 12.7072 10.823C12.6345 10.6979 10.9374 9.81225 10.76 9.81225ZM8.64543 15.3334C7.37511 15.3334 6.11498 14.948 5.0519 14.25L2.5309 15.0513L3.35403 12.6248C2.54201 11.5115 2.10412 10.1693 2.10334 8.79134C2.10334 5.18836 5.04099 2.25072 8.64543 2.25072C12.2499 2.25072 15.1882 5.18764 15.1882 8.79062C15.1882 12.3958 12.2506 15.3334 8.64543 15.3334ZM8.64543 0.9375C4.31167 0.9375 0.79231 4.45831 0.79231 8.79062C0.79231 10.2187 1.17769 11.625 1.91647 12.8437L0.5 17.0626L4.84394 15.6665C6.04003 16.3268 7.38762 16.6638 8.75373 16.6444C10.1199 16.6249 11.4573 16.2496 12.6341 15.5555C13.8109 14.8614 14.7864 13.8724 15.4643 12.6862C16.1423 11.5 16.4992 10.1576 16.5 8.79134C16.5 4.45904 12.9792 0.9375 8.64543 0.9375Z" fill="white" />
                                </svg>
                            </div>
                            <span>Assinar agora</span>
                        </a>
                        <div class="tipo-pag">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <mask id="mask0_1939_1269" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                        <rect x="0.5" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M7.5 17H14.5V15H7.5V17ZM7.5 13H17.5V11H7.5V13ZM7.5 9H17.5V7H7.5V9ZM5.5 21C4.95 21 4.47917 20.8042 4.0875 20.4125C3.69583 20.0208 3.5 19.55 3.5 19V5C3.5 4.45 3.69583 3.97917 4.0875 3.5875C4.47917 3.19583 4.95 3 5.5 3H19.5C20.05 3 20.5208 3.19583 20.9125 3.5875C21.3042 3.97917 21.5 4.45 21.5 5V19C21.5 19.55 21.3042 20.0208 20.9125 20.4125C20.5208 20.8042 20.05 21 19.5 21H5.5ZM5.5 19H19.5V5H5.5V19Z" />
                                    </g>
                                </svg>
                            </div>
                            <span>Pagamento via boleto</span>
                        </div>
                    </div>
                    <div class="footer-card">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                <rect x="0.5" y="0.5" width="47" height="47" rx="3.5" />
                                <mask id="mask0_1939_1333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="24" height="24">
                                    <rect x="12" y="12" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_1939_1333)">
                                    <path d="M24.0001 32.7115C23.4347 32.7115 22.9568 32.5164 22.5663 32.126C22.176 31.7357 21.9808 31.2578 21.9808 30.6923C21.9808 30.127 22.176 29.6491 22.5663 29.2588C22.9568 28.8685 23.4347 28.6733 24.0001 28.6733C24.5654 28.6733 25.0433 28.8685 25.4338 29.2588C25.8242 29.6491 26.0193 30.127 26.0193 30.6923C26.0193 31.2578 25.8242 31.7357 25.4338 32.126C25.0433 32.5164 24.5654 32.7115 24.0001 32.7115ZM18.3501 27.35L16.7886 25.7578C17.7142 24.8321 18.792 24.1026 20.0218 23.5693C21.2518 23.036 22.5784 22.7693 24.0016 22.7693C25.4249 22.7693 26.751 23.0385 27.9798 23.577C29.2087 24.1155 30.2859 24.8527 31.2116 25.7885L29.6501 27.35C28.9167 26.6167 28.0667 26.0417 27.1001 25.625C26.1334 25.2084 25.1001 25 24.0001 25C22.9001 25 21.8667 25.2084 20.9001 25.625C19.9334 26.0417 19.0834 26.6167 18.3501 27.35ZM14.1001 23.1L12.5386 21.5385C14.0014 20.0552 15.7097 18.8895 17.6636 18.0415C19.6174 17.1934 21.7296 16.7693 24.0001 16.7693C26.2706 16.7693 28.3827 17.1934 30.3366 18.0415C32.2904 18.8895 33.9987 20.0552 35.4616 21.5385L33.9001 23.1C32.6167 21.8167 31.1292 20.8125 29.4376 20.0875C27.7459 19.3625 25.9334 19 24.0001 19C22.0667 19 20.2542 19.3625 18.5626 20.0875C16.8709 20.8125 15.3834 21.8167 14.1001 23.1Z" fill="red" />
                                </g>
                            </svg>
                        </div>
                        <div class="right-footer-card">
                            <span class="beneficio">
                                1 Ponto Wi-fi
                            </span>
                            <span class="inclusao">
                                Incluído
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contain-ver-mais">
            <button type="button" class="btn-ver-mais">
                <span>Ver mais ofertas</span>
                <div class="ico">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                        <rect width="33" height="33" rx="16.5" fill="#022E79" />
                        <mask id="mask0_1939_940" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="4" width="24" height="24">
                            <rect x="4" y="28" width="24" height="24" transform="rotate(-90 4 28)" fill="#D9D9D9" />
                        </mask>
                        <g>
                            <path d="M22.6875 18.5625L16.5 24.75L10.3125 18.5625L11.8078 17.1188L15.4687 20.7797L15.4687 8.25L17.5312 8.25L17.5312 20.7797L21.1922 17.1187L22.6875 18.5625Z" fill="white" />
                        </g>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</section>
<section class="quem-somos-home">
    <div class="container">
        <div class="top">
            <div class="col-left">
                <img src="/website/img/index/quem-somos-img.png" alt="Institucional TurboLine">
            </div>
            <div class="col-right">
                <span class="titulo">
                    A internet que <br>
                    <span class="destaq">Acompanha o Seu Ritmo!</span>
                </span>
                <span class="subtitulo">Na era digital, velocidade e estabilidade são essenciais.</span>
                <span class="desc">
                    Na TurboLine, entendemos que você precisa de uma conexão que acompanhe suas demandas diárias,
                    seja para trabalhar, estudar ou se entreter. É por isso que oferecemos internet de fibra
                    óptica ultrarrápida, projetada para entregar o máximo de desempenho, onde quer que você esteja.
                </span>
                <div class="contain-btns">
                    <a href="#" class="saiba-mais">Saiba mais</a>
                    <a href="#" class="fale-conosco">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.26 9.81225C9.98946 9.81225 9.46882 10.823 9.15615 10.823C9.07469 10.8196 8.99562 10.7945 8.9271 10.7503C8.34394 10.458 7.83349 10.1562 7.3543 9.69809C6.95801 9.32289 6.521 8.76008 6.29267 8.27071C6.26116 8.22436 6.24282 8.17033 6.23959 8.11438C6.23959 7.87442 6.95946 7.42723 6.95946 7.03094C6.95946 6.92696 6.42865 5.51121 6.35448 5.33306C6.2505 5.06257 6.19887 4.97895 5.9182 4.97895C5.78222 4.97895 5.65643 4.94768 5.53281 4.94768C5.31322 4.94768 5.14743 5.0313 4.99037 5.17673C4.49009 5.64573 4.23996 6.1351 4.2196 6.82298V6.90587C4.20869 7.62574 4.56281 8.34343 4.9591 8.92732C5.85348 10.2507 6.78131 11.4069 8.2705 12.0831C8.71842 12.2918 9.75023 12.7288 10.2498 12.7288C10.8438 12.7288 11.8131 12.3543 12.0516 11.7704C12.1462 11.5305 12.2291 11.2396 12.2291 10.9793C12.2291 10.9371 12.229 10.8746 12.2072 10.823C12.1345 10.6979 10.4374 9.81225 10.26 9.81225ZM8.14543 15.3334C6.87511 15.3334 5.61498 14.948 4.5519 14.25L2.0309 15.0513L2.85403 12.6248C2.04201 11.5115 1.60412 10.1693 1.60334 8.79134C1.60334 5.18836 4.54099 2.25072 8.14543 2.25072C11.7499 2.25072 14.6882 5.18764 14.6882 8.79062C14.6882 12.3958 11.7506 15.3334 8.14543 15.3334ZM8.14543 0.9375C3.81167 0.9375 0.29231 4.45831 0.29231 8.79062C0.29231 10.2187 0.677695 11.625 1.41647 12.8437L0 17.0626L4.34394 15.6665C5.54003 16.3268 6.88762 16.6638 8.25373 16.6444C9.61985 16.6249 10.9573 16.2496 12.1341 15.5555C13.3109 14.8614 14.2864 13.8724 14.9643 12.6862C15.6423 11.5 15.9992 10.1576 16 8.79134C16 4.45904 12.4792 0.9375 8.14543 0.9375Z" fill="white" />
                            </svg>
                        </div>
                        <span>Fale conosco</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="bottom-cards">
            <div class="card-inst">
                <div class="ico">
                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.221191" width="70.5574" height="70.5574" rx="35.2787" fill="#003DA6" />
                        <g clip-path="url(#clip0_1939_2174)">
                            <mask id="mask0_1939_2174" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="14" y="14" width="41" height="41">
                                <rect x="14.5" y="14.041" width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M21.1665 47.3745V31.7495L18.1665 34.0412L16.1665 31.3745L34.4998 17.3745L52.8332 31.3745L50.8332 33.9995L47.8332 31.7495V32.8328C47.3054 32.6662 46.7637 32.5481 46.2082 32.4787C45.6526 32.4092 45.0832 32.3745 44.4998 32.3745C41.2498 32.3745 38.4929 33.5065 36.229 35.7703C33.9651 38.0342 32.8332 40.7912 32.8332 44.0412C32.8332 44.5967 32.8748 45.1523 32.9582 45.7078C33.0415 46.2634 33.1665 46.819 33.3332 47.3745H21.1665ZM42.8332 52.3745H36.1665V49.8745H38.5415C37.8193 49.1245 37.2429 48.2495 36.8123 47.2495C36.3818 46.2495 36.1665 45.1801 36.1665 44.0412C36.1665 42.0412 36.7984 40.2773 38.0623 38.7495C39.3262 37.2217 40.9165 36.2634 42.8332 35.8745V38.4578C41.611 38.819 40.6109 39.5065 39.8332 40.5203C39.0554 41.5342 38.6665 42.7078 38.6665 44.0412C38.6665 44.8467 38.8123 45.5967 39.104 46.2912C39.3957 46.9856 39.8054 47.5967 40.3332 48.1245V45.7078H42.8332V52.3745ZM46.1665 52.2078V49.6245C47.4165 49.2356 48.4235 48.5342 49.1873 47.5203C49.9512 46.5065 50.3332 45.3467 50.3332 44.0412C50.3332 43.2356 50.1873 42.4856 49.8957 41.7912C49.604 41.0967 49.1943 40.4856 48.6665 39.9578V42.3745H46.1665V35.7078H52.8332V38.2078H50.4582C51.1804 38.9578 51.7568 39.8328 52.1873 40.8328C52.6179 41.8328 52.8332 42.9023 52.8332 44.0412C52.8332 46.0412 52.2012 47.8051 50.9373 49.3328C49.6735 50.8606 48.0832 51.819 46.1665 52.2078Z" fill="white" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_1939_2174">
                                <rect width="35.2787" height="36.1607" fill="white" transform="translate(17.8608 17.1982)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="titulo">Tecnologia de ponta</span>
                <span class="desc">
                    Fibra óptica de última geração para entregar máxima performance.
                </span>
            </div>
            <div class="card-inst">
                <div class="ico">
                    <svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.221191" y="0.557617" width="70.5574" height="70.5574" rx="35.2787" fill="#003DA6" />
                        <g clip-path="url(#clip0_1939_2183)">
                            <mask id="mask0_1939_2183" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="14" y="14" width="41" height="41">
                                <rect x="14.5" y="14.5986" width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M32.8335 49.5986V46.2653H46.1668V34.432C46.1668 31.182 45.0349 28.425 42.771 26.1611C40.5071 23.8972 37.7502 22.7653 34.5002 22.7653C31.2502 22.7653 28.4932 23.8972 26.2293 26.1611C23.9654 28.425 22.8335 31.182 22.8335 34.432V44.5986H21.1668C20.2502 44.5986 19.4654 44.2722 18.8127 43.6195C18.1599 42.9667 17.8335 42.182 17.8335 41.2653V37.932C17.8335 37.3486 17.9793 36.8 18.271 36.2861C18.5627 35.7722 18.9724 35.3625 19.5002 35.057L19.6252 32.8486C19.8474 30.9597 20.396 29.2097 21.271 27.5986C22.146 25.9875 23.2432 24.5847 24.5627 23.3903C25.8821 22.1959 27.396 21.2653 29.1043 20.5986C30.8127 19.932 32.6113 19.5986 34.5002 19.5986C36.3891 19.5986 38.1807 19.932 39.8752 20.5986C41.5696 21.2653 43.0835 22.1889 44.4168 23.3695C45.7502 24.55 46.8474 25.9459 47.7085 27.557C48.5696 29.1681 49.1252 30.9181 49.3752 32.807L49.5002 34.9736C50.0279 35.2236 50.4377 35.5986 50.7293 36.0986C51.021 36.5986 51.1668 37.1264 51.1668 37.682V41.5153C51.1668 42.0709 51.021 42.5986 50.7293 43.0986C50.4377 43.5986 50.0279 43.9736 49.5002 44.2236V46.2653C49.5002 47.182 49.1738 47.9667 48.521 48.6195C47.8682 49.2722 47.0835 49.5986 46.1668 49.5986H32.8335ZM29.5002 37.932C29.0279 37.932 28.6321 37.7722 28.3127 37.4528C27.9932 37.1334 27.8335 36.7375 27.8335 36.2653C27.8335 35.7931 27.9932 35.3972 28.3127 35.0778C28.6321 34.7584 29.0279 34.5986 29.5002 34.5986C29.9724 34.5986 30.3682 34.7584 30.6877 35.0778C31.0071 35.3972 31.1668 35.7931 31.1668 36.2653C31.1668 36.7375 31.0071 37.1334 30.6877 37.4528C30.3682 37.7722 29.9724 37.932 29.5002 37.932ZM39.5002 37.932C39.0279 37.932 38.6321 37.7722 38.3127 37.4528C37.9932 37.1334 37.8335 36.7375 37.8335 36.2653C37.8335 35.7931 37.9932 35.3972 38.3127 35.0778C38.6321 34.7584 39.0279 34.5986 39.5002 34.5986C39.9724 34.5986 40.3682 34.7584 40.6877 35.0778C41.0071 35.3972 41.1668 35.7931 41.1668 36.2653C41.1668 36.7375 41.0071 37.1334 40.6877 37.4528C40.3682 37.7722 39.9724 37.932 39.5002 37.932ZM24.5418 35.3486C24.3474 32.4042 25.2363 29.8764 27.2085 27.7653C29.1807 25.6542 31.6391 24.5986 34.5835 24.5986C37.0557 24.5986 39.2293 25.3834 41.1043 26.9528C42.9793 28.5222 44.1113 30.5292 44.5002 32.9736C41.9724 32.9459 39.646 32.2653 37.521 30.932C35.396 29.5986 33.7641 27.7931 32.6252 25.5153C32.1807 27.7375 31.2432 29.7167 29.8127 31.4528C28.3821 33.1889 26.6252 34.4875 24.5418 35.3486Z" fill="white" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_1939_2183">
                                <rect width="35.2787" height="36.1607" fill="white" transform="translate(17.8608 17.7559)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="titulo">Compromisso com o cliente</span>
                <span class="desc">
                    Suporte dedicado e 100% voltado à sua satisfação.
                </span>
            </div>
            <div class="card-inst">
                <div class="ico">
                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.221191" y="0.114746" width="70.5574" height="70.5574" rx="35.2787" fill="#003DA6" />
                        <g clip-path="url(#clip0_1939_2192)">
                            <mask id="mask0_1939_2192" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="14" y="14" width="41" height="41">
                                <rect x="14.5" y="14.1558" width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M34.0002 44.1559C31.3335 44.017 29.0835 42.9893 27.2502 41.0726C25.4168 39.1559 24.5002 36.8504 24.5002 34.1559C24.5002 31.3781 25.4724 29.017 27.4168 27.0726C29.3613 25.1281 31.7224 24.1559 34.5002 24.1559C37.1946 24.1559 39.5002 25.0726 41.4168 26.9059C43.3335 28.7393 44.3613 30.9893 44.5002 33.6559L41.0002 32.6143C40.6391 31.1143 39.8613 29.8851 38.6668 28.9268C37.4724 27.9684 36.0835 27.4893 34.5002 27.4893C32.6668 27.4893 31.0974 28.142 29.7918 29.4476C28.4863 30.7531 27.8335 32.3226 27.8335 34.1559C27.8335 35.7393 28.3127 37.1281 29.271 38.3226C30.2293 39.517 31.4585 40.2948 32.9585 40.6559L34.0002 44.1559ZM36.0002 50.7393C35.7502 50.7948 35.5002 50.8226 35.2502 50.8226H34.5002C32.1946 50.8226 30.0279 50.3851 28.0002 49.5101C25.9724 48.6351 24.2085 47.4476 22.7085 45.9476C21.2085 44.4476 20.021 42.6837 19.146 40.6559C18.271 38.6281 17.8335 36.4615 17.8335 34.1559C17.8335 31.8504 18.271 29.6837 19.146 27.6559C20.021 25.6281 21.2085 23.8643 22.7085 22.3643C24.2085 20.8643 25.9724 19.6768 28.0002 18.8018C30.0279 17.9268 32.1946 17.4893 34.5002 17.4893C36.8057 17.4893 38.9724 17.9268 41.0002 18.8018C43.0279 19.6768 44.7918 20.8643 46.2918 22.3643C47.7918 23.8643 48.9793 25.6281 49.8543 27.6559C50.7293 29.6837 51.1668 31.8504 51.1668 34.1559V34.9059C51.1668 35.1559 51.1391 35.4059 51.0835 35.6559L47.8335 34.6559V34.1559C47.8335 30.4337 46.5418 27.2809 43.9585 24.6976C41.3752 22.1143 38.2224 20.8226 34.5002 20.8226C30.7779 20.8226 27.6252 22.1143 25.0418 24.6976C22.4585 27.2809 21.1668 30.4337 21.1668 34.1559C21.1668 37.8781 22.4585 41.0309 25.0418 43.6143C27.6252 46.1976 30.7779 47.4893 34.5002 47.4893H35.0002L36.0002 50.7393ZM48.7085 51.6559L41.5835 44.5309L39.5002 50.8226L34.5002 34.1559L51.1668 39.1559L44.8752 41.2393L52.0002 48.3643L48.7085 51.6559Z" fill="white" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_1939_2192">
                                <rect width="35.2787" height="36.1607" fill="white" transform="translate(17.8608 17.313)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="titulo">Conectividade em todo lugar</span>
                <span class="desc">
                    Presença em diversas cidades e expansão contínua.
                </span>
            </div>
        </div>
    </div>
</section>
<section class="servicos-home">
    <div class="container">
        <div class="top">
            <span class="titulo">Serviços Exclusivos para Uma <strong>Experiência Completa</strong></span>
            <span class="desc">
                Em nossos planos, você conta com serviços adicionais trazendo entretenimento e aprendizado direto para você.
            </span>
            <fieldset class="contain-cards-serv">
                <div class="card-serv">
                    <div class="top">
                        <img src="/website/img/index/serv-deezer.png" alt="Deezer">
                    </div>
                    <div class="body">
                        <span class="titulo">Deezer</span>
                        <span class="desc">
                            Tenha milhões de músicas ao seu alcance. Ouça suas playlists favoritas e
                            descubra novos artistas com qualidade de som impecável.
                        </span>
                    </div>
                </div>
                <div class="card-serv">
                    <div class="top">
                        <img src="/website/img/index/serv-looke.png" alt="Looke">
                    </div>
                    <div class="body">
                        <span class="titulo">Deezer</span>
                        <span class="desc">
                            Tenha milhões de músicas ao seu alcance. Ouça suas playlists favoritas e
                            descubra novos artistas com qualidade de som impecável.
                        </span>
                    </div>
                </div>
                <div class="card-serv">
                    <div class="top">
                        <img src="/website/img/index/serv-conhecimento.png" alt="Super conhecimento">
                    </div>
                    <div class="body">
                        <span class="titulo">Deezer</span>
                        <span class="desc">
                            Tenha milhões de músicas ao seu alcance. Ouça suas playlists favoritas e
                            descubra novos artistas com qualidade de som impecável.
                        </span>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="bottom">
            <div class="grid-bottom">
                <div class="left">
                    <span class="titulo">Verifique a Disponibilidade da <strong>Internet na sua região</strong></span>
                    <span class="desc">
                        Descubra se a nossa fibra óptica de alta velocidade já chegou ao seu endereço. 
                        Consulte agora e esteja um passo mais perto de uma internet rápida, estável e 
                        preparada para todas as suas necessidades.
                    </span>
                    <div class="contain-btn">
                        <a href="">Consultar disponibilidade</a>
                    </div>
                </div>
                <div class="right">
                    <img src="/website/img/index/bg-disponibilidade.png" alt="Disponibilidade Turbo Line">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="beneficios-home">
    <div class="container">
        <span class="titulo">
            A Internet que Transforma Sua Conexão em <strong>Alta Performance</strong>
        </span>
        <span class="desc">
            A TurboLine oferece internet de fibra óptica de última geração, preparada para todas as suas atividades online.
        </span>
        <div class="contain-card-benef">
            <div class="card-benef">
                <div class="top">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
                            <rect width="51" height="51" rx="11.3333" fill="#F58220" />
                            <mask id="mask0_1939_2257" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="32" height="32">
                                <rect x="9.06689" y="9.06689" width="31.7333" height="31.7333" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M14.3559 35.5115C13.6286 35.5115 13.0061 35.2526 12.4882 34.7347C11.9704 34.2168 11.7114 33.5943 11.7114 32.8671V17.0004C11.7114 16.2732 11.9704 15.6506 12.4882 15.1328C13.0061 14.6149 13.6286 14.356 14.3559 14.356H35.5114C36.2386 14.356 36.8612 14.6149 37.3791 15.1328C37.8969 15.6506 38.1559 16.2732 38.1559 17.0004V32.8671C38.1559 33.5943 37.8969 34.2168 37.3791 34.7347C36.8612 35.2526 36.2386 35.5115 35.5114 35.5115H14.3559ZM14.3559 19.6448H35.5114V17.0004H14.3559V19.6448ZM23.5453 30.9498L31.0159 23.4793L29.0986 21.5621L23.5453 27.1154L20.7686 24.3387L18.8514 26.256L23.5453 30.9498Z" fill="white" />
                            </g>
                        </svg>
                    </div>
                    <span>
                        Navegação ultrarrápida e sempre estável
                    </span>
                </div>
                <div class="bottom">
                    <span class="desc">
                        Experimente a verdadeira potência da internet. Nossa fibra óptica entrega até
                        1Gbps de velocidade, oferecendo uma conexão estável para toda a família, sem
                        quedas ou lentidão.
                    </span>
                </div>
            </div>
            <div class="card-benef">
                <div class="top">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="51" viewBox="0 0 52 51" fill="none">
                            <rect x="0.333496" width="51" height="51" rx="11.3333" fill="#F58220" />
                            <mask id="mask0_1939_1051" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="33" height="32">
                                <rect x="9.40039" y="9.06689" width="31.7333" height="31.7333" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M19.9783 32.867C19.251 32.867 18.6285 32.608 18.1106 32.0902C17.5927 31.5723 17.3338 30.9498 17.3338 30.2225V14.3559C17.3338 13.6286 17.5927 13.0061 18.1106 12.4882C18.6285 11.9704 19.251 11.7114 19.9783 11.7114H35.8449C36.5721 11.7114 37.1947 11.9704 37.7126 12.4882C38.2304 13.0061 38.4894 13.6286 38.4894 14.3559V30.2225C38.4894 30.9498 38.2304 31.5723 37.7126 32.0902C37.1947 32.608 36.5721 32.867 35.8449 32.867H19.9783ZM19.9783 17.0003H35.8449V14.3559H19.9783V17.0003ZM14.6894 38.1559C13.9621 38.1559 13.3396 37.8969 12.8217 37.3791C12.3039 36.8612 12.0449 36.2386 12.0449 35.5114V17.0003H14.6894V35.5114H33.2005V38.1559H14.6894Z" fill="white" />
                            </g>
                        </svg>
                    </div>
                    <span>
                        Planos versáteis para cada estilo de vida
                    </span>
                </div>
                <div class="bottom">
                    <span class="desc">
                        Seja para quem precisa de uma navegação básica ou para quem exige máxima performance,
                        oferecemos planos que atendem a todos os perfis.
                    </span>
                </div>
            </div>
            <div class="card-benef">
                <div class="top">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="51" viewBox="0 0 52 51" fill="none">
                            <rect x="0.666504" width="51" height="51" rx="11.3333" fill="#F58220" />
                            <mask id="mask0_1939_1062" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="33" height="32">
                                <rect x="9.7334" y="9.06689" width="31.7333" height="31.7333" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M12.5101 23.7437L9.7334 20.9671C11.8269 18.8295 14.2455 17.1932 16.9891 16.0583C19.7327 14.9234 22.603 14.356 25.6001 14.356C26.129 14.356 26.6578 14.3725 27.1867 14.4055C27.7156 14.4386 28.2445 14.4882 28.7734 14.5543L26.7901 18.3887C26.5917 18.3667 26.3934 18.3502 26.1951 18.3392C25.9967 18.3281 25.7984 18.3226 25.6001 18.3226C23.1319 18.3226 20.7684 18.7909 18.5096 19.7275C16.2509 20.6641 14.251 22.0028 12.5101 23.7437ZM18.1295 29.3632L15.3528 26.5204C16.609 25.2643 18.0524 24.2836 19.6831 23.5785C21.3139 22.8733 23.0217 22.4656 24.8067 22.3554L22.6912 26.6857C21.8317 26.9281 21.0164 27.2752 20.2451 27.7269C19.4738 28.1787 18.7686 28.7241 18.1295 29.3632ZM24.6745 35.3132C23.9473 35.0708 23.4184 34.6135 23.0878 33.9414C22.7573 33.2692 22.7573 32.6026 23.0878 31.9415L31.0212 15.8104C31.1093 15.6341 31.2415 15.5184 31.4178 15.4633C31.5941 15.4082 31.7704 15.4137 31.9467 15.4798C32.123 15.546 32.2553 15.6617 32.3434 15.8269C32.4315 15.9922 32.4536 16.163 32.4095 16.3393L28.1123 33.7265C27.936 34.4537 27.5008 34.9716 26.8066 35.2801C26.1124 35.5886 25.4017 35.5997 24.6745 35.3132ZM33.0706 29.3632C32.9164 29.2089 32.7676 29.0712 32.6244 28.95C32.4811 28.8288 32.3214 28.7021 32.1451 28.5698L33.2028 24.4379C33.6656 24.7464 34.1229 25.0715 34.5746 25.413C35.0264 25.7546 35.4506 26.1237 35.8473 26.5204L33.0706 29.3632ZM38.657 23.7768C37.9518 23.1377 37.2301 22.5317 36.4919 21.9587C35.7536 21.3858 34.9658 20.8789 34.1284 20.4382L35.054 16.4715C36.244 17.0445 37.3789 17.7056 38.4587 18.4548C39.5385 19.2041 40.5412 20.0415 41.4667 20.9671L38.657 23.7768Z" fill="white" />
                            </g>
                        </svg>
                    </div>
                    <span>
                        Teste a velocidade e descubra o máximo da sua conexão
                    </span>
                </div>
                <div class="bottom">
                    <span class="desc">
                        Faça um teste de velocidade e confira seus resultados em tempo real, incluindo
                        upload, download e latência, para garantir que você está aproveitando ao
                        máximo seu plano.
                    </span>
                </div>
            </div>
            <div class="card-benef">
                <div class="top">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
                            <rect width="51" height="51" rx="11.3333" fill="#F58220" />
                            <mask id="mask0_1939_1073" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="32" height="32">
                                <rect x="9.06689" y="9.06689" width="31.7333" height="31.7333" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M24.9338 38.1559C22.5979 38.1559 20.6916 37.7868 19.2152 37.0485C17.7387 36.3103 17.0004 35.3572 17.0004 34.1892C17.0004 33.6603 17.1602 33.17 17.4798 32.7182C17.7993 32.2665 18.2455 31.8753 18.8185 31.5448L20.901 33.495C20.7027 33.5832 20.4878 33.6824 20.2564 33.7925C20.025 33.9027 19.8432 34.0349 19.711 34.1892C19.9975 34.5418 20.6586 34.8503 21.6943 35.1148C22.7301 35.3792 23.8099 35.5114 24.9338 35.5114C26.0577 35.5114 27.143 35.3792 28.1898 35.1148C29.2365 34.8503 29.9031 34.5418 30.1896 34.1892C30.0354 34.0129 29.837 33.8697 29.5946 33.7595C29.3522 33.6493 29.1208 33.5501 28.9004 33.462L30.9499 31.4786C31.5669 31.8312 32.0407 32.2334 32.3713 32.6852C32.7018 33.1369 32.8671 33.6383 32.8671 34.1892C32.8671 35.3572 32.1289 36.3103 30.6524 37.0485C29.1759 37.7868 27.2697 38.1559 24.9338 38.1559ZM24.9338 34.1892C21.8266 31.8974 19.5072 29.6716 17.9756 27.512C16.444 25.3524 15.6782 23.2368 15.6782 21.1653C15.6782 19.6007 15.9592 18.2289 16.5211 17.0499C17.0831 15.8709 17.8048 14.8848 18.6863 14.0914C19.5678 13.2981 20.5594 12.7031 21.6613 12.3064C22.7631 11.9098 23.854 11.7114 24.9338 11.7114C26.0136 11.7114 27.1044 11.9098 28.2063 12.3064C29.3081 12.7031 30.2998 13.2981 31.1813 14.0914C32.0628 14.8848 32.7845 15.8709 33.3464 17.0499C33.9084 18.2289 34.1893 19.6007 34.1893 21.1653C34.1893 23.2368 33.4235 25.3524 31.892 27.512C30.3604 29.6716 28.041 31.8974 24.9338 34.1892ZM24.9338 23.6114C25.661 23.6114 26.2835 23.3525 26.8014 22.8346C27.3193 22.3168 27.5782 21.6942 27.5782 20.967C27.5782 20.2398 27.3193 19.6172 26.8014 19.0993C26.2835 18.5815 25.661 18.3225 24.9338 18.3225C24.2066 18.3225 23.584 18.5815 23.0661 19.0993C22.5483 19.6172 22.2893 20.2398 22.2893 20.967C22.2893 21.6942 22.5483 22.3168 23.0661 22.8346C23.584 23.3525 24.2066 23.6114 24.9338 23.6114Z" fill="white" />
                            </g>
                        </svg>
                    </div>
                    <span>
                        Verifique a disponibilidade na sua região
                    </span>
                </div>
                <div class="bottom">
                    <span class="desc">
                        Estamos sempre expandindo sua cobertura para conectar mais lares e empresas com a
                        melhor internet. Consulte a disponibilidade da nossa fibra óptica no seu CEP e
                        seja bem-vindo à era da ultra velocidade!
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clientes-home">
    <div class="container-center-left">
        <div class="contain-top container">
            <div class="top-left">
                <span class="titulo">
                    Clientes <strong>Satisfeitos</strong>
                </span>
                <span class="subtitulo">
                    Ouça o que <strong>nossos clientes</strong> têm a dizer sobre a experiência de navegar com TurboLine:
                </span>
            </div>
            <div class="top-right">
                <div class="custom-nav desktop">
                    <button type="button" class="custom-prev">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="45" height="45" rx="8" fill="#003DA6" />
                            <mask id="mask0_1939_1641" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="11" width="24" height="24">
                                <rect x="35" y="35" width="24" height="24" transform="rotate(-180 35 35)" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M21 17L22.4 18.45L18.85 22L31 22L31 24L18.85 24L22.4 27.55L21 29L15 23L21 17Z" fill="white" />
                            </g>
                        </svg>
                    </button>
                    <button type="button" class="custom-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                            <rect width="45" height="45" rx="8" fill="#003DA6" />
                            <mask id="mask0_1939_1142" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="11" width="24" height="24">
                                <rect x="11" y="11" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M25 29L23.6 27.55L27.15 24H15V22H27.15L23.6 18.45L25 17L31 23L25 29Z" fill="white" />
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="carousel-clientes" class="owl-carousel owl-theme">

            <div class="item-cliente">
                <div class="top">
                    <span class="titulo-item">Lorem ipsum dolor sit amet</span>
                    <span class="desc-item">
                        Lorem ipsum dolor sit amet consectetur. Non augue eu consequat tincidunt. Tempor ac
                        placerat pulvinar at aliquam mattis adipiscing sed.
                    </span>
                </div>
                <div class="bottom">
                    <div class="ico">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="44" height="44" rx="10" fill="#003DA6" />
                        </svg>
                    </div>
                    <div class="right">
                        <span class="titulo">Lorem ipsum </span>
                        <span class="subtitulo">Gerente de vendas </span>
                    </div>
                </div>
            </div>

            <div class="item-cliente">
                <div class="top">
                    <span class="titulo-item">Lorem ipsum dolor sit amet</span>
                    <span class="desc-item">
                        Lorem ipsum dolor sit amet consectetur. Non augue eu consequat tincidunt. Tempor ac
                        placerat pulvinar at aliquam mattis adipiscing sed.
                    </span>
                </div>
                <div class="bottom">
                    <div class="ico">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="44" height="44" rx="10" fill="#003DA6" />
                        </svg>
                    </div>
                    <div class="right">
                        <span class="titulo">Lorem ipsum </span>
                        <span class="subtitulo">Gerente de vendas </span>
                    </div>
                </div>
            </div>

            <div class="item-cliente">
                <div class="top">
                    <span class="titulo-item">Lorem ipsum dolor sit amet</span>
                    <span class="desc-item">
                        Lorem ipsum dolor sit amet consectetur. Non augue eu consequat tincidunt. Tempor ac
                        placerat pulvinar at aliquam mattis adipiscing sed.
                    </span>
                </div>
                <div class="bottom">
                    <div class="ico">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="44" height="44" rx="10" fill="#003DA6" />
                        </svg>
                    </div>
                    <div class="right">
                        <span class="titulo">Lorem ipsum </span>
                        <span class="subtitulo">Gerente de vendas </span>
                    </div>
                </div>
            </div>

            <div class="item-cliente">
                <div class="top">
                    <span class="titulo-item">Lorem ipsum dolor sit amet</span>
                    <span class="desc-item">
                        Lorem ipsum dolor sit amet consectetur. Non augue eu consequat tincidunt. Tempor ac
                        placerat pulvinar at aliquam mattis adipiscing sed.
                    </span>
                </div>
                <div class="bottom">
                    <div class="ico">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="44" height="44" rx="10" fill="#003DA6" />
                        </svg>
                    </div>
                    <div class="right">
                        <span class="titulo">Lorem ipsum </span>
                        <span class="subtitulo">Gerente de vendas </span>
                    </div>
                </div>
            </div>

            <div class="item-cliente">
                <div class="top">
                    <span class="titulo-item">Lorem ipsum dolor sit amet</span>
                    <span class="desc-item">
                        Lorem ipsum dolor sit amet consectetur. Non augue eu consequat tincidunt. Tempor ac
                        placerat pulvinar at aliquam mattis adipiscing sed.
                    </span>
                </div>
                <div class="bottom">
                    <div class="ico">
                        <svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="44" height="44" rx="10" fill="#003DA6" />
                        </svg>
                    </div>
                    <div class="right">
                        <span class="titulo">Lorem ipsum </span>
                        <span class="subtitulo">Gerente de vendas </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="custom-nav mobille">
            <button class="custom-prev">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="45" height="45" rx="8" fill="#003DA6" />
                    <mask id="mask0_1939_1641" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="11" width="24" height="24">
                        <rect x="35" y="35" width="24" height="24" transform="rotate(-180 35 35)" fill="#D9D9D9" />
                    </mask>
                    <g>
                        <path d="M21 17L22.4 18.45L18.85 22L31 22L31 24L18.85 24L22.4 27.55L21 29L15 23L21 17Z" fill="white" />
                    </g>
                </svg>
            </button>
            <button class="custom-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <rect width="45" height="45" rx="8" fill="#003DA6" />
                    <mask id="mask0_1939_1142" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="11" width="24" height="24">
                        <rect x="11" y="11" width="24" height="24" fill="#D9D9D9" />
                    </mask>
                    <g>
                        <path d="M25 29L23.6 27.55L27.15 24H15V22H27.15L23.6 18.45L25 17L31 23L25 29Z" fill="white" />
                    </g>
                </svg>
            </button>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/website/includes/footer.php';
?>