<?php

include('../../config.php');
session_start();

$sql = "select c.id_cita,us.nombres,
               p.nombres_paciente,c.tipo_cita,
               c.fecha_cita,c.hora_cita,c.title,c.start,
               c.end,c.color 
        from tb_citas as c 
        inner join tb_usuarios as us on c.id_usuario=us.id_usuario 
        inner join tb_paciente as p on c.id_paciente=p.id_paciente ";


$query = $pdo->prepare($sql);


if ($query->execute()) {
        $r = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($r);
} else {

}

