<?php

include './Conexion_bd.php';

$correo = $_POST['usuario'];
$password = $_POST['password'];

$validar = mysqli_query($conexion, "SELECT * FROM Usuarios
WHERE Email = '$correo' AND password = '$password'");

if(mysqli_num_rows($validar) > 0){
    header("Location: ../principal/principal.html");
} else {
    header("Location: ../Login/index.php");
}

?>