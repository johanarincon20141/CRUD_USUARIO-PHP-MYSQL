<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$objUsuario = new usuario();

$conexion = $objConexion->conectar();
echo $objUsuario->eliminar($conexion, $_GET['id']);
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
    <br><br> <a href="../consultar.php">Regresar</a>
</body>
</html>