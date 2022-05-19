<?php
session_start();

include 'connection.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$empresa = $_POST['empresa'];
$precio = $_POST['precio'];

echo $codigo." - ".$nombre." - ".$desc." - ".$empresa." - ".$precio." - ";

$addprod = "CALL sp_addProd('$empresa', '$codigo', '$nombre', '$desc', '$precio', @out)";
$select = "SELECT @out";

mysqli_query($connection, $addprod);
$result = mysqli_query($connection, $select);
$arr = $result->fetch_row();

echo "<br>".$arr[0];

$_SESSION['mensaje'] = "Error inesperado!";

$_SESSION['location'] = "../altasproduc.php";

if ($arr[0] == 5){
    $_SESSION['mensaje'] = "Producto registrado correctamente.";
}
else if ($arr[0] == 2){
    $_SESSION['mensaje'] = "Ya existe el producto con el codigo '".$codigo."'.";
}
else if ($arr[0] == 1){
    $_SESSION['mensaje'] = "Error. No existe proveedor!!!.";
}

header('Location: process.php');

mysqli_close($connection);
?>