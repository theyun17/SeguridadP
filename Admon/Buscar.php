<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Material</title>
    </head>
    <body style= "background:silver">
    <center>
        <h2>Buscar Material</h2>
        <hr>
        <p>Se buscan articulos por su nombre o descripcion, el usuario escribe el texto a buscar.
        Se puede ingresar una parte del nombre o descripcion</p>
        
        <form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Escribir nombre o descripcion (o una parte):
            &nbsp;&nbsp;&nbsp;
            <input type="text" name="textobuscar">
            <br><br>
            <input type="submit" value ="     Buscar      ">
            <br><br>
        </form>    
        <?php
        
        // Validar envio de formulario y que exista un texto a buscar
        if (isset($_POST['textobuscar']) and $_POST['textobuscar'] != "") {
            //recuperar texto a buscar
            $texto1 = $_POST['textobuscar'];
          //hacer conexion con la BD      
        $conexion = mysqli_connect('localhost', 'root', '', 'copymartz');
        //validar conexion
        if (mysqli_connect_errno()){
            echo "Error de conexion llamar al administrador". mysqli_connect_error();
        }
        //Definir la consulta SQL para recuperar todos los articulos
        $consulta = "select * from material
          where Marca like '%" . $texto1 . "%'" . 
          " or descripcionarticulo like '%" .$texto1 . "%'";
           echo $consulta;   
        //Ejecutar consulta
        $resultado = mysqli_query($conexion, $consulta);
        //Mostrar en tabla HTML todos loa articulos
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
                "<td>" . $fila['Tamaño'] . "</td>".
                "<td>" . $fila['Existencias'] . "</td>".
                "<td>" . $fila['Proveedor'] . "</td>".
                    "</tr>";
        }    
            echo "</table>";
             //cerrar conexion
            mysqli_close($conexion); 
        }
        ?>
    </center>
    </body>
</html>
