<?php 

class Conexion{

public function conectar(){

	return $Conexion= new PDO('mysql:host=localhost;dbname= copymartz','root','');
}

}

 ?>