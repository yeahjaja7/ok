<!DOCTYPE html>
<html>
<?php require_once 'assets/librerias/head_index.php';  ?>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
            <br><br><br>
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">BIENVENIDO</h4>
                                    </div>
                                    <form class="user">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" placeholder="ingresa tu correo electronico" name="correo_u_i" id="correo_u_i" required  minlength="18" maxlength="60" style="text-transform:lowercase;"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" placeholder="ingresa tu contraseña" name="password1" id="password1" required  minlength="8" maxlength="16"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="ver"  onChange="hideOrShowPassword()"><label class="form-check-label custom-control-label" for="formCheck-1">Mostrar contraseña</label></div>
                                            </div>
                                        </div><button class="btn btn-success d-block btn-user w-100" id="btnLogin" type="button">INICIA AHORA</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="controller/login/logincontroller.js"></script>

<?php 



require_once 'assets/librerias/footer_index.php';  

?>

</body>
</html>