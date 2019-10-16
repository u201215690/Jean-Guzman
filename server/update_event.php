<?php
session_start();
include_once 'conex.php';
$db = new Conex();


if(isset($_GET['update-event'])){

	$eve_id = isset($_POST['id']) ? $_POST['id'] : '';
	$start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';
	$end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';
	$end_hour = isset($_POST['end_hour']) ? $_POST['end_hour'] : '';
	$start_hour = isset($_POST['start_hour']) ? $_POST['start_hour'] : '';

	$fecha_inicio = $start_date.' '.$start_hour;  
	$fecha_fin	  = $end_date.' '.$end_hour; 

	$sql = "UPDATE `evento` SET 
								`fecha_inicio` = '$fecha_inicio ', 
								`hora_inicio` = '$start_hour', 
								`fecha_fin` = '$fecha_fin',
								`hora_fin` = '$end_hour' 
			WHERE `eve_id` = $eve_id";
	$db->getExec($sql);
	echo json_encode(array('msg'=>'Evento actualizado'));

}

