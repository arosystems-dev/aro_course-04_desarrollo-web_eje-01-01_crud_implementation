<!-- =====================================
            VISTA PRINCIPAL
====================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="vista/public/img/logo.ico">
    <link rel="stylesheet" href="vista/public/css/style.css">
    <link rel="stylesheet" href="vista/public/css/styleForm.css">
    <title>VPrincipal</title>
</head>

<body>
    <!-- --------------------------
                HEADER
    --------------------------- -->
    <header>
        <div class="logo">
            <h2><a href="#">CRUD</a></h2>
        </div>
        <div class="titulo">
            <h1>VISTA PRINCIPAL</h1>
        </div>
        <!-- NAVBOTON -->
        <button id="navBoton">
            <img class="imgBoton" src="vista/public/img/navBoton.png" alt="Nav">
        </button>
    </header>

    <!-- --------------------------
                MAIN
    --------------------------- -->
    <main>

        <!-- NAV -->
        <nav id="navMenu">
            <ul>
                <li><a href="?control=CPrincipal&accion=inicio"><img src="vista/public/img/inicio.png" alt=""> &nbsp; INICIO</a></li>
                <li><a href="?control=CArticulo&accion=index"><img src="vista/public/img/gestion.png" alt=""> &nbsp; ARTÍCULOS</a></li>
            </ul>
            <div class="autor">
                <img src="vista/public/img/logo.png" alt="AroCapacitaciones"><br><br>
                <i>
                    <small>Developed by <br> Marco Aro</small>
                </i>
            </div>
        </nav>

        <!-- SECTION -->
        <section>
            <article>
                <?php
                include_once('route/route.php');
                ?>
            </article>

            <!-- FOOTER -->
            <footer>
                <small><i>AroSystems.dev &copy; 2026</i></small>
            </footer>
        </section>
    </main>
    <script src="vista/public/js/script.js"></script>
</body>

</html>