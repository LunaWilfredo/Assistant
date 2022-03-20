<?php 

class Conexion{
    static public function conectar(){
        $link = New PDO("mysql:host=localhost;dbname=labyermedic","root","");
        $link->exec("SET NAMES UTF8");
        return $link;
    }
}

?>