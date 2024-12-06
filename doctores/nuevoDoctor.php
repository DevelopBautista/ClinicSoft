<?php
include('../app/config.php');
include('../layout/sessiones.php');
include("../app/controllers/roles/listarRoles.php");
include('../app/controllers/doctores/listarDoctores.php');
include('../layout/superior.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nuevo Doctor</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos del Doctor</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!--formulario-->
                            <form action="../app/controllers/doctores/nuevo.php" method="post">
                                <div class="card-body">
                                    <!--fila_01-->
                                    <div class="row ">
                                        <div class="form-group col-md-3">
                                            <?php
                                            function ceros($numero)
                                            {
                                                $len = 0;
                                                $cantidCero = 5;
                                                $aux = $numero;
                                                $pos = strlen($numero);
                                                $len = $cantidCero - $pos;
                                                for ($i = 0; $i < $len; $i++) {
                                                    $aux = "0" . $aux;
                                                }
                                                return $aux;

                                            }
                                            $contadorId = 1;
                                            foreach ($doctores_datos as $datos) {
                                                $contadorId = $contadorId + 1;
                                            }
                                            ?>
                                            <!--solo para ver el codigo-->
                                            <input type="text" class="form-control"
                                                value="<?php echo 'Dr-' . ceros($contadorId); ?>" disabled>

                                            <input type="text" name="codigo"
                                                value="<?php echo 'Dr-' . ceros($contadorId); ?>" hidden>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" class="form-control" name="nombres_dr"
                                                placeholder="Nombre Completo" required>
                                        </div>
                                    </div>

                                    <!--fila_02-->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="ced" placeholder="Cedula"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control" name="tel" placeholder="Telefono"
                                                required>
                                        </div>

                                    </div>

                                    <!--fila_03-->
                                    <div class="row">

                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control" name="email" placeholder="E-Mail"
                                                required>
                                        </div>

                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control" name="espec"
                                                placeholder="Especialidad" required>
                                        </div>
                                    </div>
                                    <!--fila_03-->
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control" name="direc" placeholder="direccion"
                                                required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="date" class="form-control" name="fech_ingreso" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <!--codigo para listar Roles-->
                                            <select name="rol" class="form-control">
                                                <option>Seleccione Rol</option>
                                                <?php foreach ($roles_datos as $datos) { ?>
                                                    <option value="<?php echo $datos['id_rol']; ?>">
                                                        <?php echo $datos['rol']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <a href="listarDoctores.php" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary" name="btnRegistrar">Registrar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>

</aside>
<!-- /.content-wrapper -->
<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/inferior.php'); ?>