<?php 

	require_once "../../../clases/Usuario.php";

	$password = sha1($_POST['password']);
	$datos = array(
				"nombreU" => $_POST['nombreU'], 
			    "email" => $_POST['correo'], 
			    "usuario" => $_POST['usuario'], 
			    "password" => $password
			);

	$usuario = new Usuario();
	echo $usuario->agregarUsuario($datos);
 ?>