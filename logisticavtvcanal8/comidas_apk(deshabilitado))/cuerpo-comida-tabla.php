<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <title>Arepera VTV</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

<body class="">




    </head>


    <center>
        <div class="card border-dark mb-3" style="max-width: 28rem;">
            <div class="card-header card text-white bg-dark mb-3">



                <center>

                    <button type="button" title="Crear" class="btn btn-info " data-toggle="" data-target="#" data-whatever="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg> COMIDAS

                    </button>


                    <?php require("sql/conexion.php"); ?>





            </div>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <div class="card-body text-secondary">
                <button type="button" title="Crear" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
                <table id="example" class="table active border-dark responsive" style="max-width: 25rem" ;>
                    <thead>
                        <tr class="bg-dark text-white">
                            <h4>

                                <center>


                                    <td>Tipo</td>
                                    <td>Cantidad</td>

                                    <td>Fecha</td>



                                    <td>Opcion</td>
                            </h4>
                        </tr>
                    </thead>
                    <?php

                    $usuario = $_SESSION['usuario'];



                    $query1 = "SELECT gerencia FROM usuarios WHERE usuario ='$usuario'";
                    $result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
                    $row = pg_fetch_array($result1);



                    $row['gerencia'];



                    session_start();
                    $_SESSION['gerencia'] = $row['gerencia'];
                    $gerencia = $_SESSION['gerencia'];

                    ?>
                    <?php
                    $query = "SELECT * FROM  solicitud  where '$gerencia'=gerencia";
                    //$query = 'SELECT * FROM solicitud ';
                    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
                    while ($mostrar = pg_fetch_array($result)) {
                        $id = $mostrar['id'];
                        $usu = $mostrar['usuario'];
                        $pass = $mostrar['pass'];
                        $per = $mostrar['perfil'];
                        $cor = $mostrar['correo'];
                        $nom = $mostrar['nombre'];
                        $ape = $mostrar['apellido'];
                        $tel = $mostrar['telefono'];
                        $ced = $mostrar['cedula'];
                    ?>

                        <tr>
                            <center>

                                <center>
                                    <center>

                                        <center>
                                            <center>

                                                <center>
                                                    <td><?php echo $mostrar['tipo'] ?></td>
                                                    <center>
                                                        <td><?php echo $mostrar['solicitada'] ?></td>
                                                        <center>

                                                            <center>

                                                                <center>
                                                                    <center>
                                                                        <td><?php echo $mostrar['fecha'] ?></td>
                                                                        <center>
                                                                            <center>

                                                                                <center>
                                                                                    <center>

                                                                                        <center>
                                                                                            <center>

                                                                                                <center>
                                                                                                    <center>

                                                                                                        <center>

                                                                                                            <td>
                                                                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->








                                                                                                                <a class="btn btn-danger" href="principal-eliminar-solicitud.php?id=<?php echo $id; ?>" role="button">&#x274e;</a>

                                                                                                                <!--__________________________________________________________________________________________________________________-->

                                                                                                                <!--_____________________________________BOTON EDITAR_________________________________________________________________-->

                                                                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->
                                                                                                                <a class="btn btn-info" href="editar-comida.php?id=<?php echo $id; ?>" role="button">&#x1f4dd;</a>









                                                                                                                <!--__________________________________________________________________________________________________________________-->







            </div>
        </div>

        </form>

        </td>
        <center>
            </tr>

        <?php
                    }
        ?>





















        <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  mb-3" role="document">
                <div class="modal-content">
                    <!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


                    <div class="modal-header btn btn-dark mb-3">
                        <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value=" Crear Solicitud">

                    </div>
                    <div class="modal-body">
                        <div class="card border mb-3" style="max-width: 50rem;">
                            <div class="card-body text-secondary">
                                <center>
                                    <form method="post" action="sql/crear-solicitud.php">

                                        Usuario<input class="form-control form-control-sm" type="text" name="usuario" id="usuario" placeholder="" readonly value="<?php echo  $_SESSION['usuario']; ?>" required>

                                        <?php

                                        $usuario = $_SESSION['usuario'];



                                        $query1 = "SELECT gerencia FROM usuarios WHERE usuario ='$usuario'";
                                        $result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
                                        $row = pg_fetch_array($result1);



                                        $row['gerencia'];



                                        session_start();
                                        $_SESSION['gerencia'] = $row['gerencia'];


                                        ?>



                                        Gerencia<input class="form-control form-control-sm" type="text" name="gerencia" id="gerencia" placeholder="" readonly value="<?php echo $_SESSION['gerencia']; ?>" required>




                                        <div class="form-group">


                                            <label for="recipient-name" class="col-form-label">Tipo</label>
                                            <select class="form-control form-control-sm" placeholder name="tipo" required>
                                                <option selected>Merienda</option>
                                                <option selected>Cena</option>
                                                <option selected>Almuerzo</option>
                                                <option selected>Desayuno</option>
                                            </select>
                                        </div>


                                        Solicitar<input class="form-control form-control-sm" type="number" min="1" name="solicitada" id="solicitada" placeholder="" value="" required>
                                        Fecha<input class="form-control form-control-sm" type="date" id="fecha" name="fecha" required>
                                        Hora<input class="form-control form-control-sm" type="text" name="hora" id="hora" placeholder="" readonly value="<?php date_default_timezone_set("America/Caracas");
                                                                                                                                                            $hora = date('h:i a', time() - 3600 * date('I'));
                                                                                                                                                            print "&nbsp;$hora&nbsp;"; ?>" required>







                                        Accion<input class="form-control form-control-sm" type="text" name="accion" id="accion" placeholder="" readonly value="Solicitud" required><br>
                                        Obsevaciones<textarea class="form-control form-control-sm" name="observacion" id="observacion"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer btn btn-dark">
                        <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Crear">
                        <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
                        <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        </table>


        <?php

        $usuario = $_SESSION['usuario'];



        $query1 = "SELECT gerencia FROM usuarios WHERE usuario ='$usuario'";
        $result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
        $row = pg_fetch_array($result1);



        $row['gerencia'];



        session_start();
        $_SESSION['gerencia'] = $row['gerencia'];
        $gerencia = $row['gerencia'];

        ?>





        <?php

        $query = "SELECT * from solicitud where '$gerencia'=gerencia";
        $resulatdo = pg_query($query) or die("error ");
        $numReg = pg_num_rows($resulatdo);

        ?>


        <?php
        $total = 0;
        while ($fila = pg_fetch_assoc($resulatdo)) {

            $total +=  $fila['solicitada'];
        }
        ?>



        <?php



        $query1 = "SELECT * from solicitud where 'Desayuno'=tipo and'$gerencia'=gerencia";

        //$query1 = "SELECT * from solicitud where 'Desayuno'=tipo";

        $resulatdo1 = pg_query($query1) or die("error ");

        ?>

        <?php
        $desayunos = 0;
        while ($fila1 = pg_fetch_assoc($resulatdo1)) {

            $desayunos +=  $fila1['solicitada'];
        }
        ?>


        <?php

        $query2 = "SELECT * from solicitud where 'Almuerzo'=tipo and'$gerencia'=gerencia";

        $resulatdo2 = pg_query($query2) or die("error ");
        $numReg2 = pg_num_rows($resulatdo2);

        ?>





        <?php
        $almuerzos = 0;
        while ($fila2 = pg_fetch_assoc($resulatdo2)) {

            $almuerzos +=  $fila2['solicitada'];
        }
        ?>
        <?php

        $query3 = "SELECT * from solicitud where 'Cena'=tipo and'$gerencia'=gerencia";

        $resulatdo3 = pg_query($query3) or die("error ");
        $numReg3 = pg_num_rows($resulatdo3);

        ?>





        <?php
        $cenas = 0;
        while ($fila3 = pg_fetch_assoc($resulatdo3)) {

            $cenas +=  $fila3['solicitada'];
        }
        ?>

        <a href="reporte/comidas.php?gerencia=<?php echo $gerencia; ?>" title="Stock de Comidas" target="_blank">





            <button type="button" title="Crear" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">TOTAL = <?php

                                                                                                                                                echo "$total";
                                                                                                                                                ?></button>
        </a>




        <a href="reporte/total-desayunos.php?gerencia=<?php echo $gerencia; ?>" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Desayunos = <?php

                                                                                                                                                echo "$desayunos";
                                                                                                                                                ?></button>
        </a>

        <a href="reporte/total-almuerzos.php?gerencia=<?php echo $gerencia; ?>" title="Stock de Comidas" target="_blank">

            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Almuerzos = <?php

                                                                                                                                                echo " $almuerzos";
                                                                                                                                                ?></button>

        </a>



        <a href="reporte/total-cenas.php?gerencia=<?php echo $gerencia; ?>" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">CENAS = <?php

                                                                                                                                            echo "$cenas";
                                                                                                                                            ?></button>



        </a>

        <br><br>
        <button type="button" title="Crear" class="btn btn-dark btn-sm" data-toggle="#" data-target="#" data-whatever="">
            <?php


            echo  date("d-m-Y");

            ?>






            <?php

            date_default_timezone_set("America/Caracas");
            $hora = date('h:i a', time() - 3600 * date('I'));
            print "&nbsp;$hora&nbsp;";

            ?>
        </button>


        </div>
        </div>



</body>
<center>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>



    <script>
        //Idiomas con el 1er m??todo   
        /* $(document).ready(function() {
             $('#example').DataTable({
                 "language": {
                     "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                 }

             });
         });*/
        //Idiomas con el 2do m??todo   
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: {
                    breakpoints: [{
                            name: 'bigdesktop',
                            width: Infinity
                        },
                        {
                            name: 'meddesktop',
                            width: 1480
                        },
                        {
                            name: 'smalldesktop',
                            width: 1280
                        },
                        {
                            name: 'medium',
                            width: 1188
                        },
                        {
                            name: 'tabletl',
                            width: 1024
                        },
                        {
                            name: 'btwtabllandp',
                            width: 848
                        },
                        {
                            name: 'tabletp',
                            width: 768
                        },
                        {
                            name: 'mobilel',
                            width: 480
                        },
                        {
                            name: 'mobilep',
                            width: 320
                        }
                    ]
                }



                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ning??n dato disponible =(",
                    "sInfo": "Registros _START_ al _END_ de   _TOTAL_ ",
                    "sInfoEmpty": "Mostrando 0 al 0 de un de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "??ltimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                }
            });
        });
    </script>