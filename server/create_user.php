<?php
include_once 'conex.php';
$db = new Conex();
$str = md5('123456');
$sql = "INSERT INTO `usuario` (`usu_id`, `nombres`, `apellidos`, `correo`, `password`, `fecha_nacimiento`) VALUES
							  (1, 'Jean', 'Guzman', 'jguzman@gmail.com', '$str', NULL),
							  (2, 'Santiago', 'Abregu', 'santiago@gmail.com', '$str', NULL),
							  (3, 'Mariano', 'Guzman', 'mariano@gmail.com', '$str', NULL),
							  (4, 'Jean', 'Guzman', 'jguzman@gmail.com', '$str', NULL),
							  (5, 'Santiago', 'Abregu', 'santiago@gmail.com', '$str', NULL),
							  (6, 'Mariano', 'Guzman', 'mariano@gmail.com', '$str', NULL)";
$db->getExec($sql);
echo json_encode(array('msg'=>'Usuarios Registrados'));