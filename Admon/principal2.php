<?php 

	session_start();
	require_once "class/conexion.php";
	require_once "class/Manto.php";

	$user=new Manto;
	$user ->select='usuario.usu, ususario.idr,registro.fechaentrada, registro.horae';
	$user->from='registro inner join ususario on (idr.id=registro.idr)';
	$user->condition='registro.horas="NULL"';
	$user ->leer();
	$ususario=$user->rows;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>

	<table>
		
		<tr>
			<td>Ususario</td>
			<td>Estado</td>

		</tr>
		<tr>
			<?php 

			foreach ($ususario as $ver) {


				# code...
			

			?>
			<td>	<?php echo $ver['usu'];?> en linea		</td>

		<?php } ?>

		</tr>

	</table>

	<a href="salir.php">cerrar sesion</a>

</body>
</html>
