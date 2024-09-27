<?php
require_once 'Cliente.php';
class Empresa {
    private $codigo;  
    private $nombre;  
    private $cliente;
   
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

    public function agregarCliente(Cliente $cliente){
        $this->cliente = $cliente;
    }

    public function getCredito() {
        if ($this->cliente){
            return $this->cliente->getCredito();
        }
     else {
        return "Sin creditos";
    }
    }


    public function setCredito($credito) {
        if($this->cliente){
            $this->cliente->setCredito($credito);
        }

    }
    }

    $empresa = new Empresa("ABC1345678", "XYZ");
    $cliente = new Cliente("1111111111", "arnulfo123@correo.com", "Arnulfo", "32198537374", 1500000);
    $empresa->agregarCliente($cliente);
    $empresa->setCredito(2000000);

    echo "valor del crédito: " . $cliente->getCredito();