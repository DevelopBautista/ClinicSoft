<?php
include('../../config.php');
session_start();

$id = $_POST['idProd'];

$consulta = "delete from  tb_almacen where id_producto=:id_producto";

$query = $pdo->prepare($consulta);

$query->bindParam('id_producto', $id);


if ($query->execute()) {
    $_SESSION['mensaje'] = "El producto fue eliminado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/almacen/listar.php');

} else {
    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}






?>