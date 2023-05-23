<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new userSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "hay sesion";
}else if (isset($_POST['username']) && isset($_POST['posword'])){
 echo "validacion login";
}
else {
    echo "login";
}



?>