<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Álvaro Amaral">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/website/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?= $nomePrimarioTitulo . ' ' . $pagina ?> | Turbo Line</title>

    <!-- POPPINS GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- BEBAS GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- MAPBOX -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body id="<?= $pagina ?>">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
            <div class="container">
                <a class="navbar-brand rubberBand" href="/website/index.php">
                    <img src="/website/img/logo.svg" class="d-block mx-auto img-fluid" alt="">
                </a>
                <button class="menu navbar-toggler"
                    onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                    data-toggle="collapse"
                    data-target="#contain-nav-buttons"
                    aria-controls="contain-nav-buttons"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg width="100" height="100" viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="contain-nav-buttons">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'inicial') ? 'active' : ''; ?>" href="/website/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'Institucional') ? 'active' : ''; ?>" href="/website/institucional.php">Institucional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'planos') ? 'active' : ''; ?>" href="/website/planos.php">Planos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'contato') ? 'active' : ''; ?>" href="/website/contato.php">Contato</a>
                        </li>
                    </ul>
                    <form class="form-inline" id="contain-right-btns-nav">
                        <button class="btn-nav-right" id="area-cliente" type="button">
                            <div class="ico">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="lock">
                                        <mask id="mask0_1914_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="17">
                                            <rect id="Bounding box" y="0.5" width="16" height="16" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path id="lock_2" d="M3.99996 15.1665C3.63329 15.1665 3.3194 15.0359 3.05829 14.7748C2.79718 14.5137 2.66663 14.1998 2.66663 13.8332V7.1665C2.66663 6.79984 2.79718 6.48595 3.05829 6.22484C3.3194 5.96373 3.63329 5.83317 3.99996 5.83317H4.66663V4.49984C4.66663 3.57762 4.99163 2.7915 5.64163 2.1415C6.29163 1.4915 7.07774 1.1665 7.99996 1.1665C8.92218 1.1665 9.70829 1.4915 10.3583 2.1415C11.0083 2.7915 11.3333 3.57762 11.3333 4.49984V5.83317H12C12.3666 5.83317 12.6805 5.96373 12.9416 6.22484C13.2027 6.48595 13.3333 6.79984 13.3333 7.1665V13.8332C13.3333 14.1998 13.2027 14.5137 12.9416 14.7748C12.6805 15.0359 12.3666 15.1665 12 15.1665H3.99996ZM7.99996 11.8332C8.36663 11.8332 8.68052 11.7026 8.94163 11.4415C9.20274 11.1804 9.33329 10.8665 9.33329 10.4998C9.33329 10.1332 9.20274 9.81928 8.94163 9.55817C8.68052 9.29706 8.36663 9.1665 7.99996 9.1665C7.63329 9.1665 7.3194 9.29706 7.05829 9.55817C6.79718 9.81928 6.66663 10.1332 6.66663 10.4998C6.66663 10.8665 6.79718 11.1804 7.05829 11.4415C7.3194 11.7026 7.63329 11.8332 7.99996 11.8332ZM5.99996 5.83317H9.99996V4.49984C9.99996 3.94428 9.80552 3.47206 9.41663 3.08317C9.02774 2.69428 8.55551 2.49984 7.99996 2.49984C7.4444 2.49984 6.97218 2.69428 6.58329 3.08317C6.1944 3.47206 5.99996 3.94428 5.99996 4.49984V5.83317Z" fill="black" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span>Área do cliente</span>
                        </button>
                        <button class="btn-nav-right" id="assinar-agr" type="button">
                            <div class="ico">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M10.26 9.31225C9.98946 9.31225 9.46882 10.323 9.15615 10.323C9.07469 10.3196 8.99562 10.2945 8.9271 10.2503C8.34394 9.95795 7.83349 9.65619 7.3543 9.19809C6.95801 8.82289 6.521 8.26008 6.29267 7.77071C6.26116 7.72436 6.24282 7.67033 6.23959 7.61438C6.23959 7.37442 6.95946 6.92723 6.95946 6.53094C6.95946 6.42696 6.42865 5.01121 6.35448 4.83306C6.2505 4.56257 6.19887 4.47895 5.9182 4.47895C5.78222 4.47895 5.65643 4.44768 5.53281 4.44768C5.31322 4.44768 5.14743 4.5313 4.99037 4.67673C4.49009 5.14573 4.23996 5.6351 4.2196 6.32298V6.40587C4.20869 7.12574 4.56281 7.84343 4.9591 8.42732C5.85348 9.75072 6.78131 10.9069 8.2705 11.5831C8.71842 11.7918 9.75023 12.2288 10.2498 12.2288C10.8438 12.2288 11.8131 11.8543 12.0516 11.2704C12.1462 11.0305 12.2291 10.7396 12.2291 10.4793C12.2291 10.4371 12.229 10.3746 12.2072 10.323C12.1345 10.1979 10.4374 9.31225 10.26 9.31225ZM8.14543 14.8334C6.87511 14.8334 5.61498 14.448 4.5519 13.75L2.0309 14.5513L2.85403 12.1248C2.04201 11.0115 1.60412 9.66932 1.60334 8.29134C1.60334 4.68836 4.54099 1.75072 8.14543 1.75072C11.7499 1.75072 14.6882 4.68764 14.6882 8.29062C14.6882 11.8958 11.7506 14.8334 8.14543 14.8334ZM8.14543 0.4375C3.81167 0.4375 0.29231 3.95831 0.29231 8.29062C0.29231 9.71872 0.677695 11.125 1.41647 12.3437L0 16.5626L4.34394 15.1665C5.54003 15.8268 6.88762 16.1638 8.25373 16.1444C9.61985 16.1249 10.9573 15.7496 12.1341 15.0555C13.3109 14.3614 14.2864 13.3724 14.9643 12.1862C15.6423 11 15.9992 9.6576 16 8.29134C16 3.95904 12.4792 0.4375 8.14543 0.4375Z" fill="white" />
                                </svg>
                            </div>
                            <span>Assinar agora</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>