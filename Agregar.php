<html>
	<head><title>Agregar Datos</title></head>
		<body background="F2.jpg" bgproperties="fixed">	    
			<div align="center" >
				<h1>Nuevo Libro</h1>
				<form action="Guardar.php" method="POST">
					<h3>Titulo:</h3>	
					<input type="text" name ="titulo" size="20" maxlength="50"><br/><br/>
						<h3>Autor:<h3>		
						<input type="text" name ="autor" size="20" maxlength="50"><br/><br/>
							<h3> Contenido: </h3>
							<textarea name="contenido" rows="5" cols="25"></textarea><br/><br/>
					<input type="submit" name="guardar" Value="Guardar">
				</form>
			</div>
		</body>
</html>
