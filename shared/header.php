<!doctype html>
<html class="no-js" lang="">
<?php $pages=['Creative Solutions', 'About-Us', 'Contact Us', 'Services']; ?>


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SYDD14SZLN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SYDD14SZLN');
    </script>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/img/Logo/favicon-2-dark" sizes="32x32" />
    <link rel="icon" href="./assets/img/Logo/favicon-2-dark" sizes="192x192" />

    <title>Izh-Tech | <?php echo $pages[$_SESSION['page']];  ?></title>

    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/chatbox.css">

</head>

<body class="v-dark bg-dots  dsn-ajax">

    <body class="v-dark dsn-ajax">
        <div class="pointer" id="pointer" style="left: 193px; top: 413px;">
            <i class="fas fa-long-arrow-alt-right"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-link"></i>
        </div>
        <div id="dsn_preloader" class="preloader">

            <div class="dsnload p-absolute">
                <span class="dsnload__row">
                    <span class="dsnload__img">
                        <img src="./assets/img/Logo/Logo_-_white.png" class="logo-dark" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                        <img src="./assets/img/Logo/Logo_-_black.png" class="logo-light" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                    </span>
                </span>
                <span class="dsnload__row dsnload__row--sibling">
                    <span class="dsnload__img">
                        <img src="./assets/img/Logo/Logo_-_white.png" class="logo-dark" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                        <img src="./assets/img/Logo/Logo_-_black.png" class="logo-light" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                    </span>
                </span>
                <span class="dsnload__row dsnload__row--sibling">
                    <span class="dsnload__img">
                        <img src="./assets/img/Logo/Logo_-_white.png" class="logo-dark" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                        <img src="./assets/img/Logo/Logo_-_black.png" class="logo-light" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                    </span>
                </span>
                <span class="dsnload__row dsnload__row--sibling">
                    <span class="dsnload__img">
                        <img src="./assets/img/Logo/Logo_-_white.png" class="logo-dark" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                        <img src="./assets/img/Logo/Logo_-_black.png" class="logo-light" alt="Blackdsn" decoding="async"
                            loading="lazy" />
                    </span>
                </span>


            </div>
            <svg width="100%" height="100%" viewBox="0 0 100 100" class="v-middle" preserveAspectRatio="xMinYMin meet"
                fill="none">
                <linearGradient id="linearColors" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="var(--theme-color)"></stop>
                    <stop offset="50%" stop-color="var(--border-color)"></stop>
                    <stop offset="100%" stop-color="var(--assistant-color)"></stop>
                </linearGradient>
                <path class="dsn-progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
            <div class="loading-circle v-middle">
                <p class="loading-count v-middle">0</p>
            </div>

            <span class="loading-text text-uppercase mt-30 dsn-container">Loading ...</span>
            <div class="bg-load background-section d-flex align-items-end">
                <svg class="dsn-separator-bottom dsn-icon-assistant-color" width="100%" height="100%"
                    viewBox="0 0 100 10" preserveAspectRatio="none">
                    <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
                        vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
                </svg>
            </div>

        </div>

        <main id="main_root" class="main-root">

            <!-- ========== Menu ========== -->
            <header id="site_menu_header" class="site-header  dsn-container d-none dsn-hamburger">
                <div class="main-logo">
                    <a href="index.php" data-dsn-text="IZH-TECH" class="custom-logo-link main-brand effect-ajax"
                        rel="home" aria-current="page">
                        <img src="./assets/img/Logo/Logo_-_white.png" class="custom-logo logo-light" alt="Blackdsn" />
                        <img src="./assets/img/Logo/Logo_-_black.png" class="custom-logo logo-dark" alt="Blackdsn" />
                    </a>
                </div>
                <nav class="main-navigation ">
                    <div class="menu-cover-title header-container dsn-container">MENU</div>
                    <ul id="dsn-primary-list" class="primary-nav h2">
                        <li class="nav-item has-sub-menu">
                            <a title="Home" href="./index.php">
                                <span class="overflow ">Home</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a title="Home" href="./about.php">
                                <span class="overflow">About</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a title="Service" href="./service.php">
                                <span class="overflow">Service</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a title="Home" href="./contact.php">
                                <span class="overflow">Contact</span>
                            </a>
                        </li>
                    </ul>
                    <div class="container-content  d-flex flex-column justify-content-center section-margin">
                        <div class="nav__info">
                            <div class="nav-content">
                                <h5 class="sm-title-block mb-10">Head Office</h5>
                                <p>Flora Drive,<br>Singapore 506889.<br></p>
                            </div>
                            <div class="nav-content mt-30">
                                <h5 class="sm-title-block mb-10">Contact</h5>
                                <p class="links over-hidden mb-1">
                                    <a class="link-hover d-block" href="tel:+65 89269693"
                                        data-hover-text="+65 89269693">+65
                                        89269693</a>
                                </p>
                                <p class="links over-hidden"><a class="link-hover" href="admin@izhtech.com"
                                        data-hover-text="admin@izhtech.com">info@izhtech.com</a></p>

                            </div>
                        </div>
                        <div class="nav-social nav-content mt-30">
                            <div class="nav-social-inner p-relative">
                                <h5 class="sm-title-block mb-10">Follow us</h5>
                                <ul style="--dsn-li-name: dsn6;">
                                    <li style="--dsn-li-index: 0;"><a href="https://www.linkedin.com/company/izh-tech/"
                                            target="_blank" rel="nofollow noopener noreferrer">Linkedin.</a></li>
                                    <li style="--dsn-li-index: 1;"><a href="https://twitter.com/izhtech" target="_blank"
                                            rel="nofollow noopener noreferrer">Twitter.</a></li>
                                    <li style="--dsn-li-index: 2;"><a
                                            href="https://www.facebook.com/profile.php?id=100091657835111"
                                            target="_blank" rel="nofollow noopener noreferrer">Facebook.</a></li>
                                    <li style="--dsn-li-index: 3;"><a href="https://www.instagram.com/izh_tech/"
                                            target="_blank" rel="nofollow noopener noreferrer">Instagram.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div id="navbar_toggle" class="navbar-toggle pointer-large">
                    <div class="toggle-icon">
                        <div class="toggle-line"></div>
                        <div class="toggle-line"></div>
                        <div class="toggle-line"></div>
                    </div>
                    <div class="toggle-text">
                        <div class="text-menu">Menu</div>
                        <div class="text-open">Open</div>
                        <div class="text-close">Close</div>
                    </div>
                </div>
                <div class="bg-load background-main"></div>

                <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
                    class="bg-load dsn-svg-transition">
                    <path vector-effect="non-scaling-stroke" d="M 0 100 V 100 Q 50 100 100 100 V 100 z" />
                </svg>

            </header>
            <!-- ========== End Menu ========== -->

