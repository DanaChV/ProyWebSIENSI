<?php

class AdministradorDTO {
	 private $codigo;
   private $nombre;
   private $correo;
   private $telefono;
   private $cargo;
   private $contraseña;
   
   function __construct($codigo, $nombre, $correo, $telefono, $cargo, $contraseña) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->correo = $correo;
       $this->telefono = $telefono; 
       $this->cargo = $cargo;
       $this->contraseña = $contraseña;
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

   function getCargo() {
       return $this->cargo;
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

   function setCargo($cargo) {
       $this->cargo = $cargo;
   }

   function setContraseña($contraseña) {
       $this->contraseña = $contraseña;
   }

}