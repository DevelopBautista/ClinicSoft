<?php
include('../../config.php');
session_start();

$id_get=$_POST['id_get'];


$sql = "delete from  tb_signosVitales where id_record=:id_record";

$query = $pdo->prepare($sql);

try {
    $query->bindParam('id_record', $id_get);

    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $query->execute();
    $_SESSION['mensaje'] = "El record fue eliminado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/records/listar.php');


} catch (Exception $e) {
    echo $e->getMessage();
}





