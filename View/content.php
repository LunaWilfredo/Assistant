<?php 
if(isset($_POST['dni']) && !empty($_POST['dni'])){
    $register = TimeOverController:: TimeRegister();

    if($register == 'ok'){
        echo '<div class="alert alert-success" id="success-alert">
        <strong>Success! </strong> Product have added to your wishlist.
      </div>';
    }
}
?>
<form action="" method="post">
    <div class="container-fluid w-100 min-vh-100 justify-content-center align-items-center d-flex flex-column">
        <header class="navbar-brand py-3">
            <div class="container-fluid justify-content-center d-flex flex-wrap align-items-center">
                <img src="Layout/Img/logo.jpg" alt="" class="img-thumbnail img-fluid border-0" width="60" height="50">
                <h1 class="px-2 h1">Asistencia Laboratorios Yermedic S.A.C</h1>
            </div>
        </header>
        <section>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-auto">
                    <div class="d-flex flex-wrap justify-content-center align-items-center">
                        <div class="p-5">
                            <img src="Layout/Img/undraw_time_management_re_tk5w.svg" alt="" class="img-fluid">
                        </div>
                        <div class="">
                            <div class="">
                                <label for="dni" class="form-label text-dark  h1 text-uppercase my-3">Ingrese su Doc.Identidad:</label>
                            </div>
                            <div class="">
                                <input type="text" class="text-center fw-bold form-control border-1 text-secondary shadow-none" name="dni" value="" autofocus maxlength="8" required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="form-control btn btn-danger btn-lg text-uppercase" id="">Registrar <i class="fas fa-alarm-clock"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

