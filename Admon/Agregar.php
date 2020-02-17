<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stye.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">>

	<title>Copyfake</title>
</head>
<body>
<center>
	
	 <div class="panel-heading" style="background-color: skyblue; color: white; font-weight: bold; text-align: center; height:160px ;width:1000px ">
	 	<br>
	 	<br>
                <h1 style="color: white;text-align: center">Inventario</h1>
            

            <br>
             <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="pagina.html"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Menú</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Pagina.html"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Inicio</a></li>
                        <li><a href="Agregar.html"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Altas</a></li>
                        <li><a href="Baja.html"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Bajas</a></li>
                        <li><a href="Modi.php"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Modificaciones</a></li>
                        <li><a href="Vistas.php"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Vistas</a></li>
                        <li><a href="Transacciones.php"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Transacciones</a></li>
                        <li><a href="Bitacoras.html"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Bitacoras</a></li>
                        <li><a href="Informacion.html"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Informacion</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </nav>	
        <br>
        <br>
</html>
<?php
//Establecer conexion con base de datos
session_start();
$server = 'localhost';
$database = 'copymartz';
$user = 'root';
$password = '';


$conexion = new mysqli($server, $user, $password,$database);
	
	if($conexion -> connect_error){
	die("Conexion Fallida" . $conexion-> connect_error);
	}
echo "Conexion completada ....";
//mysqli_close($conexion);
//Se termina de establecer

//Confirma que hay variables

if (isset($_POST['nombre']) && $_POST['nombre'] != ""){
	$nombre=$_POST['nombre'];
	$marca=$_POST['marca'];
	$tamaño=$_POST['tamaño'];
	$existencias=$_POST['existencias'];
	$proveedor=$_POST['proveedor'];
}


$query ="INSERT INTO material (Codigo, Marca, TamañoTipo,Existencias,NumProveedor) values ($nombre,'$marca','$tamaño',$existencias,$proveedor)";


if($conexion->query($query) === true) {
	echo "Se agrego articulo";
	}
	else{
	die("Error:  " . $conexion->error);
}

mysqli_close($conexion);



	//$resultado=mysqli_query($conexion,$querty);


	#validacion de sentencia
	
	//$numero = mysqli_affected_rows($conexion);

	//if ($numero==0 or !$resultado){
		//echo "Error no se pudo agregar el articulo:".$nombre;
	//}else{
		//echo "Articulo: ".$nombre."Se agrego a la base de datos";
	//}
?>

 