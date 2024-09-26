<?php

class Producto{
    private $codigo;
    private $nombre;
    private $stock;
    private $valorUnitario;

    public function __construct($codigo, $nombre, $stock, $valorUnitario){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->valorUnitario = $valorUnitario;

    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setStock($stock){
        $this->stock = $stock;
    }

    public function getStock(){
        return $this->stock;
    }

    public function setValorUnitario($valorUnitario){
        $this->valorUnitario = $valorUnitario;
    }

    public function getValorUnitario(){
        return $this->valorUnitario;
    }


}
