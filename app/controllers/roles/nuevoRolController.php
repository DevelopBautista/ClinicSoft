<?php
include('../../config.php');
session_start();

$rol = $_POST['rol'];


$query = $pdo->prepare("insert into tb_roles (rol,fech_creacion)
    values(:rol,:fech_creacion)");

$query->bindParam('rol', $rol);
$query->bindParam('fech_creacion', $fech_hora);


if ($query->execute()) {

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $_SESSION['mensaje'] = "El rol se ha registrado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/roles/listar.php');
} else {
    $_SESSION['mensaje'] = "Problema con el registro";
    $_SESSION['icono'] = "error";
    header('location: ' . $url . '/roles/nuevo.php');
}

?>