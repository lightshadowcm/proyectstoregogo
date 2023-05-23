<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class ConexionDB {
    private $conexion;

    public function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $host = 'dbtiendagogo.postgres.database.azure.com';
        $port = '5432';
        $dbname = 'tiendaGoGO';
        $user = 'dbadmintg';
        $password = 'Pedroperuan.';
        $sslmode = 'require';
        $sslrootcert = __DIR__ . '/ssl.pem';
        $dsn = "host=$host port=$port dbname=$dbname user=$user password=$password sslmode=$sslmode sslrootcert=$sslrootcert";
        $this->conexion = pg_connect($dsn);
        if (!$this->conexion) {
            echo "Error de conexión: " . pg_last_error();
            exit;
        }
    }

    public function obtenerConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        pg_close($this->conexion);
    }
}
 
$conexionDB = new ConexionDB();


$conexion = $conexionDB->obtenerConexion(); 

/* 
$query = "SELECT id FROM clientes";
$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error en la consulta: " . pg_last_error();
    exit;
}


while ($row = pg_fetch_assoc($result)) {
    echo "Campo 1: " . $row['id'] . "<br>";
    
    
} */












?>