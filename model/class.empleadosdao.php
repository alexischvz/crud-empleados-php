<?php 

class Empleados{

	public function createEmpleado($nombre, $edad, $id_genero, $email, $id_puesto, $sueldo){

		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "insert into empleados(nombre,edad,id_genero,email,id_puesto,sueldo) values(:nombre,:edad,:id_genero,:email,:id_puesto,:sueldo)";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(":nombre", $nombre);
		$statement->bindParam(":edad", $edad);
		$statement->bindParam(":id_genero", $id_genero);
		$statement->bindParam(":email", $email);
		$statement->bindParam(":id_puesto", $id_puesto);
		$statement->bindParam(":sueldo", $sueldo);

		$statement->execute();

	}

	public function readEmpleado(){

		$rows = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "select e.id_empleado, e.nombre, e.edad, g.genero, e.email, p.puesto, e.sueldo from empleados e inner join genero g on g.id_genero = e.id_genero inner join puesto p on p.id_puesto = e.id_puesto";
		$statement = $conexion->prepare($sql);
		$statement->execute();

		while ($result = $statement->fetch()) {
			$rows[] = $result;
		}

		return $rows;
	}

	public function deleteEmpleado($id_empleado){
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "delete from empleados where id_empleado = :id_empleado";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(":id_empleado", $id_empleado);

		$statement->execute();
	}

	public function loadEmpleado($id_empleado){

		$rows = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "select * from empleados where id_empleado = :id_empleado";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(":id_empleado", $id_empleado);
		$statement->execute();

		while ($result = $statement->fetch()) {
			$rows[] = $result;
		}

		return $rows;

	}

	public function updateEmpleado($campo, $valor, $id_empleado){

		$modelo = new Conexion();
		$conexion = $modelo->getConexion();
		$sql = "update empleados set $campo = :valor where id_empleado = :id_empleado";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(":valor", $valor);
		$statement->bindParam(":id_empleado", $id_empleado);

		$statement->execute();		

	}

}

 ?>