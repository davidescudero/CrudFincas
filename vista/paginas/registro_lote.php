<div class="container-fluid">

    <h3 class="text-center py-3">Registro Lotes</h3>

</div>


<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="nombre_lote">Identificador lote:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="id_lote" name="id_lote">

            </div>

        </div>



        <div class="form-group">
            <label for="cantidad_lote">Cantidad:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="cantidad_lote" name="cantidad_lote">

            </div>

        </div>

        <div class="form-group">
            <label for="fecha_recoleccion">Fecha recoleccion:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="date" class="form-control" id="fecha_recoleccion" name="fecha_recoleccion">

            </div>

        </div>

        <?php
        $registro = ControladorFormularios::ctrRegistroLote();

        if ($registro == "ok") {

            echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

            echo '<div class="alert alert-success">Lote registrado</div>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>