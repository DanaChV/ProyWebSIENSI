<?php

require_once '../../controlador/Controlador.php';
require_once '../../modelo/Negocio.php';
require_once '../../modelo/dto/EstudianteDTO.php';
require_once '../../modelo/dao/EstudianteDAO.php';
require_once '../../modelo/dto/AdministradorDTO.php';
require_once '../../modelo/dao/AdministradorDAO.php';
require_once '../../modelo/Conexion.php';


class Ajax {

    private function instanciarControlador() {
        $controlador = new Controlador();
        return $controlador;
    }

    public function registrarEstudiante($codigo, $nombre, $correo, $telefono, $carrera, $contraseña) {
        $exito = false;
        try {
            $controlador = $this->instanciarControlador();
            $EstudianteDTO = new EstudianteDTO ($codigo, $nombre, $correo, $telefono, $carrera, $contraseña);
             $primeraVez = $this->buscarEstudiante($codigo);
            if($primeraVez==0){
             $exito = $controlador->registrarEstudianteControlador($EstudianteDTO);
            }else{
            $exito=false;
            }
        } catch (Exception $ex) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo registrar el Estudiante"));
        }
    }
    
    public function buscarEstudiante($codigo) {
        $controlador = $this->instanciarControlador();
        return $controlador->buscarEstudianteControlador($codigo);    
    }

    public function loguear($codigo, $contraseña, $tipo) {
        $exito = false;
        try {
            $controlador = $this->instanciarControlador();
            if($tipo == "Estudiante"){
                $estudiante = new EstudianteDTO($codigo, null, null, null, null, $contraseña);
                $buscar = $controlador->buscarEstudianteControlador($codigo);
                if($buscar>0){
                    $logueo = $controlador->loguearEstudianteControlador($estudiante);
                    if($logueo){
                        session_start();
                        $_SESSION["usuario"] = serialize($estudiante);
                        $exito = true;
                    }
                }
            }else{
                $admin = new AdministradorDTO($codigo,null,null,null,$tipo,$contraseña);
                $buscar = $controlador->buscarAdministradorControlador($codigo);
                if($buscar>0){
                    $logueo = $controlador->loguearAdministradorControlador($admin);
                    if($logueo){
                        session_start();
                        $_SESSION["usuario"] = serialize($admin);
                        $exito = true;
                    }
                }
            }
        } catch (Exception $ex) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo loguear"));
        }
    }
    
    public function editarDatos($nombre,$correo,$telefono,$carrera){
        try{
            session_start();
            $exito= false;
            $controlador = $this->instanciarControlador();
            $exito=$controlador->editarDatosControlador($nombre,$correo,$telefono,$carrera);
        } catch (Exception $ex) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo editar"));
        }
    }

    public function editarContraseña($contraseñaAntigua,$contraseñaNueva){
        try {
            session_start();
            $exito = false;
            $controlador = $this->instanciarControlador();
            $exito=$controlador->editarContraseñaControlador($contraseñaAntigua,$contraseñaNueva);
        } catch (Exception $ex) {
            echo json_encode(array("exito" => false, "error" => $ex->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
            session_destroy();
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo editar"));
        }
    }

}

//instanciar clase Ajax para acceder a sus metodos
$ajax = new Ajax();

//variables para recibir datos del formulario
$registrarEstudiante = isset($_POST["codigo"], $_POST["name"], $_POST["email"], $_POST["telefono"], $_POST["carrera"], $_POST["password"]);
$loguearEstudiante = isset($_POST["loguearCodigo"], $_POST["loguearContraseña"], $_POST["loguearTipo"]);
$editarDatos = isset($_POST["editarNombre"],$_POST["editarCorreo"],$_POST["editarTelefono"],$_POST["editarCarrera"]);
$editarContraseña = isset($_POST["editarContraseñaN"],$_POST["editarContraseñaA"]);
//ejecutar metodo según variable instanciada
if ($registrarEstudiante) {
    $ajax->registrarEstudiante($_POST["codigo"], $_POST["name"], $_POST["email"], $_POST["telefono"], $_POST["carrera"], $_POST["password"]);
}else if ($loguearEstudiante) {
    $ajax->loguear($_POST["loguearCodigo"], $_POST["loguearContraseña"], $_POST["loguearTipo"]);
}else if($editarDatos){
    $ajax->editarDatos($_POST["editarNombre"],$_POST["editarCorreo"],$_POST["editarTelefono"],$_POST["editarCarrera"]);
}else if ($editarContraseña) {
    $ajax->editarContraseña($_POST["editarContraseñaA"],$_POST["editarContraseñaN"]);
}