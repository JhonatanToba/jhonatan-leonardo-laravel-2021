<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de empleados</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$servidor = "127.0.0.1";
			$nombredb= "empleados";
			$user = "root";
			$pass = "";
			$db = New PDO("mysql:host=".$servidor."; dbname=".$nombredb.";", $user, $pass);
			$db->exec("SET CHARACTER SET UTF8");

			function stmt($consulta){
				$resultado = null;
				if (!empty($consulta) ) {
				$resultado = New ArrayObject($consulta->fetchAll(PDO::FETCH_CLASS, "stdClass"));
				}
				return $resultado;
			}
		?>
		<div id=base>
		<?php 

			$sql = $db->query("SELECT * FROM listado");

			$resultado = stmt($sql);
		
			//return ($resultado->count()>0) ? $resultado : false;

			$sql = "INSERT INTO listado VALUES(
			null,
			'".$_POST["codigo"]."',
			'".$_POST["nombre"]."',
			'".$_POST["lugar"]."',
			'".$_POST["fecha"]."',
			'".$_POST["telefono"]."',
			'".$_POST["cargo"]."',
			'".$_POST["estado"]."')"; 

			$stmt = $db->prepare($sql);
			$return = ($stmt->execute()) ? "registrado" : false; 
		?>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<div class="container-fluid">
    			<a class="navbar-brand" href="#listado">Listado</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarNav">
      				<ul class="navbar-nav">
        				<li class="nav-item">
          					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Empleado</button>
       					</li>
					</ul>
				</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  					<div class="modal-dialog">
    					<div class="modal-content">
      						<div class="modal-header">
        						<h5 class="modal-title" id="exampleModalLabel">Adicionar Empleado</h5>
        						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      						</div>
      						<div class="modal-body">
      							<form action="#base" method="post">
      								<label>Ingrese el nombre completo de la persona</label></br>
      								<input type="text" name="nombre" required="" class="form-control"></br>
      								<label>Ingrese la fecha de nacimiento</label></br>
      								<input type="date" name="fecha" required=""class="form-control"></br>
      								<label>Ingrese el lugar de nacimiento</label></br>
      								<input type="text" name="lugar" required=""class="form-control"></br>
      								<label>Ingrese el teléfono</label></br>
      								<input type="number" name="telefono" required=""class="form-control"></br>
      								<label>Ingrese el cargo</label></br>
      								<input type="text" name="cargo" required=""class="form-control"></br>
      								<label>Ingrese el estado</label></br>
      								<input type="text" name="estado" required="" class="form-control"></br>
      								<label>Ingrese el código de empleado</label></br>
      								<input type="number" name="codigo" required=""class="form-control"></br>
      								<div class="modal-footer">
        								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        								<input type="submit" value="Agregar" class="btn btn-primary">
      								</div>	
      							</form>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
		</nav>
		<div class="container" id="listado">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<td>No</td>
								<td>Codigo</td>
								<td>Nombre</td>
								<td>Lugar de Nacimiento</td>
								<td>Fecha de Nacimiento</td>
								<td>Teléfono</td>
								<td>Cargo</td>
								<td>Estado</td>
								<td>Editar</td>
								<td>Eliminar</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								if ($resultado == true) {
									echo "No cuenta con empleados actualmente";

							} ?>
							<?php foreach ($resultado as $titulo => $indice) { ?>
								<tr>
									<td></td>
									<td><?php echo $titulo->codigo ?></td>
									<td><?php echo $titulo->nombre ?></td>
									<td><?php echo $titulo->lugar ?></td>
									<td><?php echo $titulo->fecha ?></td>
									<td><?php echo $titulo->telefono ?></td>
									<td><?php echo $titulo->cargo ?></td>
									<td><?php echo $titulo->estado ?></td>
							<?php } ?>	
									<td>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">Ir</button>
									</td>
									<td>
										<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar">X</button>
									</td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="exampleModalLabel">Edición</h5>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
        					...
      					</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
	        				<input type="submit" value="Editar" class="btn btn-primary">
      					</div>
    				</div>
  				</div>
  			</div>
			<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
        					¿Está seguro de eliminar la información?
      					</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
	        				<input type="submit" value="Eliminar" class="btn btn-danger">
      					</div>
    				</div>
  				</div>
			</div>
		</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
	</body>
</html>