<?php
include('../app/config.php');
include('../layout/sessiones.php');
include('../app/controllers/doctores/update_doctor.php');
include('../layout/superior.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Eliminar datos del Doctor</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Seguro que desea Eliminar a <?php echo $nombre_dr;?> ?</h3>
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
                            <form action="../app/controllers/doctores/eliminarDoctor.php" method="post">
                                <div class="card-body">
                                    <!--fila_01-->
                                    <div class="row ">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control"
                                                value="<?php echo $codigo;?>" readonly>
                                                <input type="text" name="id_doctor" 
                                                value="<?php echo $id_doctor_get;?>" hidden>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" class="form-control" 
                                            value="<?php echo $nombre_dr;?>" readonly>
                                        </div>
                                    </div>

                                    <!--fila_02-->
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" 
                                            value="<?php echo $cedula;?>" readonly>
                                        </div>
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control"
                                            value="<?php echo $tel;?>" name="tel" readonly>
                                        </div>

                                    </div>

                                    <!--fila_03-->
                                    <div class="row">

                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control"
                                              value="<?php echo $email;?>" name="email" readonly>
                                        </div>

                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control"        
                                            value="<?php echo $espec;?>" readonly >
                                        </div>
                                    </div>
                                    <!--fila_03-->
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control" 
                                            value="<?php echo $direc;?>" name="direc" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" 
                                            value="<?php echo $fech_ingreso;?>" readonly>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="form-group">
                                    <a href="listarDoctores.php" class="btn btn-secondary">Volver</a>
                                    <button type="submit" class="btn btn-danger"
                                    name="btnActualizar">Eliminar</button>
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