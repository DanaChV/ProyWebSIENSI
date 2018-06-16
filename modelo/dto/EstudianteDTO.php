<?php

class estudianteDTO {
   private $id; 
   private $codigo;
   private $nombre;
   private $correo;
   private $telefono;
   private $carrera;
   private $contraseña;
   
   function __construct($codigo, $nombre, $correo, $telefono, $carrera, $contraseña) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->correo = $correo;
       $this->telefono = $telefono; 
       $this->carrera = $carrera;
       $this->contraseña = $contraseña;
   }
   
   function getId() {
       return $this->id;
   }

   function setId($id) {
       $this->id = $id;
   }

   function getCodigo() {
       return $this->codigo;
   }
   
   function getNombre() {
       return $this->nombre;
   }

   function getCorreo() {
       return $this->correo;
   }

   function getTelefono() {
       return $this->telefono;
   }

   function getCarrera() {
       return $this->carrera;
   }

   function getContraseña() {
       return $this->contraseña;
   }

   function setCodigo($codigo) {
       $this->codigo = $codigo;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setCorreo($correo) {
       $this->correo = $correo;
   }

   function setTelefono($telefono) {
       $this->telefono = $telefono;
   }

   function setCarrera($carrera) {
       $this->carrera = $carrera;
   }

   function setContraseña($contraseña) {
       $this->contraseña = $contraseña;
   }

}
