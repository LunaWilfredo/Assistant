<?php 

if(isset($_POST['doc']) && !empty($_POST['doc'])){

    $documento = $_POST['doc']; 
    date_default_timezone_set('America/Lima');
    $hora=date('H:i',time());
    $comprobacion = TimeOverController::horario($documento);

    if($comprobacion >= 1 && $comprobacion != NULL){
        foreach($comprobacion as $key =>$prev){
            $nombre =$prev['nombre'];
            $documentoB=$prev['documento'];
            $ingresoB=$prev['ingreso'];
            $salidaB=$prev['salida'];
            $estado=$prev['estado'];
        }

        if($documento == $documentoB){
            echo ' <div class="container">
                    <div class="alert alert-success text-center mt-5 rounded" role="alert">
                        Asistencia Registrada '.'['.$hora.']'." ".STRTOUPPER($nombre).'
                    </div>
                </div>' ;
        }
    }else{
        echo '
        <div class="container">
            <div class="alert alert-danger text-center" role="alert">
                Personal NO registrado en sistema!
            </div>
        </div>';

    }

   // $register = TimeOverController:: TimeRegister();

   // if($register = 'ok'){
      /*  echo '<script>
                    if(window.history.replaceState){
                        window.history.repaceState(null,null,window.location.href);
                    }
                </script>';
        echo " <div class='alert alert-success'>Registro Exitoso</div>
            <script>
                setTimeout(function(){
                    window.location = 'index.php';
                },1000);
            </script>
        ";*/
    //}
}
?>
<form action="" method="post">
    <div class="container-fluid w-100 mt-5 p-5 justify-content-center align-items-center d-flex flex-column">
        <header class="navbar-brand py-3">
            <div class="container-fluid justify-content-center d-flex flex-wrap align-items-center">
                <img src="Layout/Img/logo.jpg" alt="" class="img-thumbnail img-fluid border-0" width="60" height="50">
                <h1 class="px-2 h1"><!--Marcador de Asistencia Laboratorios Yermedic S.A.C--></h1>
            </div>
        </header>
        <section>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-auto">
                    <div class="d-flex flex-wrap justify-content-center align-items-center">
                        <!-- <div class="p-5">
                            <img src="Layout/Img/undraw_time_management_re_tk5w.svg" alt="" class="img-fluid">
                        </div> -->
                        <div class="">
                            <div class="">
                                <label for="dni" class="form-label text-dark  h1 text-uppercase my-3">Ingrese su Doc.Identidad:</label>
                            </div>
                            <div class="">
                                <input type="text" class="text-center fw-bold form-control border-1 text-secondary shadow-none" name="doc" value="" autofocus maxlength="8" required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="form-control btn btn-success btn-lg text-uppercase" id="">Registrar <i class="fas fa-alarm-clock"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>


<!-- /*Vista de Resultado */ -->

