<?php 
$id=$_POST['id'];
	if (isset($id)){
      include "Conexion.php"; 
		$sql = "DELETE from libros WHERE id=$id";
		$result = mysql_query($sql);	    
		  

	}else{
		echo "Debe especificar un 'id'.\n";
	}
?>
<html>
<head><title>Eliminar Datos</title></head> 
	<body background="F2.jpg" bgproperties="fixed">	
		<h1><div align="center">Registro eliminado</div></h1> 
			<div align="center"><a href="Editar.php">Eliminar</a></div> 
				<div align="center"><a href="Mostrar.php">Mostrar</a></div> 
					<div align="center"><a href="Agregar.php">Agregar</a></div> 
						<div align="center"><a href="Editar.php">Editar</a></div> 
	</body>
</html>				