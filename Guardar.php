<?php 
	$titulo=$_POST['titulo']; 
	$autor=$_POST['autor']; 
	$contenido=$_POST['contenido'];  
		include "Conexion.php"; 
			$guardar = mysql_query
					("INSERT INTO libros (titulo,autor,contenido)
					VALUES ('$titulo','$autor','$contenido');"); 
				mysql_close(); 
?> 
<html>	
	<head><title>Guardar Datos</title></head> 
		<body background="F2.jpg" bgproperties="fixed">		
			<h1><div align="center">Registro Insertado</div></h1> 
				<div align="center"><a href="Agregar.php">Ingresar</a></div> 
					<div align="center"><a href="Mostrar.php">Mostrar</a></div> 
		</body> 
</html> 






		 