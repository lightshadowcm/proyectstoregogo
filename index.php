<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no quiere funcar</title>
</head>

<body>
    <h2>a ver3</h2>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = 'dbtiendagogo.postgres.database.azure.com';
$port = '5432';
$dbname = 'tiendaGoGo';
$user = 'dbadmintg';
$password = 'PedroPeruan.';
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
</body>

</html>
