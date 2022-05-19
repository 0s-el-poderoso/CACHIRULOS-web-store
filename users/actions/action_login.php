<?php
session_destroy();
session_start();

include 'connection.php';

$user = $_POST['user'];
$pass = $_POST['pass'];


$query = "Select usuario, pass, tipo_usuario from usuario where usuario = '$user' and pass = '$pass'";

$result = mysqli_query($connection, $query);

$row = mysqli_affected_rows($connection);

$fila = $result->fetch_row();

echo $fila[2];

if ($result == true and $row == 1){
    
    if ($fila[2] == 2){
        $_SESSION['adm'] = $user;
        $_SESSION['prv'] = null;
        $_SESSION['usr'] = null;
        $_SESSION['location'] = "../../admin.php";
        $_SESSION['mensaje'] = "Bienvenido administrador '".$user."'";
        header('Location: process.php');
    }
    else if ($fila[2] == 1){
        $_SESSION['adm'] = null;
        $_SESSION['prv'] = $user;
        $_SESSION['usr'] = null;
        $_SESSION['location'] = "../../provider.php";
        $_SESSION['mensaje'] = "Bienvenido proveedor '".$user."'";
        header('Location: process.php');
    }
    else if ($fila[2] == 0){
        $_SESSION['adm'] = null;
        $_SESSION['prv'] = null;
        $_SESSION['usr'] = $user;
        $_SESSION['location'] = "../../user_service.php";
        $_SESSION['mensaje'] = "Bienvenido usuario '".$user."'";
        header('Location: process.php');
    }
}
else
{
    $_SESSION['adm'] = null;
    $_SESSION['prv'] = null;
    $_SESSION['usr'] = null;
    $_SESSION['location'] = "../login.php";
    $_SESSION['mensaje'] = "Los datos no coinciden o no están registrados. <br> Por favor, intenta de nuevo...";
    header('Location: process.php');
}

mysqli_close($connection);
?>