<?php
session_start();
include_once 'conex.php';
$db = new Conex();


if(isset($_GET['new-event'])){
	
	$usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : '';
	$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
	$start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';

	$allDay = isset($_POST['allDay']) == 'false' ? 0 : 1;
	$end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';
	$end_hour = isset($_POST['end_hour']) ? $_POST['end_hour'] : '';
	$start_hour = isset($_POST['start_hour']) ? $_POST['start_hour'] : '';

	$fecha_inicio = $start_date.' '.$start_hour;  
	$fecha_fin	  = $end_date.' '.$end_hour; 

	$sql = "INSERT INTO `evento` (`usu_id`, `título`, `fecha_inicio`, `hora_inicio`, `fecha_fin`, `hora_fin`, `dia_completo`) VALUES
								 ($usuario, '$titulo', '$fecha_inicio', '$start_hour', '$fecha_fin', '$end_hour', $allDay)";
	//echo $sql;
	$db->getExec($sql);
	echo json_encode(array('msg'=>'Evento registrado'));
}