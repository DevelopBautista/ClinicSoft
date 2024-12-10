<?php
include('../../config.php');
session_start();

$id_doctor = $_POST['id_doctor'];

$consulta = "delete from  tb_doctores where id_doctor=:id_doctor";

$query = $pdo->prepare($consulta);

try {
    $query->bindParam('id_doctor', $id_doctor);
    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if ($query->execute()) {
        $_SESSION['mensaje'] = "El doctor fue eliminado con exito.";
        $_SESSION['icono'] = "success";
        header('location: ' . $url . '/doctores/listarDoctores.php');

    } else {
        $_SESSION['mensaje'] = "Error eliminando doctor.";
        $_SESSION['icono'] = "error";
        header('location: ' . $url . '/doctores/listarDoctores.php');

    }

} catch (Exception $e) {
    echo "<div>" . $e->getMessage() . "</div>";
}

?>