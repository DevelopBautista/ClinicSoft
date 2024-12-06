<?php
include('../../config.php');
session_start();


$codigo = $_POST['codigo'];
$nombres_dr = $_POST['nombres_dr'];
$ced = $_POST['ced'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$espec = $_POST['espec'];
$direc = $_POST['direc'];
$fech_ingreso = $_POST['fech_ingreso'];
$rol = $_POST['rol'];


$sql = "insert into tb_doctores(codigo, nombre_dr, 
                                cedula, tel, direc, email, 
                                especialidad, fecha_ingreso, 
                                id_rol, 
                                fecha_creacion) 
                                
                        VALUES (:codigo,:nombre_dr,
                                :cedula, :tel, :direc, :email, 
                                :especialidad, :fecha_ingreso, 
                                :id_rol, 
                                :fecha_creacion)";



try {
    $query = $pdo->prepare($sql);

    $query->bindParam('codigo', $codigo);
    $query->bindParam('nombre_dr', $nombres_dr);
    $query->bindParam('cedula', $ced);
    $query->bindParam('tel', $tel);
    $query->bindParam('direc', $direc);
    $query->bindParam('email', $email);
    $query->bindParam('especialidad', $espec);
    $query->bindParam('fecha_ingreso', $fech_ingreso);
    $query->bindParam('id_rol', $rol);
    $query->bindParam('fecha_creacion', $fech_hora);
    
    if ($query->execute()) {
        $_SESSION['mensaje'] = "El doctor se ha registrado con exito.";
        $_SESSION['icono'] = "success";
        header('location: ' . $url . '/doctores/listarDoctores.php');
    } else {
        $_SESSION['mensaje'] = "Hubo un error al registrar.";
        $_SESSION['icono'] = "error";
        header('location: ' . $url . '/doctores/nuevo.php');
    }
} catch (Exception $e) {
    echo "<div>" . $e->getMessage() . "</div>";
}



?>