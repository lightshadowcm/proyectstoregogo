<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = 'dbtiendagogo.postgres.database.azure.com';
$port = '5432';
$dbname = 'tiendaGoGO';
$user = 'dbadmintg';
$password = 'Pedroperuan.';
$sslmode = 'require';
$sslrootcert = __DIR__ . '/ssl.pem';
$dsn = "host=$host port=$port dbname=$dbname user=$user password=$password sslmode=$sslmode sslrootcert=$sslrootcert";
$conexion = pg_connect($dsn);
if (!$conexion) {
    echo "Error de conexión: " . pg_last_error();
    exit;
} 
$query = "SELECT id FROM clientes";
$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error en la consulta: " . pg_last_error();
    exit;
}


while ($row = pg_fetch_assoc($result)) {
    echo "Campo 1: " . $row['id'] . "<br>";
    
    
}

pg_close($conexion);








?>