<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
     

</body>
<?php
require_once 'conexion.php';
$conexionDB = new ConexionDB();
$conexion = $conexionDB->obtenerConexion();
$query = "SELECT id FROM clientes";
$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error en la consulta: " . pg_last_error();
    exit;
}

while ($row = pg_fetch_assoc($result)) {
    echo "Campo 1: " . $row['id'] . "<br>";
}

?>
</html>
