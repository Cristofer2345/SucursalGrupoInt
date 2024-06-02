<?php
function getSucursal(){
    $db = new PDO('mysql:host=localhost;dbname=ddclinicadental;charset=utf8', 'root', '');
    $sentencia = $db->query("select * from sucursal");
    $sucursal = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $sucursal;
}
?>