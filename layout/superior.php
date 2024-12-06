<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Soft</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/fullcalendar/main.css">
    <!-- jQuery -->
    <script src="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- <script>
            Swal.fire({
                title: "Bienvenidos al sistema",
                text: "",
                icon: "success"
            });
        </script> -->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"></a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <i class="fa-solid fa-door-open"></i>
                    <a href="<?php echo $url; ?>/app/controllers/login/cerrar_seccion.php" class="btn ">Cerrar
                        Sesión
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $url; ?>" class="brand-link">
                <img src="<?php echo $url; ?>/public/img/logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Clinic Soft</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $url ?>/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <h6 style="color:#c2c7d0;" class="d-block"><?php echo $nombres_tb ?></h6>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- menu_usuarios-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-users"></i>
                                <p>
                                    Pacientes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/pacientes/listarPacientes.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de pacientess</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/pacientes/nuevoPaciente.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nuevo paciente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/records/listar.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Record pacientes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!--menu_Dr-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-user-doctor"></i>
                                <p>
                                    Doctores
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/doctores/listarDoctores.php" class="nav-link">
                                        <i class="far fa-circle text-yellow nav-icon"></i>
                                        <p>Listado de Doctores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/doctores/nuevoDoctor.php" class="nav-link">
                                        <i class="far fa-circle text-yellow nav-icon"></i>
                                        <p>Nuevo Doctor</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!--menu_roles-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-address-card"></i>
                                <p>
                                    Roles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/roles/listar.php" class="nav-link">
                                        <i class="far fa-circle text-blue nav-icon"></i>
                                        <p>Listado de Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/roles/nuevo.php" class="nav-link">
                                        <i class="far fa-circle text-blue nav-icon"></i>
                                        <p>Nuevo Rol</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!--Menu_Consultas-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-calendar-check"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/consultas/nuevaConsulta.php" class="nav-link">
                                        <i class="far fa-circle text-green nav-icon"></i>
                                        <p>Consultas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/consultas/consultas.php" class="nav-link">
                                        <i class="far fa-circle text-green nav-icon"></i>
                                        <p>Citas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!--menu_Personal-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-users-gear"></i>
                                <p>
                                    Personal
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/usuarios/listarUsuarios.php" class="nav-link">
                                        <i class="far fa-circle text-red nav-icon"></i>
                                        <p>Listado del Personal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/usuarios/nuevoUsuario.php" class="nav-link">
                                        <i class="far fa-circle text-red nav-icon"></i>
                                        <p>Nuevo Personal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!--menu_Facturar-->
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">
                                <i class="fa-solid fa-money-check-dollar"></i>
                                <p>
                                    Facturas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/compras/listar.php" class="nav-link">
                                        <i class="far fa-circle text-orange nav-icon"></i>
                                        <p>Listado de Fatuas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $url ?>/compras/nueva.php" class="nav-link">
                                        <i class="far fa-circle text-orange nav-icon"></i>
                                        <p>Nueva Factura</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>