<?php
	$conectar = mysql_connect('127.0.0.1', 'root', '12345')
		or die('No se pudo conectar: ' . mysql_error());
			mysql_select_db('biblioteca',$conectar) or die('No se pudo conectar a la base de datos');
?>

