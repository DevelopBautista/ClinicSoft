<?php

$sql = "select dr.codigo,dr.nombre_dr,dr.especialidad,dr.fecha_ingreso
        from tb_doctores as dr ";

$query = $pdo->prepare($sql);
$query->execute();
$doctores_datos = $query->fetchAll(PDO::FETCH_ASSOC);



?>