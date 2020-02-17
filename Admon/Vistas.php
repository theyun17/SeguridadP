<html>
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
     
      
    </head>
    <body>
        <center>
 <div class="panel-heading" style="background-color: deepskyblue; color: white; font-weight: bold; text-align: center">
                <h1 style="color: white;text-align: center">Inventario</h1>
            </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="Pagina.html"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Menú</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                       <li><a href="Pagina.html"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Inicio</a></li>
                        <li><a href="Agregar.html"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Altas</a></li>
                        <li><a href="Baja.html"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Bajas</a></li>
                        <li><a href="Modi.php"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Modificaciones</a></li>
                        <li><a href="Vistas.php"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Vistas</a></li>
                        <li><a href="Transacciones.html"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Transacciones</a></li>
                        <li><a href="Bitacoras.html"><span class="glyphicon-arrow-down" aria-hidden="true"></span>Bitacoras</a></li>
                        <li><a href="Informacion.html"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Informacion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php

        $conexion = mysqli_connect('localhost', 'root', '', 'copymartz');

        if (mysqli_connect_errno()){
            echo "Error de conexion llamar al administrador". mysqli_connect_error();
        }
        
        $consulta = "select * from material";
        $resultado = mysqli_query($conexion, $consulta);
        echo "<table border='1'>
            <tr>
            <th>Codigo</th>
            <th>Marca</th>
            <th>Tamaño</th>
            <th>Existencias</th>
            <th>Proveedor</th>
            </tr>";
        while ($fila = mysqli_fetch_array($resultado)){
            echo "<tr>
                <td>" . $fila['Codigo'] . "</td>".
                "<td>" . $fila['Marca'] . "</td>".
                "<td>" . $fila['TamañoTipo'] . "</td>".
                "<td>" . $fila['Existencias'] . "</td>".
                "<td>" . $fila['NumProveedor'] . "</td>".
                    "</tr>";
        }    
            echo "</table>";
             //cerrar conexion
            mysqli_close($conexion); 
        ?>
    </body>
</html>