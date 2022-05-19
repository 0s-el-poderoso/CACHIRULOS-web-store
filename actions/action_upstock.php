<?php
session_start();

include 'connection.php';

$cant = $_POST['cantidad'];
$producto = $_POST['producto'];
$prov = $_POST['empresa'];

//echo $cant."<br>";
//echo $producto."<br>";
//echo $prov."<br>";

$code = "SELECT cantidad FROM stock where id_producto = '$producto'";
$query = mysqli_query($connection, $code);
$get = mysqli_fetch_row($query);

$cant += $get[0];
mysqli_free_result($query);

$id = "SELECT empresa FROM proveedor where id_prov = '$prov'";
$query = mysqli_query($connection, $id);
$nom_prov = mysqli_fetch_row($query);
$nom = $nom_prov[0];

//echo $nom."<br>";

mysqli_free_result($query);
$stock = "CALL sp_upStock('$cant', '$producto', '$nom', @out)";
$select = "SELECT @out";

mysqli_query($connection, $stock);
$result = mysqli_query($connection, $select);
$arr = mysqli_fetch_row($result);

//echo $arr[0];

mysqli_free_result($result);
$_SESSION['location'] = "../stock.php";

if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Stock agragado correctamente.";
}
else if ($arr[0] == 2){
    $_SESSION['mensaje'] = "Error. No existe el producto";
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Error. No existe proveedor.";
}
else if ($arr[0] == 0){
    $_SESSION['mensaje'] = "Error. No existe el producto";
}
else{
    $_SESSION['mensaje'] = "Error inesperado.";
}

header('Location: process.php?');

mysqli_close($connection);
?>