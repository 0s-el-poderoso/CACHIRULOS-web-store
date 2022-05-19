<?php
session_start();

include 'connection.php';

$rfc = $_POST['rfc'];
    
$dropuser = "call sp_dropUser('$rfc', @out)";
$select = "SELECT @out";

mysqli_query($connection, $dropuser);
$result = mysqli_query($connection, $select);
$arr = mysqli_fetch_row($result);

//echo $arr[0];

$_SESSION['location'] = "../bajas_usuarios.php";

if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Acción completada. Se elimino el usuario!";
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Acción incompleta. No existe el RFC ingresado!!!";
}
else if ($arr[0] == 0){
    $_SESSION['mensaje'] = "Error. No en if";
}
else if ($result == false){
    $_SESSION['mensaje'] = "Error en la ejecución de las ordenes.";
}
else{
    $_SESSION['mensaje'] = "Error inesperado.";
}

header('Location: process.php');

mysqli_close($connection);
?>