<?php
session_start();
include_once 'conex.php';
$db = new Conex();


if(isset($_GET['delete-event'])){

	$eve_id = isset($_POST['id']) ? $_POST['id'] : '';
	$sql = "DELETE FROM `evento` WHERE `eve_id` = $eve_id";
	$db->getExec($sql);
	echo json_encode(array('msg'=>'Evento eliminado'));
}

