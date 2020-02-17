<?php 

session_start();
	require_once "class/conexion.php";
	require_once "class/Manto.php";

sid=$_SESSION['id'];

	$fecha=date("Y-m-d");
			$hora=date("H:i:s");

			$update=new Manto;
			$update->update="reistro";
			$update->set="fechas= '$fecha', horas='$hora'";
			$update->condition="id=$id";
			$update->editar();

			seesion_destroy();

 ?>