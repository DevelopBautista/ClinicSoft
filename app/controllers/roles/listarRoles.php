<?php

$sql = "select * from tb_roles";

$query = $pdo->prepare($sql);
$query->execute();
$roles_datos = $query->fetchAll(PDO::FETCH_ASSOC);




?>