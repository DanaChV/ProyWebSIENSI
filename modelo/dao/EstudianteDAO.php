<?php

class EstudianteDAO {

// REGISTRA EL ESTUDIANTE EN LA BASE DE DATOS
    function registrarEstudiante($EstudianteDTO) {
        $conectar = Conexion::crearConexion();
        $exito = false;
        try {
            $codigo = $EstudianteDTO->getCodigo();
            $nombre = $EstudianteDTO->getNombre();
            $correo = $EstudianteDTO->getCorreo();
            $telefono = $EstudianteDTO->getTelefono();
            $carrera = $EstudianteDTO->getCarrera();
            $contraseña = $EstudianteDTO->getContraseña();
            $consulta = $conectar->prepare("INSERT INTO usuarioestudiante (codigo,nombre,correo,telefono,carrera,contraseña) VALUES(?,?,?,?,?,?)");
            $consulta->bindParam(1, $codigo, PDO::PARAM_STR);
            $consulta->bindParam(2, $nombre, PDO::PARAM_STR);
            $consulta->bindParam(3, $correo, PDO::PARAM_STR);
            $consulta->bindParam(4, $telefono, PDO::PARAM_STR);
            $consulta->bindParam(5, $carrera, PDO::PARAM_STR);
            $consulta->bindParam(6, $contraseña, PDO::PARAM_STR);
            $exito = $consulta->execute();
        } catch (Exception $ex) {
            throw new Exception("Ocurrio un error" . $ex->getTraceAsString());
        }
        return $exito;
    }

//     VERIFICA SI EL ESTUDIANTE YA ESTA REGISTRADO EN LA BASE DE DATOS
    function buscarEstudianteDAO($codigo) {
        $conectar = Conexion::crearConexion();
        try {
            $consulta = $conectar->prepare("SELECT id FROM usuarioestudiante WHERE codigo =?");
            $consulta->bindParam(1, $codigo, PDO::PARAM_STR);
            $consulta->execute();
            $filas = $consulta->rowCount();
        } catch (Exception $ex) {
            throw new Exception("Ocurrio un error" . $ex->getTraceAsString());
        }
        return $filas;
    }

//      INGRESA EL ESTUDIANTE AL SISTEMA
    function loguearEstudianteDAO($EstudianteDTO) {
        $conectar = Conexion::crearConexion();
        $exito = false;
        try {
            $codigo = $EstudianteDTO->getCodigo();
            $contraseña = $EstudianteDTO->getContraseña();
            $consulta = $conectar->prepare("SELECT usuarioestudiante.id AS id,usuarioestudiante.nombre AS nombre,usuarioestudiante.correo AS correo,usuarioestudiante.telefono AS telefono,usuarioestudiante.carrera AS carrera FROM usuarioestudiante WHERE codigo =? AND contraseña=?;");
            $consulta->bindParam(1, $codigo, PDO::PARAM_STR);
            $consulta->bindParam(2, $contraseña, PDO::PARAM_STR);
            $consulta->execute();
            $respuesta = $consulta->fetch();
            $EstudianteDTO->setNombre($respuesta["nombre"]);
            $EstudianteDTO->setCorreo($respuesta["correo"]);
            $EstudianteDTO->setTelefono($respuesta["telefono"]);
            $EstudianteDTO->setCarrera($respuesta["carrera"]);
            $EstudianteDTO->setId($respuesta["id"]);
            $filas = $consulta->rowCount();
            if ($filas > 0) {
                $exito = true;
            }
        } catch (Exception $ex) {
            throw new Exception("Ocurrio un error" . $ex->getTraceAsString());
        }
        return $exito;
    }
    
    function editarDatos($nombre,$correo,$telefono,$carrera,$id){
        try{
            $exito=false;
            $conexion = Conexion::crearConexion();
            $consulta = $conexion->prepare("UPDATE usuarioestudiante SET usuarioestudiante.nombre = ?,usuarioestudiante.correo = ?, usuarioestudiante.telefono = ?, 
               usuarioestudiante.carrera = ? WHERE usuarioestudiante.id=?;");
            $consulta->bindParam(1, $nombre,PDO::PARAM_STR);
            $consulta->bindParam(2, $correo,PDO::PARAM_STR);
            $consulta->bindParam(3, $telefono,PDO::PARAM_STR);
            $consulta->bindParam(4, $carrera,PDO::PARAM_STR);
            $consulta->bindParam(5, $id,PDO::PARAM_INT);
            $exito = $consulta->execute();
        } catch (Exception $ex) {
            return $ex->getTraceAsString();
        }
        return $exito;
    }

    function editarContraseña($contraseñaNueva,$id){
        try {
            $exito=false;
            $conexion = Conexion::crearConexion();
            $consulta = $conexion->prepare("UPDATE usuarioestudiante SET usuarioestudiante.contraseña = ? WHERE usuarioestudiante.id=?;");
            $consulta->bindParam(1, $contraseñaNueva,PDO::PARAM_STR);
            $consulta->bindParam(2, $id,PDO::PARAM_INT);
            $exito = $consulta->execute();
        } catch (Exception $ex) {
            return $ex->getTraceAsString();
        }
        return $exito;
    }

}
