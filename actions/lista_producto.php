<?php
function getProductos(){
    include 'connection.php';

    $id = $_POST['id'];
    $query = "SELECT * FROM producto WHERE id_proveedor = '$id'";
    $result = mysqli_query($connection, $query);

    $productos = "<option data-cant='0' data-precio='0' value=''>- Selecciona producto -</option>";
    while($row = mysqli_fetch_assoc($result)){
        $select = "SELECT cantidad FROM stock WHERE id_producto = '$row[id_producto]'";
        $cant = mysqli_query($connection, $select);
        $array = mysqli_fetch_row($cant);
        $productos .= "<option data-cant='$array[0]' data-precio='$row[precio]' value='$row[id_producto]'>$row[nombre]</option>";
    }

    mysqli_close($connection);

    return ($productos);
}

echo getProductos();
?>