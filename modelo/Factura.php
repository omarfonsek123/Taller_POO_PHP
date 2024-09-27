<?php
require_once 'ProductosPorFactura.php';

class Factura{
    private $fecha;
    private $numero;
    private $total;
    private $productosPorFactura;

    public function __construct($fecha, $numero, $total, $cantidad, $subtotal){
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
        $this->productosPorFactura = new ProductosPorFactura($cantidad, $subtotal);
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
        return $this->numero;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function getTotal(){
        return $this->total;
    }

    public function getCantidad() {
        return $this->productosPorFactura->getCantidad();
    }

   
    public function setCantidad($cantidad) {
        $this->productosPorFactura->setCantidad($cantidad);
    }

    
    public function getSubtotal() {
        return $this->productosPorFactura->getSubtotal();
    }

  
    public function setSubtotal($subtotal) {
        $this->productosPorFactura->setSubtotal($subtotal);
    }
    
}

$factura = new Factura("2024-09-26", 1234567, 3000.50, 4, 3000.50*0.81);
echo "Detalle de factura: " . $factura->getSubtotal();

?>
