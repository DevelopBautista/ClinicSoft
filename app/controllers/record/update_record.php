<?php



$id_record_get = $_GET['id'];

$sql = "select * ,dr.nombre_dr,p.nombres_paciente
                from tb_signosVitales as sv
                inner join tb_doctores as dr on sv.id_doctor=dr.id_doctor
                inner join tb_paciente as p on sv.id_paciente=p.id_paciente 
                
                where id_record='$id_record_get'";

$query = $pdo->prepare($sql);

$query->execute();

$records_datos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($records_datos as $datos) {
    $id_rd = $datos['id_record'];
    $codigo_rd = $datos['codigo_rd'];
    $nombre_paciente = $datos['nombres_paciente'];
    $ta = $datos['tension_arterial'];
    $fc = $datos['frecuencia_cardiaca'];
    $tp = $datos['temp_corporal'];
    $peso = $datos['peso'];
    $pr_abdom = $datos['Perim_abdominal'];
    $fr = $datos['frecuencia_respi'];
    $h_enf_actu = $datos['H_enfermedad_actual'];
    $ant_per_pat = $datos['ant_per_patologicos'];
    $ant_fam_pat = $datos['ant_fam_patologicos'];
    $habit_toxicos = $datos['habitos_toxicos'];
    $diag = $datos['diagnostico'];
    $tram = $datos['tratamiento'];
    $ant_qui = $datos['ant_quirurgico'];
    $ant_alerg = $datos['ant_alergico'];
    $tipo_sangre = $datos['tipo_sangre'];
    $fech_ingreso = $datos['fecha_ingreso'];



}

