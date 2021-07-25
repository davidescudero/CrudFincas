<?php

require_once "../controlador/controlador.php";
require_once "../modelo/modelo.php";
$productos = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>


<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre Producto</th>

		</tr>
	</thead>

	<tbody>

	<?php foreach ($productos as $key => $value): ?>

		<tr>
			<td><?php echo $value["id_producto"]; ?></td>
			<td><?php echo $value["nombre_producto"]; ?></td>
		
			<td>

			<div class="btn-group">

				<div class="px-1">
				
				<a href="index.php?pagina=editar&id=<?php echo $value["id_producto"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

				</div>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id_producto"]; ?>" name="eliminarProducto">
					
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();

					?>

				</form>			

			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>