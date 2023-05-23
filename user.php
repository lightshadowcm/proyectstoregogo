<?php
require_once 'conexion.php';
$conexionDB = new ConexionDB();
$conexion = $conexionDB->obtenerConexion();

class User extends ConexionDB{
    private $nombre ;
    private $username;
    public function userExists($user,$pass){

        $query = $this->conectar()->prepare('Select * From personal WHERE nombre=:user AND contrasena=:pass');
        $query -> execute(['user'=>$user,'pass'=>$pass]);
        if($query->rowCount()){
            return true;
        }
        else {
            return false;
        }
    }
    public function setUser($user){
        $query = $this->conectar()->prepare('Select * from personal where nombre=:user');
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