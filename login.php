<?php
include_once "encabezado.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100"
    style="background-image: url('img/bg.jpg'); background-size: cover;">
    <form action="iniciar_sesion.php" method="post">
        <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="d-flex justify-content-center sign-avatar">
                <img src="img/usuario.jpg" alt="login-icon" style="height: 7rem" />
            </div>
            <div class="text-center fs-1 fw-bold">Iniciar sesión Rapido</div>
            <div class="input-group mt-4">
                <div class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                </div>
                <input class="form-control bg-light" type="text" name="usuario" placeholder="Usuario "
                    id="exampleInputEmail1" aria-describedby="emailHelp" required/>
            </div>
            <div class="input-group mt-1">
                <div class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                </div>
                <input class="form-control bg-light" type="password" placeholder="Contraseña" name="password"
                    id="exampleInputPassword1" required/>
            </div>
            <div class="d-flex justify-content-around mt-1">
                <div class="pt-1">
                    <a href="#" class="text-decoration-none text-info fw-semibold fst-italic"
                        style="font-size: 0.9rem">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
            <div class="pb-2">
                <button type="submit" name="ingresar"
                    class="btn btn-primary w-100 font-weight-bold mt-2">Ingresar</button>
            </div>
            <div class="d-flex gap-1 justify-content-center mt-1">
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>