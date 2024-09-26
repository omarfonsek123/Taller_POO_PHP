<?php
class Empresa {
    private $codigo;  
    private $nombre;  

   
    public function __construct($codigo, $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

   
    public function getCodigo() {
        return $this->codigo;
    }

   
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

   
    public function getNombre() {
        return $this->nombre;
    }

  
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}