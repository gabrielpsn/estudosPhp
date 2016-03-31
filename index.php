<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
	<?php
		include_once 'usuario.php';
		$usuario = new Usuario;
		$usuario->setUsuario("Gabriel");
		echo "<br>".$usuario->getUsuario();


	 ?>
</body>
</html>
