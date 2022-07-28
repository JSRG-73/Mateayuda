<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="estilos\styles.css">
    <title>MateAyuda</title>
</head>
<body class="ord_divicion">
    <main>
        <!--Seccion de la caja azul principal-->
        <!--Id= "sumas" "restas" "multiplicaciones" "diviciones"-->
        <section class="section1" id="diviciones">
            <h1><span class="instrucciones">Ordene las operaciones de menor a mayor</span></h1>
            <!--Seccion donde se encuentran las fichas-->
            <!--Clase box especificada en el archivo css, draggable habilitado, Style = Color de cada caja, Id=Identificador de la caja y el texto en la caja-->
            <section class="Fichas">
                <!---
            <div class="box" draggable="true" style="background-color: #ff6384;" id="box-a"><span>12</span></div>
            <div class="box" draggable="true" style="background-color: #eb8836;" id="box-b"><span>9</span></div>
            <div class="box" draggable="true" style="background-color: #ffce56;" id="box-c"><span>15</span></div>
            <div class="box" draggable="true" style="background-color: #9966ff;" id="box-d"><span>20</span></div>
            <div class="box" draggable="true" style="background-color: #4bc0c0;" id="box-e"><span>10</span></div>
            -->
        </section>
        <!--Boton de comprobar-->
        <section class = "inGameBtns">
            <button class = "gameBtn" id="verify">Comprobar</button>
            <button class = "gameBtn" id="again">Jugar de nuevo</button>
        </section>
    </section>
    <!--Seccion de informacion de partida-->
        <section class="section2">
            <h2 class="estadisticas" id="aciertos"><span class="titulo">Puntuación: </span><span class="correct">0</span></h2>
            <h2 class="estadisticas" id="intentos"><span class="titulo">Intentos: </span><span class="tries">0</span></h2>
            <h2  id="home"  ><button onclick="location.href='menu.php'" class="home">Volver</button> </h2>
        </section>
    </main>
  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright"> Copyright &copy; MateAyuda - Plataforma Web Educativa - Proyecto Modular 2022 | CUCEI | Universidad de Guadalajara. 
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
    <script src="scripts\OrdenamientoBasico.js"></script>
</body>
</html>