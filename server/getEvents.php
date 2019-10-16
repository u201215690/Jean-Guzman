<?php
session_start();
include_once 'conex.php';
$db = new Conex();

$sql = "SELECT `eve_id` AS id, `usu_id`, `título` AS title, `fecha_inicio` AS start, `hora_inicio`, `fecha_fin` AS end, `hora_fin`, `dia_completo` FROM `evento` WHERE `usu_id` = 1";
$rows = $db->getFechAssoc($sql);
echo json_encode(array('msg'=>'OK','eventos'=>$rows));