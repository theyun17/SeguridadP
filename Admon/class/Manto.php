<?php

class Manto{

#atributos para insertar
	public $tabla;
	public $values;
	public $columnas;
#atributos para editar
public $update;
public $set;

#atributos para datos	
public $select;
public $from;
public $condition;
public $rows;

#atributos para eliminar

public $deleteFrom;

#Atributos para login
public $name;
public $pas;

}

public function leer(){ 

$model=new Conexion;

$conexion= $model->conectar();

$select= $this->select;
$from =$this-> from;
$condition = $this -> condition;
$rows = $this-> rows;

if ($condition != ""){

$condition ="WHERE".$condition;

}
$sql="SELECT $select FROM $from	$condition";

$consulta =$conexion ->prepare($sql);
$consulta->execute();

while($filas = $consulta->feth()){

$this->rows[]=$filas;

}
}

	public function login(){
		$model=new Conexion;

	$conexion=$model->conectar();
	$sql= "SELECT * FROM usuario WHERE usu = :name and pass=:pass and A3=1;"

		$consulta=$conexion-> prepare($sql);

		$consulta-> bindParam(':name',$this->name.PDO::PARAM_STR);
		$consulta-> bindParam(':pass',$this->pass.PDO::PARAM_STR);
		$consulta-> execute();
		$total= $consulta->rowCount();

		if($total==0){

			?>

			<script>
				location.href="index.php";
			</script>
			<?php 


		}else {

			$fecha=date("Y-m-d");
			$hora=date("H:i:s");
			$fila=$consulta-> feth();
			$sql2="INSERT INTO registro (idr,id,fechae,horae,fechas,horas,A3) values (2,'".$fila['id']."','$fecha','$hora','','',1)";
			$consulta2=$conexion->prepare($sql2);
			$consulta2->execute();

			session_start();
			$_SESSION['idr']=$fila['id'];
			?>
			<script>
				location.href="principal1.php";
			</script>
			<?php


		}

	}

}



?>