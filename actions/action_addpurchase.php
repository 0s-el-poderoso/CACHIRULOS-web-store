<?php
session_start();

include 'connection.php';

$id_prod = $_POST['id_prod'];
$cant = $_POST['cant'];
$tot = $_POST['tot'];
$user = $_SESSION['usr'];

$select = "SELECT id_usuario FROM usuario WHERE usuario = '$user'";
$result = mysqli_query($connection, $select);
$id_user = $result->fetch_row();
$id_u = $id_user[0];

/*echo $id_prod." : id prod\n";
echo $cant." : cant\n";
echo $tot." : tot\n";
echo $user." : usuario\n";
echo $id_u." : id_usuario\n";*/

$query = "CALL sp_addCompra('$cant', '$tot', '$id_prod', '$id_u', @out);";
$select = "SELECT @out";

mysqli_query($connection, $query);
$result = mysqli_query($connection, $select);
$arr = $result->fetch_row();

//echo "result = ".$arr[0]."\n";

$mensaje = "Error inesperado. No se realizo el proceso";

if ($arr[0] == 5){
    $mensaje = "Compra realizada correctamente.";
}
else if ($arr[0] == 3){
    $mensaje = "Error. No existen suficientes productos en stock";
}
else if ($arr[0] == 2){
    $mensaje = "Error. No existe el producto seleccionado.";
}
else if ($arr[0] == 1){
    $mensaje = "Error. No existe el usuario!!!.";
}
else if ($arr[0] == 0){
    $mensaje = "Error. No en if.";
}
else{
    $mensaje = "Error inesperado.";
}

mysqli_close($connection);

echo $mensaje;
?>