<?php
include('../app/config.php');
include('../layout/sessiones.php');
include("../app/controllers/roles/update_rol.php");
include('../layout/superior.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Actualizar Rol</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">información de rol</h3>

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
                            <form action="../app/controllers/roles/updateRolController.php" method="post">

                                <input type="text" name="id" value="<?php echo $id_rol_get; ?>" hidden>

                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="rol" value="<?php echo $rol; ?>"
                                            placeholder="Nombre del Rol" required>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="form-group">
                                    <a href="listar.php" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success"
                                        name="btnRegistrar">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>

<!-- /.content-wrapper -->
<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/inferior.php'); ?>