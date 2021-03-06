<!DOCTYPE html>
<html lang="en">
<head>
    <!--El css se encuentra en la carperta estilos styles.css-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/styles.css">
    <title>MateAyuda</title>
</head>
<body class="multi">
    <main class="main">
        <section class="section1">
            <h1>Mateayuda</h1>
            <!--Este es el tablero, acomodado de 4x4-->
            <table>
                <!--destapar es una funcion que proviene de multiDos.js, se necesita pasar el id de la tarjeta seleccionada con onclick para destapar, comprobar y sumar-->
                <tr class="tabla">
                    <td><button id="0" class="tarjeta" onclick="destapar(0)"></button></td>
                    <td><button id="1" class="tarjeta" onclick="destapar(1)"></button></td>
                    <td><button id="2" class="tarjeta" onclick="destapar(2)"></button></td>
                    <td><button id="3" class="tarjeta" onclick="destapar(3)"></button></td>
                </tr>
                <tr class="tabla">
                    <td><button id="4" class="tarjeta" onclick="destapar(4)"></button></td>
                    <td><button id="5" class="tarjeta" onclick="destapar(5)"></button></td>
                    <td><button id="6" class="tarjeta" onclick="destapar(6)"></button></td>
                    <td><button id="7" class="tarjeta" onclick="destapar(7)"></button></td>
                </tr>
                <tr class="tabla">
                    <td><button id="8" class="tarjeta" onclick="destapar(8)"></button></td>
                    <td><button id="9" class="tarjeta" onclick="destapar(9)"></button></td>
                    <td><button id="10" class="tarjeta" onclick="destapar(10)"></button></td>
                    <td><button id="11" class="tarjeta" onclick="destapar(11)"></button></td>
                </tr>
                <tr class="tabla">
                    <td><button id="12" class="tarjeta" onclick="destapar(12)"></button></td>
                    <td><button id="13" class="tarjeta" onclick="destapar(13)"></button></td>
                    <td><button id="14" class="tarjeta" onclick="destapar(14)"></button></td>
                    <td><button id="15" class="tarjeta" onclick="destapar(15)"></button></td>
                </tr>
            </table>
        </section>
        <!--Este es el tablero de puntuacion, el boton volver te reinvia al menu-->
        <section class="section2">
            <h2 class="estadisticas" id="aciertos">Aciertos: 0</h2>
            <h2 class="estadisticas" id="movimientos">Movimientos: 0</h2>
            <h2  id="home"  ><button onclick="location.href='menu.php'" class="home">Volver</button> </h2>
        </section>
    </main>
     <!-- ======= Footer ======= -->
     <!--Los creditos y copyright, no remover esta seccion-->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="copyright-box">
                <p class="copyright"> Copyright &copy; MateAyuda - Plataforma Web Educativa - Proyecto Modular 2022 | CUCEI | Universidad de Guadalajara. 
                <div class="credits">
               
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Javascripts incluidas para realizar animaciones -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!--Este JS se encuentra en scripts multiDos, es el encargado de volvear cartas , asignar puntuacion, mostrar movimientos, todo lo relacionado al juego en si-->
        <script src="scripts/multiDos.js"></script>
</body>
</html>