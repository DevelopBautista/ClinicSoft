<?php

$sql = "select * ,dr.nombre_dr,p.nombres_paciente,p.cedula
        from tb_signosVitales as sv
        inner join tb_doctores as dr on sv.id_doctor=dr.id_doctor
        inner join tb_paciente as p on sv.id_paciente=p.id_paciente";





$query = $pdo->prepare($sql);
$query->execute();
$signo_datos = $query->fetchAll(PDO::FETCH_ASSOC);

?>