<?php 

require_once 'BD/DataBase.php';

class TimeOverModel{
    static public function TimeRegister($table,$datos){
        $sql="INSERT INTO $table( doc,fecha,hora) VALUES (:doc,curdate(),curtime())";

        $cn=Conexion::conectar()->prepare($sql);

        $cn->bindParam(':doc',$datos['doc'],PDO::PARAM_STR);

        if($cn->exec()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        $conexion->close();
        $conexion = NULL;
    }
}