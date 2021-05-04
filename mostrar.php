<!DOCTYPE html>
<html>
<head>
	<title>mostrar imagen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
<center>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Id Legajo</th>
      <th scope="col">Nombre Acta</th>
      <th scope="col">Imagen</th>
      <th scope="col">Imprimir</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include ("conexion.php");
    $query= "SELECT * from tabla_imagen";
     $resultado= $mysqli->query($query);
     while ($row=$resultado->fetch_assoc()) {
     ?>
     <tr>
      <th scope="col"><?php echo $row['id_legajo']; ?></th>
      <th scope="col"><?php echo $row['nombre_acta']; ?></th>
      <th scope="col"><img src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>"/ width="100"></th>
      <th><button type="button" class="btn btn-dark" >Inicio</button></th>
    </tr>



     <?php
     }
    ?>
  </tbody>
</table>
</center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>
<th></th>