<?php
include('../../config.php');
session_start();

$codigo = $_GET['codigo'];
$ta = $_GET['ta'];
$fc = $_GET['fc'];
$tp = $_GET['tp'];
$peso = $_GET['peso'];
$pr_abdom = $_GET['pr_abdom'];
$fr = $_GET['fr'];
$h_enf_actu = $_GET['h_enf_actu'];
$ant_per_pat = $_GET['ant_per_pat'];
$ant_fam_pat = $_GET['ant_fam_pat'];
$habit_toxicos = $_GET['habit_toxicos'];
$diag = $_GET['diag'];
$tram = $_GET['tram'];
$ant_qui = $_GET['ant_qui'];
$ant_alerg = $_GET['ant_alerg'];
$tipo_sangre = $_GET['tipo_sangre'];
$fech_ingreso = $_GET['fech_ingreso'];
$paciente = $_GET['id_paciente'];
$dr = $_GET['dr'];


$query = $pdo->prepare("insert into tb_signosVitales (codigo_rd,tension_arterial, frecuencia_cardiaca, 
                                                            temp_corporal, peso, Perim_abdominal, 
                                                            frecuencia_respi, H_enfermedad_actual, ant_per_patologicos,
                                                            ant_fam_patologicos, habitos_toxicos, diagnostico, 
                                                            tratamiento, ant_quirurgico, ant_alergico, 
                                                            tipo_sangre, fecha_ingreso, id_paciente, 
                                                            id_doctor, fecha_creacion)
                                
                                values( :codigo_rd,:tension_arterial, :frecuencia_cardiaca, 
                                        :temp_corporal, :peso, :Perim_abdominal, 
                                        :frecuencia_respi, :H_enfermedad_actual, :ant_per_patologicos,
                                        :ant_fam_patologicos, :habitos_toxicos, :diagnostico, 
                                        :tratamiento, :ant_quirurgico, :ant_alergico, 
                                        :tipo_sangre, :fecha_ingreso, :id_paciente, 
                                        :id_doctor, :fecha_creacion)");



$query->bindParam('codigo_rd', $codigo);
$query->bindParam('tension_arterial', $ta);
$query->bindParam('frecuencia_cardiaca', $fc);
$query->bindParam('temp_corporal', $tp);
$query->bindParam('peso', $peso);
$query->bindParam('Perim_abdominal', $pr_abdom);
$query->bindParam('frecuencia_respi', $fr);
$query->bindParam('H_enfermedad_actual', $h_enf_actu);
$query->bindParam('ant_per_patologicos', $ant_per_pat);
$query->bindParam('ant_fam_patologicos', $ant_fam_pat);
$query->bindParam('habitos_toxicos', $habit_toxicos);
$query->bindParam('diagnostico', $diag);
$query->bindParam('tratamiento', $tram);
$query->bindParam('ant_quirurgico', $ant_qui);
$query->bindParam('ant_alergico', $ant_alerg);
$query->bindParam('tipo_sangre', $tipo_sangre);
$query->bindParam('fecha_ingreso', $fech_ingreso);
$query->bindParam('id_paciente', $paciente);
$query->bindParam('id_doctor', $dr);
$query->bindParam('fecha_creacion', $fech_hora);







try {
    if ($query->execute()) {

        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $_SESSION['mensaje'] = "El record se ha registrado con exito.";
        $_SESSION['icono'] = "success";
        ?>
        <script>
            location.href = "<?php echo $url ?>/records/listar.php";
        </script>
        <?php
    } else {
        $_SESSION['mensaje'] = "Problema con el registro";
        $_SESSION['icono'] = "error";
        header('location: ' . $url . '/records/nuevo.php');
    }

    echo "Id paciente :" . $paciente;



} catch (Exception $e) {
    echo "<div>" . $e->getMessage() . "</div>";
}
?>