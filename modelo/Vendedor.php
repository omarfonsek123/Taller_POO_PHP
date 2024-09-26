<?php

class Vendedor extends Persona {
    private $carnet;    
    private $direccion; 

    
    public function __construct($codigo, $email, $nombre, $telefono, $carnet, $direccion) {
        
        parent::__construct($codigo, $email, $nombre, $telefono);
        
        
        $this->carnet = $carnet;
        $this->direccion = $direccion;
    }

   
    public function getCarnet() {
        return $this->carnet;
    }

   
    public function setCarnet($carnet) {
        $this->carnet = $carnet;
    }

   
    public function getDireccion() {
        return $this->direccion;
    }

   
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}