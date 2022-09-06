<?php
    define("HOST", 'localhost');
    define("BD", 'form');
    define("USER_BD", 'root');
    define("PASS_BD",'');

    function conectar(){
        $con = new mysqli(HOST, USER_BD, PASS_BD, BD);
        return $con;
        if(!$con){
            echo "<script>console.log('Console: Falla en la conexión a base de datos :(' );</script>";
        }
    }

    function test(){
        echo "<script>console.log('Console: sí jala' );</script>";
    }
?>