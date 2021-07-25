<?php

$lotes = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>


<table class="table table-striped">
	<thead>
		<tr>
			<th>identificador de lote</th>
			<th>fecha de recoleccion</th>
			<th>Cantidad de mangos recolectados</th>
			
		</tr>
	</thead>

	<tbody>

	<?php foreach ($lotes as $key => $value): ?>

		<tr>
			
			<td><?php echo $value["id_lote"]; ?></td>
			<td><?php echo $value["fecha_recoleccion"]; ?></td>
			<td><?php echo $value["cantidad"]; ?></td>
			<td>

			<div class="btn-group">

				<div class="px-1">
				
				<a href="index.php?pagina=editar_lote&id=<?php echo $value["id_lote"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

				</div>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id_lote"]; ?>" name="eliminar_lote">
					
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistroLote();

					?>

				</form>			

			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>