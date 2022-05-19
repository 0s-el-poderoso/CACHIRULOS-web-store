<?php
function getListasEmp(){
    include 'connection.php';

    $query = "SELECT id_prov, empresa, rfc FROM proveedor";
    $result = mysqli_query($connection, $query);

    $empresas = "<option value='0'>- Selecciona empresa -</option>";
    while($row = mysqli_fetch_assoc($result)){
        $empresas .= "<option value='$row[id_prov]'>$row[empresa]</option>";
    }

    mysqli_close($connection);

    return ($empresas);
}

echo getListasEmp();
?>