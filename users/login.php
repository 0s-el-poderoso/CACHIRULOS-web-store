<?php
    session_start();

    if (isset($_SESSION['adm'])){
        header('Location: ../admin.php');
    }
    else if (isset($_SESSION['usr'])){
        header('Location: ../index.php');
    }
    else if (isset($_SESSION['prv'])){
        header('Location: ../provider.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background: url(img/login.jpg); background-size: cover; background-attachment: fixed;">

    <form class="formulario" action="actions/action_login.php" method="post">
        <center> <img src="img/user.png" class="avatar" alt="Avatar Image" width="100" height="100"></center>
        <h1>Iniciar Sesión</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <input type="text" id="user" name="user" placeholder="Usuario">
            </div>

            <div class="input-contenedor">
                <input type="password" id="pass" name="pass" placeholder="Contraseña">
            </div>

            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="register.php">Registrarte</a></p>
        </div>
    </form>
</body>

</html>