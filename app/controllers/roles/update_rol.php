<?php

$id_rol_get = $_GET['id'];

$sql = "select * from tb_roles where id_rol='$id_rol_get'";

$query = $pdo->prepare($sql);
//para ver los errores en tiempo de ejecucion.
error_reporting(E_ALL);
ini_set('display_errors', '1');

$query->execute();

$rol_datos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($rol_datos as $datos) {
    $rol = $datos['rol'];
}

?>