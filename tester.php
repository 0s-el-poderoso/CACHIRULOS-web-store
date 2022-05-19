<?php
session_start();

if (isset($_SESSION['usr'])){
    echo "Existe sesión Usuario <br>";
}
else if (isset($_SESSION['prv'])){
    echo "Existe sesión Proveedor <br>";
}
else if (isset($_SESSION['adm'])){
    echo "Existe sesión Administrador <br>";
}
else{
    echo "No existe sesión <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <br><br><br><br>
    <center><table class="col-md-10 table table-default table-borderlass table-active">
        <thead id="head">
            <tr>
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Fecha</th>
                <th>Compra ($MNX)</th>
            </tr>
        </thead>
        <tbody id="contenido_tabla"></tbody>
        <tfoot id="foot">
            <?php include 'actions/connection.php';
            
            $query = "SELECT t1.id as id, t1.fecha as fecha, t1.total as total, 
                t1.id_producto, t2.id_producto, t2.nombre as nombre FROM compras t1 JOIN producto t2 
                WHERE t1.id_producto = t2.id_producto ";
            $result = mysqli_query($connection, $query);
            $sum = 0;
            while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nombre']."</td>
                        <td>".$row['fecha']."</td>
                        <td>".$row['total']."</td>
                    </tr>";
                    $sum = $sum + $row['total'];
                }
            ?>
        </tfoot>
    </table></center>
</body>
</html>