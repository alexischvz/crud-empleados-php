<?php 

class Conexion{

	public function getConexion(){
		$user = "root";
		$pass = "";
		$host = "localhost";
		$db = "empleados";

		$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

		return $conexion;
	}

}

 ?>