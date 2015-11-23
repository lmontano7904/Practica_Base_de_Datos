<html>	
	<head><title>Formulario Editar</title></head>
	<body background="F2.jpg" bgproperties="fixed">	
		<div  <div align="center" >
			<h2>Editar</h2>
            <form action="Editar2.php" method="POST">
				Id del registro a modificar:</br>		
				<input type="text" name ="id" size="20" maxlength="50">	<br/><br/>			          
					Titulo:</br>		
					<input type="text" name ="titulo" size="20" maxlength="50"><br/><br/>
						Autor:</br>		
							<input type="text" name ="autor" size="20" maxlength="50"><br/><br/>
								<h3> Contenido: </h3>
									<textarea name="contenido" rows="5" cols="25"></textarea><br/><br/>			
			<input type="submit" name="editar" Value="Editar">
			</form>
		</div> 
	</body>
</html> 
