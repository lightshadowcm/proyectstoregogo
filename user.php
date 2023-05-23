<?php
require_once 'conexion.php';


class User extends ConexionDB{
    private $nombre ;
    private $username;
    public function userExists($user,$pass){
$conexionDB = new ConexionDB();
$conexion = $conexionDB->obtenerConexion();
        
$query = $conexion->prepare('SELECT * FROM personal WHERE nombre=:user AND contrasena=:pass');
$query->bindParam(':user', $user);
$query->bindParam(':pass', $pass);
$query->execute();
        if($query->rowCount()){
            return true;
        }
        else {
            return false;
        }
    }
    public function setUser($user){
        $conexionDB = new ConexionDB();
        $conexion = $conexionDB->obtenerConexion();
        $query = $conexion->prepare('Select * from personal where nombre=:user');
        $query->execute(['user'=>$user]);
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            
        }
    }
    public function getNombre(){
        return $this->nombre;
    }

}

?>