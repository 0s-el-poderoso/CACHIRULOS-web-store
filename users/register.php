<?php
    session_start();

    if (isset($_SESSION['adm'])){
        header('Location: ../admin.php');
    }
    else if (isset($_SESSION['usr'])){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrate</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body style="background: url(img/login.jpg); background-size: cover; background-attachment: fixed;">
    <div class="col-12 user-img">
    </div>

    <form class="formulario" action="actions/action_register.php" method="post">
        <center> <img src="img/agr.png" class="avatar" alt="Avatar Image" width="100" height="100"></center>
        <h1>Registrate</h1>

        <div class="contenedor">
            <div class="input-contenedor">
                <input type="text" id="user" name="user" placeholder="Nuevo Usuario" value=""  maxlength="20" autofocus required>
            </div>

            <div class="input-contenedor">
                <input type="password" id="pass" name="pass" placeholder="Nueva Contraseña" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="password" id="pass-again" placeholder="Repite tu Contraseña" value=""  maxlength="20"> <!-- To do -->
            </div>
        </div>

        <div class="contenedor">

            <div class="input-contenedor">
                <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Apellido Paterno" name="apaterno" id="apaterno" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Apellido Materno" name="amaterno" id="amaterno" value=""  maxlength="20">
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Edad" name="edad" id="edad" value=""  maxlength="2" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="RFC" name="rfc" id="rfc" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Correo Electronico" name="correo" id="correo" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <br>
                <label for="genero"
                    style="margin-left: 0.5rem; font-family: Helvetica, sans-serif; font-size: 1.3rem; color: #777777;">Seleccionar
                    el genero:</label>
                <input type="radio" style="margin-left: 1.5rem;" id="genero" name="genero" value="M" checked />Masculino
                <input type="radio" style="margin-left: 1rem;" id="genero" name="genero" value="F" />Femenino
                <br><br>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Calle" name="calle" id="calle" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Número" name="numero" id="numero" value=""  maxlength="7" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Colonia" name="colonia" id="colonia" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Municipio" name="municipio" id="municipio" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Estado" name="estado" id="estado" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Tel. Celuar" name="celular" id="celular" value=""  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <input type="text" placeholder="Tel. Fijo" name="fijo" id="fijo" value=""  maxlength="20" required>
            </div>

            <input type="submit" value="Registrate" class="button">

            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>
        </div>
    </form>

    <footer style="margin-bottom: 5rem;"></footer>

    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
</body>

</html>