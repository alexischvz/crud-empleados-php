<?php 

class Puesto{

	public function readPuesto(){

		$rows = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "select * from puesto";
		$statement = $conexion->prepare($sql);
		$statement->execute();

		while($result = $statement->fetch()){
			$rows[] = $result;
		}

		return $rows;
	}

}

 ?>