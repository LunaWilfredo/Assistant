<?php 

require_once 'BD/DataBase.php';

class TimeOverModel{
    static public function TimeRegister($table,$datos){
        $sql="INSERT INTO $table (dni,fecha,hora) VALUES(:dni,CURDATE(),CURTIME())";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":dni",$datos['dni'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        $conexion->close();
        $conexion = NULL;
    }
}