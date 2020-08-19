<?php 

require_once '../model/class.conexion.php';
require_once '../model/class.empleadosdao.php';

if (isset($_GET['id_empleado'])) {
	$id_empleado = $_GET['id_empleado'];
	$dao = new Empleados();
	$dao->deleteEmpleado($id_empleado);
	header('Location: ../nomina.php');
} else {
	echo "ERROR";
}

 ?>