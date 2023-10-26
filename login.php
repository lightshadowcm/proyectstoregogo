<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <main
    <form action="" method="POST">
        <?php
        if(isset($errorLogin)){
            echo $errorLogin;
        }
        ?>
        <h2>iniciar sesion</h2>
        <label for="username">nombre usuario</label>
        <input type="text" name="username">
        <label for="password">contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Iniciar sesion">

    </form>
</body>

</html>