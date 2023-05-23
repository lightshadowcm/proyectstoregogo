<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new userSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "hay sesion";
}else if (isset($_POST['username']) && isset($_POST['posword'])){
    $userForm = $_Post['username'];
    $passForm = $_Post['password'];
    if ($user->userExists($userForm,$passForm)){
        echo"usuairo invalido";
    }else{
        $errorLogin = "Nombre de usuario y/o Contraseña incorrecto";
        include_once 'login.php';
    }

 echo "validacion login";
 
}
else {
   // echo "login";
    include_once 'login.php';
}



?>