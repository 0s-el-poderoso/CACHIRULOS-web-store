<?php
session_start();

include 'connection.php';

$mensaje = null;
$rfc = $_POST['rfc'];
    
$dropprov = "call sp_dropProv('$rfc', @out);";
$select = "SELECT @out;";

mysqli_query($connection, $dropprov);
$result = mysqli_query($connection, $select);
$arr = mysqli_fetch_row($result);

if ($arr[0] == 5){
    $mensaje = "Acción completada. Se elimino el proveedor!";
}
else if ($arr[0] == 2){
    $mensaje = "Acción incompleta. Hay productos en stock";
}
else if ($arr[0] == 1){
    $mensaje = "Acción incompleta. No existe el proveedor?";
}
else if ($result == false){
    $mensaje = "Error en la ejecución de las ordenes.";
}
else{
    $mensaje = "Error inesperado.";
}

if ($mensaje != null){
    echo $mensaje;
}
?>