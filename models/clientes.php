<?php

require  "../config/Conexion.php";

Class Clientes {
    public function __construct()
    {
    }

    public function guardar($name,$roll,$user,$pass){

        $sql = "INSERT INTO usuario (nombres,roll,usuario,password) VALUES ('$name', '$roll', '$user','$pass')";
        return ejecutarConsulta($sql);

    }
    public function editar($idusuario,$name,$roll,$user,$pass){

        $sql = "update usuario set nombres ='$name', roll = '$roll', usuario = '$user', password = '$pass' where idusuario = $idusuario ";
        return ejecutarConsulta($sql);

    }

    public function desactivarUsuario($idusuario){

        $sql = "UPDATE usuario set estado = 0 where idusuario = '$idusuario'";
        return ejecutarConsulta($sql);

    }

    public function activarUsuario($idusuario){

        $sql = "UPDATE usuario set estado = 1 where idusuario = '$idusuario'";
        return ejecutarConsulta($sql);

    }

    public function listarClientes(){

        $sql = "SELECT idcliente,nombres, cedula, telefono_uno FROM cliente";
        return ejecutarConsulta($sql);
    }
}