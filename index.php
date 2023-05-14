<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hola!</h2>
   
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
     echo'
      <script>
        alert("conexcion exitosa");
    </script>
     ';

}
else {
    echo 'valio';
}