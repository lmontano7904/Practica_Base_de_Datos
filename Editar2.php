<?php 
$id=$_POST['id'];
$titulo=$_POST['titulo']; 
$autor=$_POST['autor']; 
$contenido=$_POST['contenido'];  
	if (isset($id)){
      include "Conexion.php"; 
		$sql = "UPDATE libros SET titulo='$titulo', autor='$autor',".
				"contenido='$contenido' WHERE id=$id";
		$result = mysql_query($sql);
	}else{
		echo "Debe especificar un 'id'.\n";
	}
?>
<html>
	<head><title>Editar Datos</title></head> 
		<body background="F2.jpg" bgproperties="fixed">	
			<h1><div align="center">Registro modificado</div></h1> 
				<div align="center"><a href="Editar.php">Editar</a></div> 
					<div align="center"><a href="Mostrar.php">Mostrar</a></div> 
		</body>
</html>	