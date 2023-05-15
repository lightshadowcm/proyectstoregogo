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
$conexion = new PDO('pgsql:host=dbtiendagogo.postgres.database.azure.com;dbname=Tienda GoGo', 'dbadmintg', 'PedroPeruan.');
if ($conexion) {

    $resultado = $conexion->query("SELECT * FROM clientes");

// Verificar si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conexion->errorInfo()[2]);
}

// Recorrer los resultados de la consulta
while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    // Hacer algo con los datos de cada fila
}

// Cerrar la conexión a la base de datos
$conexion = null;
} else {
    echo 'valio';
    die("Error en la consulta: " . $conexion->errorInfo()[2]);
}

?>