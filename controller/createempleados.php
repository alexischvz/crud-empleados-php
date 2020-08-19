<?php 

require_once '../model/class.conexion.php';
require_once '../model/class.empleadosdao.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];

if(isset($nombre) && isset($edad) && isset($genero) && isset($email) && isset($puesto) && isset($sueldo)){
	$dao = new Empleados();
	$dao->createEmpleado($nombre, $edad, $genero, $email, $puesto, $sueldo);
	header('Location: ../nomina.php');
}else{
	echo "ERROR";
}

 ?>