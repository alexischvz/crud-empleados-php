<?php 

require_once '../model/class.conexion.php';
require_once '../model/class.empleadosdao.php';


$id_empleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];

if (isset($id_empleado)) {
	$dao = new Empleados();
	$dao->updateEmpleado("nombre",$nombre,$id_empleado);
	$dao->updateEmpleado("edad",$edad,$id_empleado);
	$dao->updateEmpleado("id_genero",$genero,$id_empleado);
	$dao->updateEmpleado("email",$email,$id_empleado);
	$dao->updateEmpleado("id_puesto",$puesto,$id_empleado);
	$dao->updateEmpleado("sueldo",$sueldo,$id_empleado);

	header('Location: ../nomina.php');
}

 ?>