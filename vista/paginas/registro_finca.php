<div class="container-fluid">

    <h3 class="text-center py-3">Registro Fincas</h3>

</div>


<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="nombre_finca">Nombre finca:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="nombre_finca" name="nombre_finca">

            </div>

        </div>



        <div class="form-group">
            <label for="cantidad_arboles">Cantidad arboles:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </span>
                </div>

                <input type="text" class="form-control" id="cantidad_arboles" name="cantidad_arboles">

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

        <?php
        $registro = ControladorFormularios::ctrRegistroFinca();

        if ($registro == "ok") {

            echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

            echo '<div class="alert alert-success">Finca registrada</div>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>