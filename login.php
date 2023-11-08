<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <body>
        <header></header>
        <main>
            <section class="main">
                <div class="login">
                    <h2>Iniciar Sesion</h2><br>
                    <form action="" method="POST">
                        <?php
                        if (isset($errorLogin)) {
                            echo $errorLogin;
                        }
                        ?>
                        <label for="username">Nombre Usuario</label><br>
                        <input type="text" name="username" required placeholder="Pedro"><br>
                        <label for="password">Contraseña</label><br>
                        <input type="password" name="password" requerid placeholder="12345" id="password"><br>
                        <input id="button" type="submit" value="Iniciar Sesion"><br>
                        <a href="#">No tengo Cuenta</a>
                    </form>
                </div>
            </section>
        </main>
        <footer></footer>
    </body>

</html>