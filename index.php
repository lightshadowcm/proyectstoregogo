<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no quiere funcar</title>
</head>

<body>
    <h2>no funco j</h2>

</body>

</html>
<?php
$host = 'dbtiendagogo.postgres.database.azure.com';
$port = '5432';
$dbname = 'Tienda GoGo';
$user = 'dbadmintg';
$password = 'PedroPeruan.';
$sslmode = 'require';
$sslrootcert = __DIR__ . '/ssl';
$dsn = "host=$host port=$port dbname=$dbname user=$user password=$password sslmode=$sslmode sslrootcert=$sslrootcert";
$conexion = pg_connect($dsn);
if (!$conexion) {
    echo "Error de conexión: " . pg_last_error();
    exit;
} 
pg_close($conexion);

?>