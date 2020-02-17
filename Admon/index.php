
<?php 

require_once "class/conexion.php";
require_once "class/Manto.php";

if(isset($_POST['iniciar'])){
    
    $model=new Model;
    $model-> name=$_POST['name'];
    $model->pass=$_POST['pass'];
    $model-> login();
}


 ?>
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
                    <a class="navbar-brand" href="pagina.html"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>Inicio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Contacto.html"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>Login</a></li>
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
     
        <form method="post" action="
        <?php 

        echo $_SERVER['PHP_SELF'];

        ?> ">

        
            <center>
                <div class="panel-heading" style="background-color: #B0C4DE; color: white; font-weight: bold; text-align: center; height:90px ;width:1000px ">
   

                   
                <h2>Inicio</h2>
                
</div>

            <div style=" text-align: left; height:1000px ;width:230px ">
                <section>
                <br><br>
                <p>
                Estos campos deben ser llenados <strong>
                    <abbr title="required">*</abbr></strong>      
            </p>
            
                <!-- fieldset: es una practica comun usar los titulos 
                y elementos de seccionamiento para estruccturar un formulario complejo
                FOR: una lista de ids delimitados por espacios indicando aquellos elementos
                cuyos valores contribullen como entrada o afectan algun calculo
                -->
                <fieldset id="fielsetDos">
                    <!-- legend: hace ver el titulo como si fuera parte de la etiqueta-->
                   
                </fieldset>
          
                <p>
                <label for="name">
                    <span>Nombre</span>
                    <input type="text" id="name" name="name" required/>
                    <strong><abbr title="requiered">*</abbr></strong>
                </label>
                </p>
            
                <p>
                <label for="number">
                    <span>Contraseña</span>
                   <input type="password" id="pass" name="pass" required />
                   <strong><abbr title="required">*</abbr></strong>
                </label>
                </p>
                <tr>
                  <td colspan="2" style="text-align:center"><input type="submit" value=" Iniciar "></td>
              </tr>
            </section>
                      </div>
          </center>
        </form>
  
    </body>
</html>