<?php
include('../../config.php');
session_start();

$id = $_POST['id'];

$consulta = "delete from  tb_pacientes where id_paciente=:id_paciente";

$query = $pdo->prepare($consulta);

try {
    $query->bindParam('id_usuario', $id);

    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $query->execute();
    $_SESSION['mensaje'] = "El usuario fue eliminado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/usuarios/listarUsuarios.php');


} catch (Exception $e) {
    echo $e->getMessage();
}


?>