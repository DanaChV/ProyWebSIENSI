<?php

class AdministradorDAO {
	//     VERIFICA SI EL ADMINISTRADOR YA ESTA REGISTRADO EN LA BASE DE DATOS
    function buscarAdministradorDAO($codigo) {
        $conectar = Conexion::crearConexion();
        try {
            $consulta = $conectar->prepare("SELECT nombre FROM usuarioadministrador WHERE codigo =?");
            $consulta->bindParam(1, $codigo, PDO::PARAM_STR);
            $consulta->execute();
            $filas = $consulta->rowCount();
        } catch (Exception $ex) {
            throw new Exception("Ocurrio un error" . $ex->getTraceAsString());
        }
        return $filas;
    }

//      INGRESA EL ADMINISTRADOR AL SISTEMA
    function loguearAdministradorDAO($AdministradorDTO) {
        $conectar = Conexion::crearConexion();
        $exito = false;
        try {
            $codigo = $AdministradorDTO->getCodigo();
            $contraseña = $AdministradorDTO->getContraseña();
            $consulta = $conectar->prepare("SELECT usuarioadministrador.nombre AS nombre,usuarioadministrador.correo AS correo,usuarioadministrador.telefono AS telefono,usuarioadministrador.cargo AS cargo FROM usuarioadministrador WHERE codigo =? AND contraseña=?;");
            $consulta->bindParam(1, $codigo, PDO::PARAM_STR);
            $consulta->bindParam(2, $contraseña, PDO::PARAM_STR);
            $consulta->execute();
            $respuesta = $consulta->fetch();
            $AdministradorDTO->setNombre($respuesta["nombre"]);
            $AdministradorDTO->setCorreo($respuesta["correo"]);
            $AdministradorDTO->setTelefono($respuesta["telefono"]);
            $AdministradorDTO->setCargo($respuesta["cargo"]);
            $filas = $consulta->rowCount();
            if ($filas > 0) {
                $exito = true;
            }
        } catch (Exception $ex) {
            throw new Exception("Ocurrio un error" . $ex->getTraceAsString());
        }
        return $exito;
    }
    
}