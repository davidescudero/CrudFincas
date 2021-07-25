<?php

class ControladorFormularios {

    static public function ctrRegistroLote() {

        if (isset($_POST["id_lote"])) {

            $tabla = "lote";

            $datos = array("id_lote" => $_POST["id_lote"],
                "cantidad_lote" => $_POST["cantidad_lote"],
                "fecha_recoleccion" => $_POST["fecha_recoleccion"]
            );

            $respuesta = ModeloFormularios::mdlRegistroLote($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrRegistroFinca() {

        if (isset($_POST["nombre_finca"])) {

            $tabla = "finca";

            $datos = array("nombre" => $_POST["nombre_finca"],
                "cantidad_arboles" => $_POST["cantidad_arboles"],
                "direccion" => $_POST["direccion"]
            );

            $respuesta = ModeloFormularios::mdlRegistroFinca($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrRegistroRepartidor() {

        if (isset($_POST["id_repartidor"])) {

            $tabla = "repartidor";

            $datos = array("id_repartidor" => $_POST["id_repartidor"],
                "nombres" => $_POST["nombres"],
                "direccion" => $_POST["direccion"],
                "telefono" => $_POST["telefono"]
            );

            $respuesta = ModeloFormularios::mdlRegistroRepartidor($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros($item, $valor) {

        $tabla = "lote";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }
    
    static public function ctrSeleccionarRegistrosFinca($item, $valor) {

        $tabla = "finca";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistrosFinca($tabla, $item, $valor);

        return $respuesta;
    }


    static public function ctrActualizarRegistroLote() {

        if (isset($_POST["actualizar_id_lote"])) {


            $tabla = "lote";

            $datos = array("id_lote" => $_POST["actualizar_id_lote"],
                "fecha_recoleccion" => $_POST["actualizar_fecha_recoleccion"],
                "cantidad" => $_POST["actualizar_cantidad"]);

            $respuesta = ModeloFormularios::mdlActualizarRegistroLote($tabla, $datos);

            return $respuesta;
        }
    }

    public function ctrEliminarRegistroLote() {

        if (isset($_POST["eliminar_lote"])) {

            $tabla = "lote";
            $valor = $_POST["eliminar_lote"];

            $respuesta = ModeloFormularios::mdlEliminarRegistroLote($tabla, $valor);

            if ($respuesta == "ok") {

                echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio_lote";

				</script>';
            }
        }
    }

    public function ctrEliminarRegistroFinca() {

        if (isset($_POST["eliminar_finca"])) {

            $tabla = "finca";
            $valor = $_POST["eliminar_finca"];

            $respuesta = ModeloFormularios::mdlEliminarRegistroFinca($tabla, $valor);

            if ($respuesta == "ok") {

                echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio_finca";

				</script>';
            }
        }
    }

}
