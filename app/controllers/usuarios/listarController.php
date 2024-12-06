<?php

$sql = "select us.id_usuario,us.cedula,us.nombres,us.email ,r.rol
        from tb_usuarios as us 
        inner join tb_roles as r ON us.id_rol=r.id_rol";

$query = $pdo->prepare($sql);
$query->execute();
$usuarios_datos = $query->fetchAll(PDO::FETCH_ASSOC);




?>