<?php
include('../../config.php');
session_start();

$tel = $_POST['tel'];
$direc = $_POST['direc'];
$email = $_POST['email'];
$id_doctor = $_POST['id_doctor'];




$consulta = "update tb_doctores
                            set tel=:tel,
                            direc=:direc,
                            email=:email,
                            fecha_actualizar=:fecha_actualizar 
                            where id_doctor=:id_doctor";

$query = $pdo->prepare($consulta);

$query->bindParam('tel', $tel);
$query->bindParam('direc', $direc);
$query->bindParam('email', $email);
$query->bindParam('fecha_actualizar', $fech_hora);
$query->bindParam('id_doctor', $id_doctor);

try {
    //para ver los errores en tiempo de ejecucion.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if ($query->execute()) {
        $_SESSION['mensaje'] = "El doctor se ha actualizado con exito.";
        $_SESSION['icono'] = "success";
        header('location: ' . $url . '/doctores/listarDoctores.php');

    } else {
        $_SESSION['mensaje'] = "Error en algun campo.";
        $_SESSION['icono'] = "error";
        header('location: ' . $url . '/doctores/updateDoctor.php?id=' . $id_doctor);
    }


} catch (Exception $e) {
    echo "<div>" . $e->getMessage() . "</div>";
}



?>