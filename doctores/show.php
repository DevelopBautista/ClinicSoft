<?php
include('../app/config.php');
include('../layout/sessiones.php');
include('../app/controllers/doctores/showData.php');
include('../layout/superior.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Datos del Doctor</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
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
                            <form action="" method="post">
                                <div class="card-body">
                                    <!--fila_01-->
                                    <div class="row ">
                                        <div class="form-group col-md-3">
                                            <!--solo para ver el codigo-->
                                            <input type="text" class="form-control"
                                                value="<?php echo $codigo;?>" readonly>
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
                                            value="<?php echo $tel;?>" readonly>
                                        </div>

                                    </div>

                                    <!--fila_03-->
                                    <div class="row">

                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control"
                                              value="<?php echo $email;?>" readonly>
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
                                            value="<?php echo $direc;?>" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" 
                                            value="<?php echo $fech_ingreso;?>" readonly>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="form-group">
                                    <a href="listarDoctores.php" class="btn btn-secondary">Volver</a>
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