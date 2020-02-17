
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
        <?php
        // Validar envio de formulario
        if (isset($_POST['codigo']) and $_POST['codigo'] != "") {
         
            $codigo = $_POST['codigo'];
            $Marca = $_POST['Marca'];
            $Tamaño = $_POST['Tamaño'];
            $Existencias = $_POST['Existencias'];
            $Proveedor = $_POST['Proveedor'];
            
            $conexion = mysqli_connect('localhost', 'root', '', 'copymartz');
        
        if (mysqli_connect_errno()) {
            echo "Error de conexion llamar al administrador" . mysqli_connect_error();
        }
        
        $consulta = "update  material
                      set Codigo = $codigo,
                          Marca = '$Marca',
                          TamañoTipo = '$Tamaño',
                          Existencias = $Existencias,
                          NumProveedor = $Proveedor
                      where Codigo = $codigo";       

                      if($conexion->query($consulta) === true) {
    echo "Se modifico";
    }
    else{
    die("Error:  " . $conexion->error);
}
 
                
        //Ejecutar consulta
        //$resultado = mysqli_query($conexion, $consulta);
        //validar resultado de update//
        //$num = mysqli_affected_rows($conexion);

        //echo " <span style='color:blue;  font=size:30px; '>";
        //if ($num >=1) {
            //echo  "El articulo  : ".$idarticulo.  "de la marca: ".$Marca;
           // echo "<br>Fue modificado con exito";
            //    
        
        //} else {
        //    echo "El articulo:".$codigo."de la marca:  ".$Marca;
        //    echo "NO SE PUDO MODIFICAR";    
        //}
        //echo "</span>";
        //}else {
        //    echo "Sin articulo a modificar";
        }
            ?>
    </body>
</html>
