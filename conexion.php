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

        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password;sslmode=$sslmode;sslrootcert=$sslrootcert";
        
        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $this->conexion = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }

    public function obtenerConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        $this->conexion = null;
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
