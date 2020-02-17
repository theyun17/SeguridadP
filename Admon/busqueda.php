<?php 

require_once"class/conexion.php";
require_once"class/Manto.php";

$buscar=S_POST["b"];

if(!empy($buscar){
	buscar($buscar);
})

function buscarr($b){
	$model=new Manto;
	$model->select= "*"
	$model->from="usuario";
	$model ->condition = 'A3=1 and usu LIKE "%'.substr($b,1).'%"';
	$model->leer();

$filas=$model-> rows;

if ($filas ==0){
	echo"No se encuentra datos registrados";

}
else{

	foreach ($filas as $articulos) {

		?>
		<p><?php echo $articulos["usu"];?></p>

		<?php
		# code...
	}

}

}

 ?>