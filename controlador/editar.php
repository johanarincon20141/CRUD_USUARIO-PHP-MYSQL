<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$objUsuario = new usuario();

$conexion = $objConexion->conectar();

echo $objUsuario->editar($conexion, $_POST['nombre'], $_POST['apellido'], $_POST['documento'], $_POST['fechaNaci'], $_POST['id'], $_POST['rol']);

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
<br><br> <a href="../consultar.php">Ir a consultar</a>
</body>
</html>