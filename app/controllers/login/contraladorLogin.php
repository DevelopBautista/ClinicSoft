<?php
session_start();
include('../../config.php');//importando la conexion

$email = $_POST['email'];
$usuarioPass = $_POST['password'];

$contador = 0;
$sql = "select * from tb_usuarios where email='$email'";

$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

try {
    foreach ($usuarios as $usuario) {
        $contador += 1;
        $email_tb = $usuario['email'];
        $usuarioPass_tb = $usuario['password'];
        $nombres_tb = $usuario['nombres'];
    }
    if (($contador != 0) && password_verify($usuarioPass, $usuarioPass_tb)) {
        $_SESSION['email'] = $email;
        header('location:' . $url . '/index.php');



    } else {
        $_SESSION['mensaje'] = "Datos incorrecto.";
        header('location:' . $url . '/login/login.php');
    }

    if ($email == "" || $usuarioPass == "") {
        $_SESSION['mensaje'] = "Debe ingresar usuario O clave.";
        header('location:' . $url . '/login/login.php');
    }

} catch (Exception $e) {
    echo "<div>" . $e->getMessage() . "</div>";
}

?>