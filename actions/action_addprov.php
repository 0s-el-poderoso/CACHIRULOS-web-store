<?php
session_start();

include 'connection.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$emp = $_POST['nombre'];
$rfc = $_POST['rfc'];
$correo = $_POST['correo'];
$calle = $_POST['calle'];
$num = $_POST['numero'];
$col = $_POST['colonia'];
$muni = $_POST['municipio'];
$est = $_POST['estado'];
$tel_c = $_POST['celular'];
$tel_f = $_POST['fijo'];

$_SESSION['location'] = "../altasprov.php";

$addprov = "CALL sp_addProv('$user', '$pass', '$rfc', '$emp', '$correo', '$tel_c', '$tel_f', '$calle', '$num', '$col', '$muni', '$est', @out)";
$select = "SELECT @out";
    
mysqli_query($connection, $addprov);
$result = mysqli_query($connection, $select);
$arr = mysqli_fetch_row($result);

//echo $arr[0];
    
if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Proveedor registrado satisfactoriamente.";
}
else if ($arr[0] == 3){
    $_SESSION['mensaje'] = "Error. Numero telefónico celular existente.";
}
else if ($arr[0] == 2){
    $_SESSION['mensaje'] = "Error. Numero telefónico fijo existente.";
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Error. RFC existente.";
}
else{
    $_SESSION['mensaje'] = "Error inesperado!!!";
}

header('Location: process.php');

mysqli_close($connection);
?>