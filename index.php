<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hola5!</h2>
   
</body>
</html>
<?php
$host= 'dbtiendagogo.postgres.database.azure.com';
$port = '5432';
$dbname = 'Tienda GoGo';
$user = 'dbadmintg';
$password ='PedroPeruan.';
$conexion=pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if($conexion){
    
    $query = "SELECT id,nombre,empresa from proveedor";
                $consulta = pg_query($conexion, $query);

                if ($consulta) {

                    if (pg_num_rows($consulta) > 0) {
                        echo '<h2> Proveedores Eegistrados <br> </h2> ';

                        echo '<h4>ID | Nombre| Empresa <br> </h4> ';
                        echo '<div class="lista">';
                        while ($obj = pg_fetch_object($consulta)) {


                            echo '<p class"obj"> ' . $obj->id . ' | ' . $obj->nombre . ' | ' . $obj->empresa . ' <br> </p>';
                        }
                        echo '</div>';
                    }
                }
     
        
      

}
else {
    echo 'valio';
}
pg_close($conexion);
?>
<?php

session_start();
                

                ?>