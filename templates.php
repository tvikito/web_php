<?php

function template_head($title) { ?>

<!DOCTYPE html>
    <html lang="cs">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="theme-color" content="#4285f4">

            <title><?php echo $title ?></title>

            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
            <link rel="manifest" href="/favicons/site.webmanifest">
            <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#603cba">
            <link rel="shortcut icon" href="/favicons/favicon.ico">
            <meta name="msapplication-TileColor" content="#603cba">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml">
            <meta name="theme-color" content="#ffffff">

            <link rel="stylesheet" href="/css/normalize.css">
            <link rel="stylesheet" href="/css/burger-menu.css">
            <link rel="stylesheet" href="/css/custom.css">
            <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#nav-icon3").click(function(){
                        $("body").toggleClass("sidemenu--open");
                    });

                    $("#darker").click(function(){
                        $("body").removeClass("sidemenu--open");
                    });
                });
            </script>
        </head>

<?php }

function template_body($obsah) { ?>

        <body>
            <nav id="menu" role="navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About us</a>
                        <ul>
                            <li><a href="/about/history">History</a></li>
                            <li><a href="/about/team">The team</a></li>
                            <li><a href="/about/address">Our address</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>

            <div id="page">
                <div id="darker"></div>
                <div class="container h-100 flex flex-column center">

                    <header class="sm-d-flex flex_align--center padding-15" id="header">
                        <div class="margin_right--auto padding-tb-10" id="logo">
                            <a href="/">
                                <img class="inline-block-center" src="img/tomas-vykoukal.png" alt="Tomáš Vykoukal">
                                <h1 class="inline-block-center">Tomáš Vykoukal</h1>
                            </a>
                        </div>
                        <div class="padding-tb-10" id="menu-toogle" >
                            <div id="nav-icon3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </header>

                    <article class="row margin_left-right--auto margin_top-bottom--auto padding-15 padding-tb-20" id="main-content-front">
                        <?php echo $obsah; ?>
                    </article>

                    <?php template_footer(); ?>
                </div>
            </div>
        </body>
    </html>
    <?php
}

function template_footer() { ?>

    <footer class="padding-10" role="contentinfo">
        <p>© <?php echo date("Y"); ?> created with my youngest sister and oldest grandma by <abbr title="papa means Italian father">papa</abbr> Tomas</p>
        <p><?php echo parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?></p>
    </footer>

<?php }
