<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Ejemplo Imágenes</title>
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<style>
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
		</style>
	</head>
	
	<body>
		
		<div class="container">		
			<div class="panel panel-primary">
				<div class="panel-body">
					
					<form name="form1" id="form1" method="post" action="proceso_guardar.php" enctype="multipart/form-data">
						
						<h4 class="text-center">Cargar Multiple Archivos</h4>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Id Legajo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="" name="id_legajo" required=""><br>
							</div>
							

						<div class="form-group">
							<label class="col-sm-3 control-label">Nombre de Acta Acuerdo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="" name="nombre_acta" required="" placeholder="Ingrese Nombre de Acta Acuerdo">	<br>
							</div>
						

						<div class="form-group">
							<label class="col-sm-3 control-label">Archivos</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="Imagen" multiple="" required=""><br>
					</div>
						
							
							<button type="submit" class="btn btn-primary">Cargar</button>
						
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</body>
</html>