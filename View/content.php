<?php 

if(isset($_POST['doc']) && !empty($_POST['doc']) && isset($_POST['entrada']))
{
    $documento = $_POST['doc']; 
    date_default_timezone_set('America/Lima');
    $hora=date('H:i',time());
    $comprobacion = TimeOverController::horario($documento);
    if($comprobacion >= 1 && $comprobacion != NULL)
    {
        foreach($comprobacion as $prev)
        {
            $id=$prev['idp'];
            $nombre =$prev['nombre'];
            $documentoB=$prev['documento'];
            $ingresoB=$prev['ingreso'];
            $salidaB=$prev['salida'];
            $estado=$prev['estado'];
        }
        $register = TimeOverController:: TimeRegister($id);

        if($register = 'ok')
        {
        echo '<script>
                    if(window.history.replaceState){
                        window.history.repaceState(null,null,window.location.href);
                   }
                </script>';
         echo " 
             <div class='container'>
                     <div class='alert alert-success text-center mt-5 rounded' role='alert'>
                         Asistencia Registrada "."['.$hora.']"."['.$msg.']"." ".STRTOUPPER($nombre)."
                     </div>
             </div>'
             <script>
                 setTimeout(function(){
                     window.location = 'index.php';
                 },1000);
             </script>";
        }
    }else{
        echo '
        <div class="container">
            <div class="alert alert-danger text-center" role="alert">
                Personal NO registrado en sistema!
            </div>
        </div>';

    }  
}
else if(isset($_POST['doc']) && !empty($_POST['doc']) && isset($_POST['salida'])){

    $documento = $_POST['doc']; 
    date_default_timezone_set('America/Lima');

    $fecha=DATE('Y-m-d');
    $hora=date('H:i',time());

    $comprobacion = TimeOverController::horario($documento);
    $entrada=TimeOverController::horarioM($documento);

    if($comprobacion >= 1 && $comprobacion != NULL)
    {
        foreach($comprobacion as $prev)
        {
            $id=$prev['idp'];
            $nombre =$prev['nombre'];
            $apellido=$prev['apellido'];
            $documentoB=$prev['documento'];
            $ingresoB=$prev['ingreso'];
            $salidaB=$prev['salida'];
            $estado=$prev['estado'];
        }      
        //echo 'usuario existe';
    }else{
        echo '<div class="container">
                <div class="alert alert-danger text-center" role="alert">
                    Personal NO registrado en sistema!
                </div>
            </div>';
    }

    if($entrada = 1 && $entrada != NULL)
    {
        /*validadicion de maracion de entrada*/
        foreach($entrada as $ent)
        {
            $fechaM=$ent['dia'];
            $entradaM=$ent['ingreso'];
            $salidaM=$ent['salida'];
            $id=$ent['idp'];
        }

        var_dump($fechaM);
        var_dump($fecha);
        var_dump($entradaM);
        var_dump($salidaM);

        if($fechaM == $fecha && $entradaM = 1){
            echo 'entrada marcada';
          $hsalida8=STRTOTIME('+8 hours',STRTOTIME($entradaM));
          $hsalida=date('H:i',$hsalida8);
          if($hora >= $salidaB || $hora >= $hsalida){
                $register = TimeOverController:: TimeRegister($id);
                
                if($register = 'ok')
                {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.repaceState(null,null,window.location.href);
                    }
                    </script>';
                    echo " 
                    <div class='container'>
                        <div class='alert alert-success text-center mt-5 rounded' role='alert'>
                             Asistencia Registrada "."['.$hora.']"."['.$msg.']"." ".STRTOUPPER($nombre)."
                         </div>
                    </div>'
                    <script>
                        setTimeout(function(){
                            window.location = 'index.php';
                        },1000);
                    </script>";
                }
          }else{
            echo '<div class="container">
                <div class="alert alert-danger text-center" role="alert">
                    8H no cumpletas
                </div>
            </div>';
          }
        }
    }
    else
    {
        echo '<div class="container">
                <div class="alert alert-danger text-center" role="alert">
                    No marco entrada
                </div>
            </div>';
        echo '';
    }
     
}
?>
<form action="" method="post">
    <div class="container mt-5">
        <header class="navbar-brand py-3">
            <div class="row">
                <div class="col text-center">
                    <img src="Layout/Img/logo.jpg" alt="" class="img border-0" width="100" height="90">
                <h1 class="px-2 h1"><!--Marcador de Asistencia Laboratorios Yermedic S.A.C--></h1>
                </div>
            </div>
        </header>
        <section>
            <div class="row">
                <div class="col">
                    <label for="dni" class="form-label text-dark  h1 text-uppercase my-3">Ingrese su Documento de Identidad:</label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" class="text-center fw-bold form-control border-1 text-secondary shadow-none" name="doc" value="" autofocus maxlength="8" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="form-control btn btn-success btn-lg text-uppercase p-5" name="entrada" id="entrada">Registrar Entrada<i class="fas fa-alarm-clock"></i></button>
                </div>
                <div class="col">
                    <button type="submit" class="form-control btn btn-danger btn-lg text-uppercase p-5" name="salida" id="salida">Registrar Salida<i class="fas fa-alarm-clock"></i></button>
                </div>
            </div>
        </section>
    </div>
</form>


<!-- /*Vista de Resultado */ -->

