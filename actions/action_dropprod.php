<?php
session_start();

include 'connection.php';

$prod = $_POST['producto'];
$empresa = $_POST['empresa'];

//echo $prod." prod  -  ".$empresa." empr"; 

$dropprod = "CALL sp_dropProd('$empresa', '$prod', @out)";
$select = "SELECT @out ";

mysqli_query($connection, $dropprod);
$result = mysqli_query($connection, $select);
$arr = mysqli_fetch_row($result);

echo $arr[0];

$_SESSION['location'] = "../bajasproduc.php";

if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Acción completada. Se elimino el producto!";
}
else if ($arr[0] == 2){
    $_SESSION['mensaje'] = "Acción incompleta. Hay productos en stock!!!";
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Acción incompleta. No coinciden los parametros seleccionados o no existe el producto!!!";
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