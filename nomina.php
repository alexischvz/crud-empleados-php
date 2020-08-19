<?php 

require_once 'model/class.conexion.php';
require_once 'model/class.empleadosdao.php';
require_once 'controller/readempleados.php';

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Nomina</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icon/icon.css">
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>

	<header>
		<div class="jumbotron bg-dark rounded-0">
			<h1 class="display-4 text-center text-light">Nomina de Empleados</h1>
		</div>
	</header>

	<section>

		<div class="container">
			<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre de Empleado</th>
						<th>Edad</th>
						<th>Genero</th>
						<th>Email</th>
						<th>Puesto</th>
						<th>Sueldo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($datos as $dato) { ?>
						
						<tr>
							<td><?php echo $dato['id_empleado'] ?></td>
							<td><?php echo $dato['nombre'] ?></td>
							<td><?php echo $dato['edad'] ?></td>
							<td><?php echo $dato['genero'] ?></td>
							<td><?php echo $dato['email'] ?></td>
							<td><?php echo $dato['puesto'] ?></td>
							<td><?php echo $dato['sueldo'] ?></td>
							<td>
								<a href="controller/deleteempleados.php?id_empleado=<?php echo $dato['id_empleado'] ?>" class="btn btn-outline-danger btn-sm icon-bin"></a>
								<a href="update-nomina.php?id_empleado=<?php echo $dato['id_empleado'] ?>" class="btn btn-outline-primary btn-sm icon-pencil"></a>
							</td>
						</tr>

					<?php } ?>
					
				</tbody>
			</table>

			<div class="row">
				<a href="index.php" class="btn btn-success btn-sm ml-3">Nuevo Registro</a>
			</div>
		</div>
		
	</section>

	<footer>
		
	</footer>

</body>

</html>