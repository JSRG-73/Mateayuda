<?php
   
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="form";

    
    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    if(!$enlace){
        echo"Ups algo paso en enlace ";
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>MateAyuda</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a MateAyuda</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="#" id="formulario" name="formulario" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" autocomplete="off" placeholder="Nombre" name="nombre">
            <input type="password" autocomplete="off" placeholder="Contraseña" name="constrasena">
            <input type="number"  min="7" placeholder="Edad" name="edad">
            <input type="submit" value="Registrarse" name="botonCuenta">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="#" id="formularioDos" name="formularioDos" method="POST">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="text" autocomplete="off" placeholder="Nombre" name="nombre">
            <input type="password" autocomplete="off" placeholder="Contraseña" name="constrasena">
            <input type="submit" value="Iniciar Sesion" name="botonLogin">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    
    <script src="scripts/script.js"></script>
</body>

</html>



<?php 
if(isset($_POST['botonCuenta'])){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $contrasena = $_POST["constrasena"];

    $insertarDatos = "INSERT INTO usuario VALUES('$nombre','$edad','$contrasena')";
    $ejecutarInsertar= mysqli_query($enlace, $insertarDatos);
    
    if($ejecutarInsertar){
        header("Location: menu.php");
       
    }
}
?>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
    
<?php 
if(isset($_POST['botonLogin'])){
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["constrasena"];

    $sql = "SELECT * FROM usuario WHERE nombre='$nombre' AND contrasena='$contrasena'";
    $result = mysqli_query($enlace, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: menu.php");
    } else {
    echo "Hay un error";
    }

    
}
?>
