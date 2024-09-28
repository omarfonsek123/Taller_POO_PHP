<?php
class ControlConexionPdo {
    private static $instance = null;
    private $conexion;

    public function __construct($serv, $usua, $pass, $bdat, $port) {
        $this->conexion = new PDO("mysql:host=$serv;dbname=$bdat;port=$port", $usua, $pass);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance($serv, $usua, $pass, $bdat, $port) {
        if (self::$instance === null) {
            self::$instance = new ControlConexionPdo($serv, $usua, $pass, $bdat, $port);
        }
        return self::$instance;
    }

    public function ejecutarComandoSql($sql, $params) {
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($params);
    }

    public function consultarDatos($sql) {
        $stmt = $this->conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarDato($sql, $params) {
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
