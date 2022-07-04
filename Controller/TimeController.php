<?php

require_once 'Model/TimeModel.php';

class TimeOverController{

    static public function horario($doc){
        $table = "personal";
        $respuesta = TimeOverModel::horario($table,$doc);
        return $respuesta;
    }

    static public function TimeRegister($id){
        if(isset($_POST['entrada'])){
            $table ="asistencias";
            $answer = TimeOverModel::TimeRegisterE($table,$id);
            return $answer;
        }else if(isset($_POST['salida'])){
            $table ="asistencias";
            $answer = TimeOverModel::TimeRegisterS($table,$id);
            return $answer;
        }
    }

    static public function horarioM($doc){
        $table = "asistencias";
        $respuesta = TimeOverModel::horarioM($table,$doc);
        return $respuesta;
    }

    
}