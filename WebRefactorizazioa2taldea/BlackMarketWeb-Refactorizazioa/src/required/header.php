<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de reacondicionamiento de ordenadores - BLACK MARKET</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/index.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css" media="screen" />
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <?php
    define('APP_DIR', $_SERVER['DOCUMENT_ROOT'] . '/Desktop/WebRefactorizazioa/WebRefactorizazioa2taldea/BlackMarketWeb-Refactorizazioa'); //Aplikazioaren karpeta edozein lekutatik atzitzeko.
    define('HREF_VIEWS_DIR', '/Desktop/WebRefactorizazioa/WebRefactorizazioa2taldea/BlackMarketWeb-Refactorizazioa/src/views'); //Aplikazioaren views karpeta edozein lekutatik deitzeko
    ?>
<!-- servidorea pasatzeakon aldatu hau!!!!!!!! -->

</head>

<body class="">

    <div class="myContainer">

        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen hasten da) -->

        <nav id="menu">
            <div id="botoiaSideBar">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">MENU</button>
            </div>

            <div class="backGroundColorSideBar offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">BLACK MARKET</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navMenu">
                        <a class="menuNavBoton" href="../../../../src/views/index/php/index.php">Guri buruz</a>
                        <a class="menuNavBoton" href="../../../../src/views/konponenteak/php/pagina_konponenteak.php">konponenteak</a>
                        <a class="menuNavBoton" href="../../../../src/views/berriak/php/berriak.php">Berriak</a>
                        <a class="menuNavBoton" href="../../../../src/views/Hornitzaileak/php/Hornitzaileak.php">Hornitzaileak</a>
                    </div>
                    <br>
                    <div class="zestaVistaPrevia">
                        <p>bista previa</p>
                    </div>


                </div>
            </div>
    
            <div class="search-form">
                <input aria-label="Buscar" id="search-input" placeholder="Buscar" class="search-input" value="">
                <button aria-label="Search" type="submit" class="search-button" id="search-button">Buscar</button>
                
            </div>
            <div class="language">
            <?php
            $link = APP_DIR . "/src/language/translations.php";
            require_once($link); //APP_DIR erabilita itzulpenen dokumentua atzitu dugu.
            ?>
            </div>
            <div class="zestoaIkono">
                <a href="../../../../src/views/Zesta/php/zesta.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
        </nav>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('search-button').addEventListener('click', function (e) {
                    e.preventDefault();
                    var searchTerm = document.getElementById('search-input').value;
                    searchProducts(searchTerm);
                });

                function searchProducts(term) {
                    var found = window.find(term, false, false, true, false, true, false);
                    if (!found) {
                        alert("No se encontraron coincidencias.");
                    }
                }
            });
        </script>
        <!-- BILATZAILEAREN SCRIPTA -->
        <!-- hau da menua eta logoa, pagina guztietan berdina (hemen bukatzen da) -->