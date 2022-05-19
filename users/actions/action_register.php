<?php
session_start();
    
include 'connection.php';

if (isset($_SESSION['adm'])){
    header('Location: ../../admin.php');
}
else if (isset($_SESSION['usr'])){
    header('Location: ../../index.php');
}
else if (isset($_SESSION['prv'])){
    header('Location: ../../provider.php');
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$nom = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$edad = $_POST['edad'];
$rfc = $_POST['rfc'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$calle = $_POST['calle'];
$num = $_POST['numero'];
$col = $_POST['colonia'];
$muni = $_POST['municipio'];
$est = $_POST['estado'];
$tel_c = $_POST['celular'];
$tel_f = $_POST['fijo'];

$addUser = "CALL sp_addUser('$user','$pass', 0, '$rfc', '$nom', '$apaterno', '$amaterno', '$edad', '$genero', '$correo', '$tel_c', '$tel_f', '$num', '$calle', '$col', '$muni', '$est', @out)";

mysqli_query($connection, $addUser);

$query = "SELECT @out";

$result = mysqli_query($connection, $query);
$arr = mysqli_fetch_row($result);

$_SESSION['location'] = "../login.php";

if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Registro completado!";
    header('Location: process.php');
}
else if ($arr[0] == 4){
    $_SESSION['mensaje'] = "Acción incompleta. No se puede registrar numero telefónico de fijo, ya existe uno";
    header('Location: process.php');
}
else if ($arr[0] == 3){
    $_SESSION['mensaje'] = "Acción incompleta. No se puede registrar numero telefónico celular, ya existe uno";
    header('Location: process.php');
}
else if ($arr[0] == 2){
    $_SESSION['mensaje'] = "Acción incompleta. No se puede registrar el usuario con un rfc existente";
    header('Location: process.php');
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Acción incompleta. Ya existe un usuario con ese nickname";
    header('Location: process.php');
}
else if ($arr[0] == 0){
    $_SESSION['mensaje'] = "Error. No en IF";
    header('Location: process.php');
}
else if ($result == false){
    $_SESSION['mensaje'] = "Error en la ejecución de las ordenes.";
    header('Location: process.php');
}
else{
    $_SESSION['mensaje'] = "Error inesperado.";
    header('Location: process.php');
}

mysqli_close($connection);
?>