<?php

    include 'clases/conexion.php';
    include 'clases/usuario.php';

    $objConexion = new conexion();
    $objUsuario = new usuario();

    $conexion = $objConexion->conectar();
    $datos = $objUsuario->consultaId($conexion, $_GET['id']);

    $nombre;
    $apellido;
    $documento;
    $fechaNacimiento;

    while($dato = mysqli_fetch_array($datos)){
        $id = $dato['id'];
        $nombre = $dato['nombre'];
        $apellido = $dato['apellido'];
        $documento = $dato['documento'];
        $fechaNacimiento = $dato['fecha_nacimiento'];
        $rol=$dato['rol'];
    }
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
    <!--formulario-->
    <form action="controlador/editar.php" method="post">
        <input value="<?php echo $id; ?>" type="hidden" name="id">
        <label for="">Nombre: </label> <input type="text" name="nombre" value=" <?php echo $nombre; ?>"> <br><br>
        <label for="">Apellido: </label> <input type="text" name="apellido" value=" <?php echo $apellido; ?>"> <br><br>
        <label for="">Documento: </label> <input type="text" name="documento" value=" <?php echo $documento; ?>"> <br><br>
        <label for="">Fecha Nacimiento: </label> <input type="text" name="fechaNaci" value=" <?php echo $fechaNacimiento; ?>">
        <label for="">  Rol: </label> <input type="text" name="rol" value=" <?php echo $rol; ?>"> <br><br>
        <input type ="submit" value= "Actualizar">
        
    </form>
</body>
</html>