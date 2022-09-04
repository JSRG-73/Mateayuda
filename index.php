<?php
/*
    //Conectar a la base de datos de usuarios, variables con valores a usar
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="form";

    //enlace va a ser la variable usada para conectar
    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    //un if por si algo falla
    if(!$enlace){
        echo "<script>console.log('Console: Falla en la conexión a base de datos :(' );</script>";
    }
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Links para dar formato y diseño a Mateayuda -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--Titulo del programa-->
    <title>MateAyuda</title>

    <!-- Favicons -->
    <!--Van las imagenes a ser usadas como iconos-->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
    <!--El boton sign-up-btn es para ir a formulario iniciar sesion-->
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a MateAyuda</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="#" id="formulario" name="formulario" method="POST">
            <!--Formulario para crear una cuenta-->
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" autocomplete="off" placeholder="Nombre" name="nombre">
            <input type="password" autocomplete="off" placeholder="Contraseña" name="constrasena">
            <input type="number" min="7" placeholder="Edad" name="edad">
            <input type="submit" value="Registrarse" name="botonCuenta">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="#" id="formularioDos" name="formularioDos" method="POST">
            <!--Formulario iniciar sesion-->
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="text" autocomplete="off" placeholder="Nombre" name="nombre">
            <input type="password" autocomplete="off" placeholder="Contraseña" name="constrasena">
            <input type="submit" value="Iniciar Sesion" name="botonLogin">
        </form>
        <div class="welcome-back">
            <div class="message">
                <!--El boton sign-in-btn es para ir a formulario registrarte-->
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <!--Script JS realiza el cambio de formulario, ocultando uno para preguntar sobre registro o iniciar sesion-->
    <script src="scripts/script.js"></script>
</body>

</html>



<?php

session_start();

//Este php inserta en la tabla usuario los datos si vas a registrate
if (isset($_POST['botonCuenta'])) {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $contrasena = $_POST["constrasena"];

    $insertarDatos = "INSERT INTO usuario VALUES('$nombre','$edad','$contrasena')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    //Una vez registrado, te redirige a menu
    if ($ejecutarInsertar) {
        header("Location: menu.php");
    }
}
?>

<!--History es para evitar que se ingresen datos al recargar la pagina-->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<?php

require "Funciones/Conectar.php";
$con = conectar();
$_SESSION["logged"]=NULL;

//Este php valida que se encuentre un usuario y constraseña en la base de datos 
if (isset($_POST['botonLogin'])) {
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["constrasena"];    

    $sql = "SELECT * FROM usuario WHERE nombre='$nombre' AND contrasena='$contrasena'";
    $result = mysqli_query($con, $sql);

    // si se encuentra a uno quiere decir que el usuario y constraseña si estan registrados
    if (mysqli_num_rows($result) > 0) {
        header("Location: menu.php");

    //Esto establece que un usuario está activo.
    $_SESSION["logged"] = true;

    } else {
        echo "Hay un error";
    }
}
?>