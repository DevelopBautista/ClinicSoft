<?php
include('../../config.php');
session_start();

$rol = $_POST['rol'];
$id = $_POST['id'];



$consulta = "update tb_roles
                    set rol=:rol,fech_actualizacion=:fech_actualizacion 
                    where id_rol=:id_rol";

$query = $pdo->prepare($consulta);

$query->bindParam('rol', $rol);
$query->bindParam('fech_actualizacion', $fech_hora);
$query->bindParam('id_rol', $id);

//para ver los errores en tiempo de ejecucion.
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($query->execute()) {
    $_SESSION['mensaje'] = "El rol se ha actualizado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/roles/listar.php');
} else {
    $_SESSION['mensaje'] = "Problema con el registro.";
    $_SESSION['icono'] = "error";
    header('location: ' . $url . '/roles/update.php?id=' . $id);
}










?>