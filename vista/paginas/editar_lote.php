<?php
if (isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET["id"];

    $lote = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>


<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="id_lote">Identificador de Lote:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                <input type="text" class="form-control" value="<?php echo $lote["id_lote"]; ?>"  id="id_lote" name="actualizar_id_lote">
                <input type="hidden" name="idProducto" value="<?php echo $lote["id_lote"]; ?>">
            </div>

        </div>


        <div class="form-group">
            <label for="nombre">fecha de recoleccion:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="date" class="form-control" value="<?php echo $lote["fecha_recoleccion"]; ?>"  id="fecha_recoleccion" name="actualizar_fecha_recoleccion">


            </div>

        </div>

        <div class="form-group">
            <label for="nombre">Cantidad:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" value="<?php echo $lote["cantidad"]; ?>"  id="cantidad" name="actualizar_cantidad">


            </div>

        </div>		



<?php
$actualizar = ControladorFormularios::ctrActualizarRegistroLote();

if ($actualizar == "ok") {

    echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

    echo '<div class="alert alert-success">Lote actualizado</div>


			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=registro_lote";

				},2000);

			</script>

			';
}
?>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>

</div>