<?php
class ProductosPorFactura {
    private $cantidad;   
    private $subtotal;   

    
    public function __construct($cantidad, $subtotal) {
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
    }

    
    public function getCantidad() {
        return $this->cantidad;
    }

   
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    
    public function getSubtotal() {
        return $this->subtotal;
    }

  
    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }
}