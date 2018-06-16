<?php

class Controlador {

    private $negocio;

    // Constructor de la clase
    public function __construct() {
        $this->negocio = new Negocio();
    }

    public function generarPlantilla() {
        return Negocio::generarPlantilla();
    }

    public function generarVista() {

        $enlace = filter_input(INPUT_GET, "ubicacion");
        if ($enlace) {
            $enlace = $this->negocio->generarEnlace($enlace);
        } else {
            $enlace = $this->negocio->generarEnlace("Inicio");
        }
        include_once $enlace;
    }
    
    public function registrarEstudianteControlador($EstudianteDTO){
        return $this->negocio->registrarEstudianteNegocio($EstudianteDTO);
    }
    
    public function buscarEstudianteControlador($codigo){
        return $this->negocio->buscarEstudianteNegocio($codigo);
    }
    
    public function loguearEstudianteControlador($EstudianteDTO) {
        return $this->negocio->loguearEstudianteNegocio($EstudianteDTO);
    }
    
    public function buscarAdministradorControlador($codigo){
        return $this->negocio->buscarAdministradorNegocio($codigo);
    }
    
    public function loguearAdministradorControlador($AdministradorDTO) {
        return $this->negocio->loguearAdministradorNegocio($AdministradorDTO);
    }
    
    public function editarDatosControlador($nombre,$correo,$telefono,$carrera){
        return $this->negocio->editarDatosNegocio($nombre,$correo,$telefono,$carrera);
    }
    
    public function editarContraseñaControlador($contraseñaAntigua,$contraseñaNueva){
        return $this->negocio->editarContraseñaNegocio($contraseñaAntigua,$contraseñaNueva);
    }

}
