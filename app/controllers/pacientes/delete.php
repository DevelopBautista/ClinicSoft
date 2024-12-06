<?php

include('../../config.php');
session_start();

$id = $_POST['id'];

try {
    $consulta = "delete from  tb_paciente where id_paciente=:id_paciente";

    $query = $pdo->prepare($consulta);

    $query->bindParam('id_paciente', $id);

    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if ($query->execute()) {
        $_SESSION['mensaje'] = "El paciente fue eliminado con exito.";
        $_SESSION['icono'] = "success";
        header('location: ' . $url . '/pacientes/listarPacientes.php');
    } else {
        $_SESSION['mensaje'] = "Error eliminando paciente.";
        $_SESSION['icono'] = "error";
        header('location: ' . $url . '/pacientes/listarPacientes.php');
    }



} catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
}

?>