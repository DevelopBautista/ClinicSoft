<?php

include('../../config.php');
session_start();

$idProducto = $_POST['idProducto'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descrip = $_POST['descrip'];
$stock = $_POST['stock'];
$stock_min = $_POST['stock_min'];
$stock_max = $_POST['stock_max'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fechIngreso = $_POST['fechIngreso'];
$idCateg = $_POST['idCateg'];
$img_text = $_POST['img_text'];
$idUsuario = $_POST['idUsuario'];





if ($_FILES['img']['name'] != null) {
    // codigo para almacenar las imagenes en la carpeta almacen/img_productos
    $nombreArchivo = date("Y-m-d-h-i-s");
    $img_text = $nombreArchivo . "__" . $_FILES['img']['name'];
    $location = "../../../almacen/img_productos/" . $img_text;
    move_uploaded_file($_FILES['img']['tmp_name'], $location);
} else {
    echo "no hay imagen";
}



$consulta = "update tb_almacen 
                set 
                nombre=:nombre,
                descripcion=:descripcion,
                stock=:stock,
                stock_minimo=:stock_minimo,
                stock_minimo=:stock_minimo,
                precio_compra=:precio_compra,
                precio_venta=:precio_venta,
                fecha_ingreso=:fecha_ingreso,
                img=:img,
                id_categ=:id_categ,
                id_us=:id_us,
                fech_actualizacion=:fech_actualizacion 
            where id_producto=:id_producto";

$query = $pdo->prepare($consulta);

$query->bindParam('nombre', $nombre);
$query->bindParam('descripcion', $descrip);
$query->bindParam('stock', $stock);
$query->bindParam('stock_minimo', $stock_min);
$query->bindParam('stock_minimo', $stock_max);
$query->bindParam('precio_compra', $precio_compra);
$query->bindParam('precio_venta', $precio_venta);
$query->bindParam('fecha_ingreso', $fechIngreso);
$query->bindParam('fech_actualizacion', $fech_hora);
$query->bindParam('img', $img_text);
$query->bindParam('id_us', $idUsuario);
$query->bindParam('id_categ', $idCateg);
$query->bindParam('id_producto', $idProducto);


//para ver los errores en tiempo de ejecucion.
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($query->execute()) {
    $_SESSION['mensaje'] = "El producto se ha actualizado con exito.";
    $_SESSION['icono'] = "success";
    header('location: ' . $url . '/almacen/listar.php');
} else {
    $_SESSION['mensaje'] = "Problema con el registro.";
    $_SESSION['icono'] = "error";
    header('location: ' . $url . '/almacen/update.php?id=' . $idProducto);
}

?>