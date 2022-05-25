<?php 

class Conexion{
    static public function conectar(){
        $cn=New PDO("mysql:host=localhost;dbname=labyermedic","root","");
        $cn->exec("SET NAMES UTF8");
        return $cn;
    }
}

?>