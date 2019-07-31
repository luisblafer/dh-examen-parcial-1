<?php
	require_once 'autoload.php';


	if ($_POST) {
        if ($_POST['nombre'] != null){
         $consultaAGuardar = new Consulta($_POST['nombre'], $_POST['consulta']);
         $saved = DB::saveConsulta($consultaAGuardar);
        } else {
            echo 'alert';
        }

	 	
	}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Cargar Pregunta</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Crear película</h2>
					<form method="post">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Nombre</label>
									<input type="text" class="form-control" placeholder="Ingrese su nombre" name="nombre">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label>Consulta</label>
									<input type="text" class="form-control" placeholder="Ingrese su consulta aquí..." name="consulta">
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Consulta guarda con éxito!' : '¡No se pudo guardar la consulta!' ?>
				</div>
			<?php endif; ?>
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>