<?php

class Factura{
    private $fecha;
    private $numero;
    private $total;

    public function __construct($fecha, $numero, $total){
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->Numero;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function getTotal(){
        return $this->Total;
    }

    
}

