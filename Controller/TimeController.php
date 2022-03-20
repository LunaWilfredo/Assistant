<?php

require_once 'Model/TimeModel.php';

class TimeOverController{

    static public function TimeRegister(){
        if(isset($_POST['dni']) && !empty($_POST['dni'])){

            $table = 'asistencias';
            $datos = array(
                "dni"=>$_POST['dni']
            );

            $answer = TimeOverModel::TimeRegister($table,$datos);
            return $answer;
        }
    }
}