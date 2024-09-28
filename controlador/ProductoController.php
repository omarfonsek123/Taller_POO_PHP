<?php
require_once 'ControlConexionPdo.php'; 
require_once '../modelo/Producto.php';   
include_once 'ConfigBD.php'; 

class ProductoController {
    private $conexion;

    public function __construct() {
        // Establecer la conexión usando las variables globales
        $this->conexion = new ControlConexionPdo($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
    }

    // Método para crear un nuevo producto
    public function crearProducto($codigo, $nombre, $stock, $valorUnitario) {
        $producto = new Producto($codigo, $nombre, $stock, $valorUnitario);
        $sql = "INSERT INTO Producto (codigo, nombre, stock, valorUnitario) VALUES (?, ?, ?, ?)";
        $this->conexion->ejecutarComandoSql($sql, [
            $producto->getCodigo(),
            $producto->getNombre(),
            $producto->getStock(),
            $producto->getValorUnitario()
        ]);
    }

    // Método para obtener todos los productos
    public function obtenerProductos() {
        $sql = "SELECT * FROM Producto";
        return $this->conexion->consultarDatos($sql);
    }

    // Método para obtener un producto por código
    public function obtenerProducto($codigo) {
        $sql = "SELECT * FROM Producto WHERE codigo = ?";
        return $this->conexion->consultarDato($sql, [$codigo]);
    }

    // Método para actualizar un producto
    public function actualizarProducto($codigo, $nombre, $stock, $valorUnitario) {
        $sql = "UPDATE Producto SET nombre = ?, stock = ?, valorUnitario = ? WHERE codigo = ?";
        $this->conexion->ejecutarComandoSql($sql, [$nombre, $stock, $valorUnitario, $codigo]);
    }

    // Método para eliminar un producto
    public function eliminarProducto($codigo) {
        $sql = "DELETE FROM Producto WHERE codigo = ?";
        $this->conexion->ejecutarComandoSql($sql, [$codigo]);
    }
}
?>