<?php 

require_once 'BD/DataBase.php';

class TimeOverModel{

    static public function horario($table,$doc){
        $sql=" SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.pdoc AS 'documento',
        pl.plhi AS 'ingreso',
        pl.plhs AS 'salida',
        e.ename AS 'estado'
        FROM $table p 
        LEFT JOIN estados e ON p.fk_estado = e.id
        INNER JOIN planes pl ON pl.fk_personal=p.id
        WHERE p.pdoc = $doc;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function TimeRegister($table,$datos){
        $sql="INSERT INTO $table( doc,fecha,hora) VALUES (:doc,curdate(),curtime())";

        $cn=Conexion::conectar()->prepare($sql);

        $cn->bindParam(':doc',$datos['doc'],PDO::PARAM_STR);

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        $conexion->close();
        $conexion = NULL;
    }
}