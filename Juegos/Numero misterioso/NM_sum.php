<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suma misteriosa</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
  <link rel="stylesheet" href="../../estilos/NM.css">

  <script src="../../scripts/NM.js"></script>
</head>

<body class="suma_page" onload="inicio()">

  <header class="tittle_suma">

 &#10068 &#10068 &#10068 &#10068 Numero misterioso  &#10068 &#10068 &#10068 &#10068 

  </header>

  <main class="suma_container">

    <?php

    //Aqui se definen los rangos de los números
    $array1_size = 5;
    $min = 0;
    $max = 100;

    //Aqui se generan los números en cada partida
    $numero_fijo = rand($min, $max);
    $respuesta = rand($min, $max);
    $result = $numero_fijo + $respuesta;
    

    //Aqui se generan los números que se van a ofrecer como posibles respuestas para al usuario y se ordenan aleatoriamente
    $array1 = array($respuesta);
    while (count($array1) != $array1_size) {
      $r = rand($min, $max);
      if (!in_array($r, $array1)) {
        array_push($array1, $r);
      }
    }
    shuffle($array1);


    // En estos echos se imprimen todos los números generados anteiormente.
    echo '<div id="juego">';

      echo'<div id="ecuacion">';
        echo $numero_fijo . " + ";
        echo ' <div class="drop_area" ondrop="drop(event)" ondragover="allowDrop(event)" ></div> ';
        echo " = " . $result;
      echo'</div>';

      //Aqui se imprimen los números arrastrables.
      echo'<div class = "contenedor_fijo">';
        foreach ($array1 as $x) 
          {echo '<img id = "' . $x . '" class = "number" src="../../assets/img/numeros/icons8-' . $x . '-100.png" draggable="true" ondragstart="drag(event)" >';}
      echo'</div>';
        
      //Este mensaje permanece oculto hasta que el usuario acierta o falla.
      echo '<div id="mensaje_respuesta"></div>';

      //Esto imprime una etiqueta con información que va a recuperar el script, permanece invisible al usuario.
      echo '<div id="respuesta" style="display: none;" value = "'.$respuesta.'"></div>';

    ?>

  </main>

  <!--Esta es la sección de los botones-->
  <aside class="aside_suma">
    <div id="botones">
      <div class="boton" id="Boton_recargar" onClick="window.location.reload();" >Intentar de nuevo</div>
      <div class="boton" id="Boton_volver" onclick="window.history.back()">Volver</div>
    </div>
  </aside>

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

</body>

</html>