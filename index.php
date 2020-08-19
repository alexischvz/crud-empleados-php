<?php

require_once 'model/class.conexion.php';
require_once 'model/class.generodao.php';
require_once 'model/class.puestodao.php';
require_once 'controller/readgeneros.php';
require_once 'controller/readpuesto.php';

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Registro</title>
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
		<div class="jumbotron rounded-0 bg-primary">
			<h1 class="text-center display-4 text-light">Registro de Empleados</h1>
		</div>		
	</header>

	<section>

		<div class="container mt-5 mb-5">
			<div class="card">
				<div class="card-header">
					<h6 class="card-title text-center">Rellene todos los campos</h6>
				</div>
				<form action="controller/createempleados.php" method="post">
					<div class="card-body">
					
						<div class="row mb-3">
							<div class="input-group input-group-sm col-6">
								<div class="input-group-prepend">
									<span class="input-group-text">Nombre Completo</span>
								</div>
								<input type="text" name="nombre" class="form-control">			
							</div>

							<div class="input-group input-group-sm col-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Edad</span>
								</div>
								<input type="text" name="edad" value="" placeholder="" class="form-control">
							</div>

							<div class="input-group input-group-sm col-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Genero</span>
								</div>
								<select name="genero" class="custom-select">
									<option value="">Seleccione...</option>}
 									<?php

									foreach ($generos as $genero) { ?>
											
										<option value=<?php echo $genero['id_genero'] ?>>
											<?php echo $genero['genero'] ?>
										</option>

									<?php } ?>

								</select>
							</div>
						</div>

						<div class="row">
							
							<div class="input-group input-group-sm col-6">
								<div class="input-group-prepend">
									<span class="input-group-text">E-mail</span>
								</div>
								<input type="email" name="email" value="" placeholder="" class="form-control">
							</div>

							<div class="input-group input-group-sm col-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Puesto</span>
								</div>
								<select name="puesto" class="custom-select">
									<option value="">Seleccione...</option>}
 									<?php

									foreach ($puestos as $puesto) { ?>
											
										<option value=<?php echo $puesto['id_puesto'] ?>>
											<?php echo $puesto['puesto'] ?>
										</option>

									<?php } ?>
								</select>
							</div>

							<div class="input-group input-group-sm col-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Sueldo</span>
									<span class="input-group-text">$</span>
								</div>
								<input type="text" name="sueldo" value="" placeholder="" class="form-control">
							</div>
						</div>
					</div>

					<div class="card-footer">
						<input type="submit" value="Guardar Datos" class="btn btn-sm btn-success">
						<a href="nomina.php" class="btn btn-sm btn-info">Ver Nomina</a>
					</div>
				</form>
				
			</div>
		</div>
		
	</section>

	<footer>
		
	</footer>

</body>

</html>