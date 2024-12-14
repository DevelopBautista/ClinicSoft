<?php
include('../app/config.php');
include('../layout/sessiones.php');
include('../app/controllers/doctores/listarDoctores.php');
include('../app/controllers/usuarios/listarController.php');
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
                <div class="col-md-8">
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

                                            <input type="text" id="codigo"
                                                value="<?php echo 'Dr-' . ceros($contadorId); ?>" hidden>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-buscar_dr">
                                                <i class="fa fa-search"></i> Buscar Doctor
                                            </button>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="nombres">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-9">

                                            <input type="text" class="form-control" id="espec"
                                                placeholder="Especialidad" required>
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


<!--modal ver doctor-->
<div class="modal fade" id="modal-buscar_dr">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#007bff;color:white">
                <h4 class="modal-title">Doctores</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>

                            <th>
                                <center>#</center>
                            </th>
                            <th>
                                <center>Nombre</center>
                            </th>
                            <th>
                                <center>Cedula</center>
                            </th>
                            <th>
                                <center>Seleccionar</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        foreach ($usuarios_datos as $datos) {
                            $id_usuario = $datos['id_usuario'];
                            $nombres = $datos['nombres'];

                            ?>
                            <tr>
                                <td><?php echo $contador += 1; ?></td>
                                <td><?php echo $datos['nombres']; ?></td>
                                <td><?php echo $datos['cedula']; ?></td>
                                <td>
                                    <button class="btn btn-info btn-md"
                                        id="btn_seleccionar_dr<?php echo $id_usuario; ?>">Seleccionar</button>
                                    <!--code para seleccionar-->
                                    <script>
                                        $('#btn_seleccionar_dr<?php echo $id_usuario; ?>').click(
                                            function () {
                                                var id_usuario = "<?php echo $id_usuario; ?>";
                                                var nombres = "<?php echo $nombres ?>";
                                                $('#nombres').val(nombres);
                                                $('#id_usuario').val(id_usuario);

                                                $('#modal-buscar_dr').modal('toggle');//para destruir el modal
                                            }

                                        );

                                    </script>
                                </td>

                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {

        $("#example2").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Doctores",
                "infoEmpty": "Mostrando 0 to 0 of 0 Doctores",
                "infoFiltered": "(Filtrado de MAX total Doctores)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Doctores",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            /* fin de idiomas */

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

</script>

<!--script para guardar info en la tb-->
<script>
    $('#btnRegistrar').click(function () {
        var codigo = $('#codigo').val();
        var id_paciente = $('#id_paciente').val();
        var dr = $('#dr').val();

        var url = "../app/controllers/doctores/nuevo.php";
        $.get(url, {
            codigo: codigo, ta: ta, fc: fc,
            tp: tp, peso: peso, pr_abdom: pr_abdom,
            fr: fr, h_enf_actu: h_enf_actu,
            ant_per_pat: ant_per_pat,
            ant_fam_pat: ant_fam_pat, habit_toxicos: habit_toxicos,
            diag: diag, tram: tram, ant_qui: ant_qui,
            ant_alerg: ant_alerg, tipo_sangre: tipo_sangre,
            fech_ingreso: fech_ingreso, id_paciente: id_paciente, dr: dr

        }, function (datos) {
            $('#respuesta').html(datos);
        });

    });


</script>

<div id="respuesta"> </div>