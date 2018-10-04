<?php

// instancias de otras clases   ----  el  ../  nos devuelve una carpeta
include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->registrar($conexion, $_POST['nombre'], $_POST['apellido'], $_POST['documento'], $_POST['fechaNacimiento'],$_POST['rol']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><a href="../index.html">Volver a Menu</a>
</body>
</html>