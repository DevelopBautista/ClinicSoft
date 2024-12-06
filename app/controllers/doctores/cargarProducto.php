<?php
$id_product_get = $_GET['id'];

$sql = "select *,cat.nombreCateg,us.email,us.id_usuario 
        from tb_almacen as a 
        inner join tb_categorias as cat on a.id_categ=cat.id_categ
        inner join tb_usuarios as us on a.id_us=us.id_usuario
        where id_producto='$id_product_get'";

$query = $pdo->prepare($sql);
$query->execute();
$producto_datos = $query->fetchAll(PDO::FETCH_ASSOC);



foreach ($producto_datos as $dato) {
    $codigo = $dato['codigo'];
    $nombre = $dato['nombre'];
    $descrip = $dato['descripcion'];
    $nomCateg = $dato['nombreCateg'];
    $stock = $dato['stock'];
    $stock_min = $dato['stock_minimo'];
    $stock_max = $dato['stock_maximo'];
    $precio_compra = $dato['precio_compra'];
    $precio_venta = $dato['precio_venta'];
    $fechIngreso = $dato['fecha_ingreso'];
    $seccion = $dato['email'];
    $img = $dato['img'];
    $idUser = $dato['id_usuario'];
}

?>