<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejemplo MVC</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

    </head>
    <body>



        <div class="container-fluid">

            <h3 class="text-center py-3">FRUDOM S.A.S.</h3>

        </div>

        <div class="container-fluid  bg-light">

            <div class="container">

                <ul class="nav nav-justified py-2 nav-pills">


                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro_lote">Crear Lote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio_lote">Ver Lotes</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro_finca">Crear Finca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio_finca">Ver fincas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro_repartidor">Crear repartidor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio_repartidor">Ver repartidores</a>
                    </li>



                </ul>

            </div>

        </div>


        <div class="container-fluid">

            <div class="container py-5">

                <?php
                if (isset($_GET["pagina"])) {

                    if (
                            $_GET["pagina"] == "registro_lote" ||
                            $_GET["pagina"] == "registro_finca" ||
                            $_GET["pagina"] == "registro_repartidor" ||
                            $_GET["pagina"] == "inicio_lote" ||
                            $_GET["pagina"] == "inicio_finca" ||
                            $_GET["pagina"] == "editar_finca" ||
                            $_GET["pagina"] == "editar_lote") {

                        include "paginas/" . $_GET["pagina"] . ".php";
                    } else {

                        include "paginas/error404.php";
                    }
                } else {

                    include "paginas/registro_lote.php";
                }
                ?>

            </div>

        </div>



    </body>
</html>