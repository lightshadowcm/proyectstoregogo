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
          <li class="il-nav"><a class="a-nav" href="#">Incio</a></li>
          
          <li class="cerrar-sesion" class="il-nav">
                <a href="/logout.php">Cerrar Sesion</a>
            </li>
          <li class="il-nav"><a class="a-nav" href="perfil.html">Perfil</a></li>
        </ul>
      </nav>
      

    </header>
    
    <main>
    <section class="left-section">
        <div class="div-lista">
          
          <ul>
             <li>|id|nombre|apellido|documento|emial|telefono|direccion|genero|</li>
            <li>|01|adhan|cubillos|10067876|adham@gmail|3234233|cra453vws|masculino</li>
            <li>|02leandro|lesmes|10067873|leandro@gmail|3237833|cra653vws|masculino</li>
            <li>|01|pedro |rivera|10067872|pedro@gmail|3234563|cra433vws|masculino</li>
          </ul>
        </div>
      </section>

      <section class="right-section">
        <div class="div-derecha">
          <form action="" class="form">
            <label for="nombre">NOMBRE</label> <br />
            <input
            id="nombre"
              type="text"
              min="4"
              max="25"
              required
              pattern="[a-zA-Z0-9]+"
              placeholder="Juan"
            /><br />
            <label for="apellido">APELLIDO</label><br />
            <input
            id="apellido"
              type="text"
              min="4"
              max="25"
              required
              pattern="[a-zA-Z0-9]+"
              placeholder="ospina"
            />
            <br />
            <label id="documento" for="">DOCUMENTO ID</label><br />
            <input id="documento"
            type="text" required pattern="[[0-9]+]+" placeholder="10043543" 
            /><br />
            <label for="email">EMAIL</label> <br />
            <input
            id="email"
              type="email"
              min="4"
              max="30"
              required
              pattern="[a-zA-Z@.]+"
              placeholder="juan@mail.com"
            /><br />
            <label for="telefono">TELEFONO</label> <br />
            <input id="telefono" type="text" required pattern="[[0-9]+]+" placeholder="343243423" />
            <br />
            <label for="direccion">DIRECCION</label><br />
            <input
            id="direccion"
              type="text"
              min="4"
              max="25"
              required
              pattern="[a-zA-Z0-9]+"
              placeholder="cra343 #34"
            /><br />
            <label  for="genero">GENERO</label> <br />
            <select id="genero" name="genero" >
              <option value="masculino">Masculino</option>
              <option value="femenino">Femenino</option>
              <option value="otro">Otro</option>
            </select>
            <br />
            <label for="contraseña">contraseña</label><br />
            <input 
            id="password" 
            pattern="[a-zA-Z@.,_-/]+"
            placeholder="contraseña,.-_"
             /><br />
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