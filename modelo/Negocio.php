<?php

class Negocio{
    
    public function generarPlantilla() {
        // Incluir Archivo a la ruta
        include 'vista/Plantilla.php';
    }
    
    // Metodo para obtener la pestaña seleccionada en el menú
    private function validarPestañaBarraDeNavegacion($pestaña) {
        
        $exito = false;
        $pestañas = array("Inicio","Informacion","Documentos","Galeria","Registro","Acceder","Salir", "Editar","file");
        if(in_array($pestaña, $pestañas)){
            $exito=true;
        }
        return $exito;
        
    }
    
    // Metodo para osbtener la pestaña a redirigir 
    private function validarPestañaRedireccion($pestaña) {
        
        $exito=false;
        $pestañas = array("Perfil","editarPerfil");
        if(in_array($pestaña, $pestañas)){
            $exito=true;
        }
        return $exito;
        
    }
    
    public function generarEnlace($enlace) {
        
        if($this->validarPestañaBarraDeNavegacion($enlace)){
            return "vista/modulos/barraDeNavegacion/" .$enlace. ".php";
        }else if($this->validarPestañaRedireccion($enlace)){
            return "vista/modulos/" .$enlace. ".php";
        }else{
            return "vista/modulos/barraDeNavegacion/Inicio.php";
        }  
    }
    
    public function registrarEstudianteNegocio($EstudianteDTO) {
        return EstudianteDAO::registrarEstudiante($EstudianteDTO);
    }

    public function loguearEstudianteNegocio($EstudianteDTO) {
        return EstudianteDAO::loguearEstudianteDAO($EstudianteDTO);
    }

    public function buscarEstudianteNegocio($codigo) {
        return EstudianteDAO::buscarEstudianteDAO($codigo);
    }

    public function loguearAdministradorNegocio($AdministradorDTO) {
        return AdministradorDAO::loguearAdministradorDAO($AdministradorDTO);
    }

    public function buscarAdministradorNegocio($codigo) {
        return AdministradorDAO::buscarAdministradorDAO($codigo);
    }
    
    public function editarDatosNegocio($nombre,$correo,$telefono,$carrera){
        include_once 'dto/EstudianteDTO.php';
        $user = unserialize($_SESSION["usuario"]);
        $user->setNombre($nombre);
        $user->setCorreo($correo);
        $user->setTelefono($telefono);
        $user->setCarrera($carrera);
        $_SESSION["EstudianteDTO"]= serialize($user);
        return EstudianteDAO::editarDatos($nombre,$correo,$telefono,$carrera,$user->getId());
    }

    public function editarContraseñaNegocio($contraseñaAntigua,$contraseñaNueva){
        include_once 'dto/EstudianteDTO.php';
        $user = unserialize($_SESSION["usuario"]);
        if(strcmp($user->getContraseña(), $contraseñaAntigua)==0){
           return EstudianteDAO::editarContraseña($contraseñaNueva,$user->getId());            
        }else{
            return false;
        }

        
    }

}
