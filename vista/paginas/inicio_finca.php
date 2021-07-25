<?php
$lotes = ControladorFormularios::ctrSeleccionarRegistrosFinca(null, null);
?>


<table class="table table-striped">
    <thead>
        <tr>
            <th>nombre finca</th>
            <th>direccion</th>
            <th>Cantidad arboles</th>

        </tr>
    </thead>

    <tbody>

<?php foreach ($lotes as $key => $value): ?>

            <tr>

                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["direccion"]; ?></td>
                <td><?php echo $value["cantidad_arboles"]; ?></td>
                <td>

                    <div class="btn-group">

                        <div class="px-1">

                            <a href="index.php?pagina=editar_finca&id=<?php echo $value["id_finca"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                        </div>

                        <form method="post">

                            <input type="hidden" value="<?php echo $value["id_finca"]; ?>" name="eliminar_finca">

                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

    <?php
    $eliminar = new ControladorFormularios();
    $eliminar->ctrEliminarRegistroFinca();
    ?>

                        </form>			

                    </div>


                </td>
            </tr>

<?php endforeach ?>	

    </tbody>
</table>