<?php
	  $mysqli = new mysqli("localhost","root","","imagen");

	if ($mysqli->connect_errno) {
          printf("Falló la conexión: %s\n", $mysqli->connect_error);
          exit();
      }
?>