<?php
    $connection = mysqli_connect("localhost", "root", "", "tiendita");

    $url_users = "";

    if (mysqli_connect_errno()){
        echo"<script type='text/javascript'> alert('Fallo en la conexión a la base de datos'); </script>".mysqli_connect_error();
    }
?>