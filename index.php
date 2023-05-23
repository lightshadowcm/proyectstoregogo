<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new userSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser() );
    include_once 'home.php';
}else if (isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    if ($user->userExists($userForm,$passForm)){
       // echo"usuario valido";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'home.php';
    }else{
        echo"joder";
        $errorLogin = "Nombre de usuario y/o Contraseña incorrecto";
        include_once 'login.php';
    }

 echo "validacion login";
 
}
else {
    echo "login";
    include_once 'login.php';
}



?>