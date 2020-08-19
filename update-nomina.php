<?php 

require_once 'model/class.conexion.php';
require_once 'model/class.empleadosdao.php';
require_once 'model/class.generodao.php';
require_once 'model/class.puestodao.php';
require_once 'controller/readgeneros.php';
require_once 'controller/readpuesto.php';

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Actualizar</title>
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
		<div class="jumbotron rounded-0 bg-success">
			<h1 class="text-center display-4 text-light">Actualizacion de Nomina</h1>
		</div>		
	</header>

	<section>

		<div class="container mt-5 mb-5">
			<div class="card">
				<div class="card-header">
					<h6 class="card-title text-center">Actualize los campos</h6>
				</div>

				<?php
				if (isset($_GET['id_empleado'])) {
				 	$dao = new Empleados();
				 	$id_empleado = $_GET['id_empleado'];
				 	$load = $dao->loadEmpleado($id_empleado); 

				 	?>

				 	<?php
				 	foreach($load as $loa) { ?>
				 	 	
						<form action="controller/updateempleados.php" method="post">
							<div class="card-body">
							
							<input type="hidden" name="id_empleado" value="<?php echo $loa['id_empleado'] ?>">
							<div class="row mb-3">
								<div class="input-group input-group-sm col-6">
									<div class="input-group-prepend">
										<span class="input-group-text">Nombre Completo</span>
									</div>
									<input type="text" name="nombre" value="<?php echo $loa['nombre'] ?>" class="form-control">			
								</div>

								<div class="input-group input-group-sm col-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Edad</span>
									</div>
									<input type="text" name="edad" value="<?php echo $loa['edad'] ?>" placeholder="" class="form-control">
								</div>

								<div class="input-group input-group-sm col-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Genero</span>
									</div>
									<select name="genero" class="custom-select">

										<?php

										foreach ($generos as $genero) { ?>
											
											<?php
											if ($genero['id_genero'] == $loa['id_genero']) { ?>

												<option value="<?php echo $genero['id_genero'] ?>" selected="">
													<?php echo $genero['genero'] ?>
												</option>

											<?php } else { ?>

												<option value="<?php echo $genero['id_genero'] ?>">
													<?php echo $genero['genero'] ?>
												</option>

											<?php } ?>

										<?php } ?>

									</select>
								</div>
							</div>

							<div class="row">
							
								<div class="input-group input-group-sm col-6">
									<div class="input-group-prepend">
										<span class="input-group-text">E-mail</span>
									</div>
									<input type="email" name="email" value="<?php echo $loa['email'] ?>" placeholder="" class="form-control">
								</div>

								<div class="input-group input-group-sm col-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Puesto</span>
									</div>
									<select name="puesto" class="custom-select">
										
										<?php

										foreach ($puestos as $puesto) { ?>
											
											<?php
											if ($puesto['id_puesto'] == $loa['id_puesto']) { ?>

												<option value="<?php echo $puesto['id_puesto'] ?>" selected="">
													<?php echo $puesto['puesto'] ?>
												</option>

											<?php } else { ?>

												<option value="<?php echo $puesto['id_puesto'] ?>">
													<?php echo $puesto['puesto'] ?>
												</option>

											<?php } ?>

										<?php } ?>
 										
									</select>
								</div>

								<div class="input-group input-group-sm col-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Sueldo</span>
										<span class="input-group-text">$</span>
									</div>
									<input type="text" name="sueldo" value="<?php echo $loa['sueldo'] ?>" placeholder="" class="form-control">
								</div>
							</div>
						</div>

					<div class="card-footer">
						<input type="submit" value="Actualizar Datos" class="btn btn-sm btn-success">
						<a href="nomina.php" class="btn btn-sm btn-info">Ver Nomina</a>
					</div>
				</form>

					<?php } ?>
				 
				<?php } ?>
				
			</div>
		</div>
		
	</section>

	<footer>
		
	</footer>

</body>

</html>