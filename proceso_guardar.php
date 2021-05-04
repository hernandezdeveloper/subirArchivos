<?php
	include ("conexion.php");

			$id_legajo = $_POST['id_legajo'];  
			$nombre_acta = $_POST['nombre_acta'];
			$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

			$sql = "INSERT INTO tabla_imagen (id_legajo, nombre_acta, Imagen) VALUES ('$id_legajo', '$nombre_acta', '$Imagen') ";
			if (mysqli_query( $mysqli, $sql)) {
		
		echo"<script type=\"text/javascript\">alert('GUARDADO CORRECTAMENTE'); window.location='index.php';</script>";

	}else
	{
		
		echo"<script type=\"text/javascript\">alert('NO SE PUDO GUARDAR'); window.location='index.php';</script>";  
	
		}



?>