<div class="container-fluid">

    <h3 class="text-center py-3">Registro repartidor</h3>

</div>


<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="id_repartidor">identificacion repartidor:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="id_repartidor" name="id_repartidor">

            </div>

        </div>



        <div class="form-group">
            <label for="nombres">Nombres:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="nombres" name="nombres">

            </div>

        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="direccion" name="direccion">

            </div>

        </div>

        <div class="form-group">
            <label for="telefono">telefono:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="telefono" name="telefono">

            </div>

        </div>

        <?php
        $registro = ControladorFormularios::ctrRegistroRepartidor();

        if ($registro == "ok") {

            echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

            echo '<div class="alert alert-success">repartidor  registrado</div>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>