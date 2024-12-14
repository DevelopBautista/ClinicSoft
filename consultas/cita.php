<?php
include('../app/config.php');
include('../layout/sessiones.php');
include('../layout/superior.php');
?>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            editable: true,
            selectable: true,

            events: "<?php echo $url ?>/app/controllers/consultas_citas/showCita.php",

            dateClick: function (info) {
                var fech = info.dateStr;
                const fechaCadena = fech;
                var numerosDias = new Date(fechaCadena).getDay();
                var dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];

                if (numerosDias == "6" || numerosDias == "5") {
                    Swal.fire({
                        title: "No se consulta estos dias",
                        icon: "warning"
                    });
                } else {
                    $('#modal-agendarCita').modal('show');
                    $('#dia_semana').html(dias[numerosDias]);
                }


            }

        });
        calendar.render();
    });

</script>

<div class="content-wrapper">
    <div class="col-md-12">
        <br><br>
        <h1 style="text-align: center">Agendar una Cita</h1>
    </div>

    <div class="container">
        <div id='calendar'></div>
    </div>


</div>

<div id="respuesta"></div>

<?php include('../layout/inferior.php'); ?>

<!--modal para ingresar datos al calendario-->
<div class="modal " id="modal-agendarCita">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#007bff;color:white">
                <h4 class="modal-title">Nueva cita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--f01-->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Titulo:</label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                </div>
                <!--f01-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Paciente:</label>
                        <input type="text" class="form-control" id="paciente">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Horario:</label>
                        <input type="time" class="form-control" id="hora">
                    </div>
                </div>
                <!--f02-->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Medico:</label>
                        <input type="text" class="form-control" id="medico">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Motivos:</label>
                        <input type="text" class="form-control" id="motivo">
                    </div>
                </div>
                <!--f03-->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Color:</label>
                        <input type="color" class="form-control" id="color">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn_Agregar"><i
                            class="fa-solid fa-plus"></i>Agregar</button>
                    <button type="button" class="btn btn-warning" id="btn_Editar"><i
                            class="fa-regular fa-pen-to-square"></i>Editar</button>
                    <button type="button" class="btn btn-danger" id="btn_Eliminar"><i
                            class="fa-solid fa-trash-can"></i>Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fa-solid fa-ban"></i>Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!--para guardar la cita-->
    <Script>
        $('#btn_Agregar').click(function () {
            var url = "<?php echo $url ?>/app/controllers/consultas_citas/nuevaCita.php";
            var titulo = $('#titulo').val();
            $.get({ titulo: titulo },
                function (datos) {
                    $('#respuesta').html(datos);
                }
            );

        });
    </Script>
    <div id="respuesta"></div>