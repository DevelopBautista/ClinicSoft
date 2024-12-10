<?php
$id_doctor_get = $_GET['id'];

$sql = "select * from tb_doctores where id_doctor='$id_doctor_get' ";

$query = $pdo->prepare($sql);
$query->execute();
$doctores_datos = $query->fetchAll(PDO::FETCH_ASSOC);




foreach ($doctores_datos as $dato) {
    $codigo = $dato['codigo'];
    $nombre_dr = $dato['nombre_dr'];
    $cedula = $dato['cedula'];
    $tel = $dato['tel'];
    $direc = $dato['direc'];
    $email = $dato['email'];
    $espec = $dato['especialidad'];
    $fech_ingreso = $dato['fecha_ingreso'];

}



echo $id_doctor_get;