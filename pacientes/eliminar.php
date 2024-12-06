<?php
include('../app/config.php');
include('../layout/sessiones.php');
include('../layout/superior.php');
include('../app/controllers/pacientes/showDataPaciente.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Eliminar datos del  Paciente</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Seguro que desea Eliminar a <?php echo $nombres?> ?</h3>
                            
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
                               <!--formulario-->
                               <form action="../app/controllers/pacientes/delete.php" method="post">
                                <div class="card-body">
                                    <!--fila_01-->
                                    <div class="row ">
                                        <div class="form-group col-md-3">
                                          <input type="text" name="id" value="<?php echo $id_paciente_get;?>" hidden>
                                            <!--solo para ver el codigo-->
                                            <input type="text" class="form-control"
                                                value="<?php echo $codigo;?>" readonly>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" class="form-control" name="nombres"
                                                    value="<?php echo $nombres_paciente;?>" id="exampleInput" readonly>
                                        </div>
                                    </div>

                                    <!--fila_02-->
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" name="sexo" 
                                            value="<?php echo $sexo;?>" readonly>
                                        </div>
                                        <div class="form-group col-md-3">

                                            <input type="number" class="form-control" name="edad" value="<?php echo $edad;?>" id="exampleInput" readonly>
                                        </div>

                                        <div class="form-group col-md-4">

                                            <input type="text" class="form-control" name="ced" value="<?php echo $cedula?>" id="exampleInput" readonly>
                                        </div>
                                    </div>

                                    <!--fila_03-->
                                    <div class="row">
                                        <div class="form-group col-md-5">

                                            <input type="text" class="form-control" name="segM"
                                               value="<?php echo $seg_medico;?>" id="exampleInput" readonly>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" name="tel" value="<?php echo $tel;?>" id="exampleInput" readonly>
                                        </div>
                                    </div>
                                    <!--fila_03-->
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="dire" value="<?php echo $dire;?>" id="exampleInput" readonly>
                                        </div>
                                    </div>

                                    <!--fila_04-->
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control" name="email" value="<?php echo $email;?>" id="exampleInput" readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control" name="fech_ingreso" value="<?php echo $fech_ingreso;?>" id="exampleInput" readonly>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="form-group">
                                    <a href="listarPacientes.php" class="btn btn-secondary">Volver</a>
                                    <button name="btnEliminar" class=" btn btn-danger">Eliminar</button>
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