<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexcsss.css" />
    <title>Home</title>
</head>

<body>
    <header>
        <img id="icono-head" src="helado.png" alt="" />
        <h1>El Derretido</h1>
        <nav>
            <ul class="ul-nav">
                <li class="il-nav"><a id="a-nav" href="#">Incio</a></li>

                <li class="cerrar-sesion" id="il-nav"><a href="/logout.php">Cerrar Sesion</a></li>
                <li class="il-nav"><a id="a-nav" href="perfil.html">Perfil</a></li>
            </ul>
        </nav>


    </header>

    <main>
        <section class="left-section">
            <div class="div-lista">

                <table class="lista">
                    <tr>
                        <th>empleados</th>
                    <tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>apellido</td>
                        <td>documento</td>
                        <td>emial</td>
                        <td>telefono</td>
                        <td>direccion</td>
                        <td>genero</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>adhan</td>
                        <td>cubillos</td>
                        <td>1005634</td>
                        <td>adhan@gmail.com</td>
                        <td>34354645</td>
                        <td>cra14332</td>
                        <td>masculino</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>pedro</td>
                        <td>rivera</td>
                        <td>1054645</td>
                        <td>judas@gmail.com</td>
                        <td>343544533</td>
                        <td>cra14345</td>
                        <td>masculino</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>leandro</td>
                        <td>lesmes</td>
                        <td>1005453</td>
                        <td>leandro@gmail.com</td>
                        <td>34354645</td>
                        <td>cra14452</td>
                        <td>masculino</td>
                    </tr>
                </table>
                </ul>
            </div>
        </section>

        <section class="right-section">
            <div class="div-derecha">
                <form action="" class="form">
                    <label for="nombre">NOMBRE</label> <br />
                    <input id="nombre" type="text" min="4" max="25" required pattern="[a-zA-Z0-9]+" placeholder="Juan" /><br />
                    <label for="apellido">APELLIDO</label><br />
                    <input id="apellido" type="text" min="4" max="25" required pattern="[a-zA-Z0-9]+" placeholder="ospina" />
                    <br />
                    <label id="documento" for="documento">DOCUMENTO ID</label><br />
                    <input id="documento" type="text" required pattern="[[0-9]+]+" placeholder="10043543" /><br />
                    <label for="email">EMAIL</label> <br />
                    <input id="email" type="email" min="4" max="30" required pattern="[a-zA-Z@.]+" placeholder="juan@mail.com" /><br />
                    <label for="telefono">TELEFONO</label> <br />
                    <input id="telefono" type="text" required pattern="[[0-9]+]+" placeholder="343243423" />
                    <br />
                    <label for="direccion">DIRECCION</label><br />
                    <input id="direccion" type="text" min="4" max="25" required pattern="[a-zA-Z0-9]+" placeholder="cra343 #34" /><br />
                    <label for="genero">GENERO</label> <br />
                    <select id="genero" name="genero">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    <br />
                    <label for="password">contraseña</label><br />
                    <input id="password" pattern="[a-zA-Z@.,_-/]+" placeholder="contraseña,.-_" /><br />
                    <div class="buttons">
                        <button type="submit" name="crear">Crear</button><br />
                        <button type="submit" name="crear">editar</button><br />
                        <button type="submit" name="crear">eliminar</button><br />
                        <button type="submit" name="crear">limpiar</button><br />
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>