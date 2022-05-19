<?php
session_start();
session_destroy();
session_start();

$_SESSION['location'] = "../../index.php";
$_SESSION['mensaje'] = "Cerrando sesión...";
header('Location: process.php');
?>