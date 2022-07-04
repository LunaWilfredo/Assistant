<?php 

require_once 'BD/DataBase.php';

class TimeOverModel{
/*Comprobacion de registro y de horario */
    static public function horario($table,$doc){
        $sql=" SELECT p.id AS 'idp',p.pname AS 'nombre',p.papellido AS 'apellido',p.pdoc AS 'documento',
        p.fk_estado AS 'estado',pl.plhi AS 'ingreso',pl.plhs AS 'salida'
        FROM $table p
        INNER JOIN planes pl ON pl.fk_personal = p.id 
        WHERE p.pdoc = $doc";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }
    
    /*Marcacion de Ingreso */
    static public function TimeRegisterE($table,$id){
        $sql="INSERT INTO $table(afecha,ahi,fk_per) VALUES (CURDATE(),CURTIME(),$id)";

        $cn=Conexion::conectar()->prepare($sql);

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo()); 
        }
        
        $conexion->close();
        $conexion = NULL;
    }
    

    /*Comprobacion de marcacion de ingreso */
    static public function horarioM($table,$doc){
        $sql=" SELECT ast.afecha AS 'dia',ast.ahi AS 'ingreso',ast.ahs AS 'salida',
        p.id AS 'idp' FROM  $table p INNER JOIN asistencias ast ON p.id = ast.fk_per 
        WHERE p.pdoc= $doc";

        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    /*Marcacion de salida */
    static public function TimeRegisterS($table,$id){
        $sql="UPDATE $table SET ahs = CURTIME() WHERE fk_per = $id ";

        $cn=Conexion::conectar()->prepare($sql);

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo()); 
        }
        
        $conexion->close();
        $conexion = NULL;
    }

}