<?php

class Usuario{

    // Metodo registrar ---  crear - (INSERT INTO)

    public function registrar($conexion, $nombre, $apellido, $documento, $fechaNaci ,$rol){
        $query = "INSERT INTO usuario (nombre, apellido, documento, fecha_nacimiento, rol) VALUES ('$nombre', '$apellido', $documento, '$fechaNaci','$rol')";
        $consulta = mysqli_query($conexion, $query);

        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registrar ".mysqli_error($conexion);  
        }
        return $respuesta;
    }
        //Funcion para consultar
    public function consultar($conexion){
        $query = "SELECT * FROM usuario";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
        //Funcion para consultar
    public function consultaId($conexion, $id){
        $query = "SELECT * FROM usuario WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
        //Funcion para editar
    public function editar($conexion, $nombre, $apellido, $documento, $fechaNaci, $id, $rol){
        $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', documento = $documento, fecha_nacimiento = '$fechaNaci',rol='$rol' WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }
        //Funcion para eliminar
    public function eliminar($conexion, $id){
        $query = "DELETE FROM usuario WHERE id = $id;";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario eliminado";
        }else{
            $respuesta = "No fue posible eliminar ";
        }
        return $respuesta;
    }
        //  .mysqli_error($conexion)  <----  nos muestra donde esta el error
}