<?php   
	include("Conexion.php");  //tomamos los datos del archivo conexion.php   
	//se envia la consulta  
		$consulta = 'SELECT * FROM libros'; 
		$resultado = mysql_query($consulta) or die('La consulta falló: ' . mysql_error()); 
			//se despliega el resultado
 			$numero = 0;							
					echo "<table border='1px' cell>"; 						
						echo "<caption><h2>Registros de la tabla</h2></caption>";
						echo "<tr>";  
							echo "<th>Codigo</th>";  
							echo "<th>Titulo</th>";  
							echo "<th> Autor</th>";  
							echo "<th>Contenido</th>"; 							
							echo "</tr>";  
								while ($row = mysql_fetch_row($resultado)){   
									echo"<tr>";  
									echo"<td>$row[0]</td>";  
									echo"<td>$row[1]</td>";  
									echo"<td>$row[2]</td>"; 
									echo"<td>$row[3]</td>";																	
									echo "</tr>"; 
									$numero++;
								}
																
						echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Cantidad de registros: " .$numero ."</b></font></td></tr>";
					echo "</table>";  
					
 ?>  
<html>
	<head><title>Mostrar Datos</title></head>
		<body background="F2.jpg" bgproperties="fixed">	
			<div> 
					<div align="center"><a href="Agregar.php">Agregar</a></div> 
					<div align="center"><a href="Editar.php">Editar</a>
					<div align="center"><a href="Eliminar.php">Eliminar</a>
					
			</div>
		</body>
</html> 