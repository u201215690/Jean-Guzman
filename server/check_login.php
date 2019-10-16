<?php
session_start();
include_once 'conex.php';
$db = new Conex();


if(isset($_GET['check-login'])){
	
	$username = isset($_POST['username']) ? stripslashes($_POST['username']) : '';
	$password = isset($_POST['password']) ? md5($_POST['password']) : '';

	$sql = "SELECT COUNT(`usu_id`) AS validar ,`usu_id`, `nombres`, `apellidos`, `correo`, `password`, `fecha_nacimiento` FROM `usuario` 
			WHERE `correo`='$username' AND `password` = '$password'";

	$valida = $db->getCellValue ( $sql, 'validar' );
	$idUsu = $db->getCellValue ( $sql, 'usu_id' );
	$nombre = $db->getCellValue ( $sql, 'nombres' );
	$apellidos = $db->getCellValue ( $sql, 'apellidos' );
	

	if ($valida  > 0) {
        $_SESSION['auth_usuario'] = $idUsu. "-" . $password. "-" . $nombre. "-" . $apellidos;
        echo json_encode(array('msg'=>'OK'));
        return true;
    } else {
        echo json_encode(array('msg'=>'Usuario o contraseña incorrecta.'));
        return true;
    }


}

