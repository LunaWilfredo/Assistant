<?php

require_once 'Model/TimeModel.php';

class TimeOverController{

    static public function TimeRegister(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){

            $table ="asistencias";
            $datos = array(
                "doc"=>$_POST['doc']
            );
            $answer = TimeOverModel::TimeRegister($table,$datos);
            return $answer;
        }
    }
}