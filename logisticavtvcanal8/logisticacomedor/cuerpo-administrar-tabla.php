<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Arepera VTV</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

<body class="">




    </head>


    <center>
        <div class="card border-dark mb-3" style="max-width: 85rem;">
            <div class="card-header card text-white bg-dark mb-3">



                <center>

                    <button type="button" title="Crear" class="btn btn-info " data-toggle="" data-target="#" data-whatever="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock" viewBox="0 0 16 16">
                            <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224zM6.105 8.125A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3c0-.042.02-.107.105-.175z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                        </svg> ADMINISTRAR COMIDAS

                    </button>





                    <?php require("sql/conexion.php"); ?>





            </div>
            <div class="card-body text-secondary">
                <button type="button" title="Crear" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
                <table id="example" class="table active border-dark responsive" style="max-width: 80rem" ;>
                    <thead>
                        <tr class="bg-dark text-white">
                            <h4>

                                <center>

                                    <td>Gerencia</td>
                                    <td>Tipo</td>
                                    <td>Solicitada</td>
                                    <td>Entregada</td>
                                    <td>Hora</td>
                                    <td>Fecha</td>
                                    <td>Observaciones</td>

                                    <td>Entregado A</td>
                                    <td>Accion</td>
                                    <td>Opciones</td>
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


                    $fecha = date("Y-m-d");


                    ?>





















                    <?php
                    //$query = "SELECT * FROM  solicitud  where '$gerencia'=gerencia";
                    //$query = "SELECT * FROM solicitud ";
                    $query = "SELECT * FROM solicitud where fecha ='$fecha' ";
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
                                                <td><?php echo $mostrar['gerencia'] ?></td>
                                                <center>
                                                    <td><?php echo $mostrar['tipo'] ?></td>
                                                    <center>
                                                        <td><?php echo $mostrar['solicitada'] ?></td>
                                                        <center>
                                                            <td><?php echo $mostrar['entregada'] ?></td>

                                                            <center>
                                                                <td><?php echo $mostrar['hora'] ?></td>
                                                                <center>
                                                                    <center>
                                                                        <td><?php echo $mostrar['fecha'] ?></td>
                                                                        <center>
                                                                            <center>
                                                                                <td><?php echo $mostrar['observacion'] ?></td>
                                                                                <center>
                                                                                    <center>
                                                                                        <td><?php echo $mostrar['entregado'] ?></td>
                                                                                        <center>
                                                                                            <center>
                                                                                                <td><?php echo $mostrar['accion'] ?></td>
                                                                                                <center>
                                                                                                    <center>

                                                                                                        <center>

                                                                                                            <td>
                                                                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->




                                                                                                                <a class="btn btn-danger" href="principal-eliminar-administrar.php?id=<?php echo $id; ?>" role="button">&#x274e;</a>





                                                                                                                <!--__________________________________________________________________________________________________________________-->

                                                                                                                <!--_____________________________________BOTON EDITAR_________________________________________________________________-->


                                                                                                                <a class="btn btn-info" href="editar-administrar.php?id=<?php echo $id; ?>" role="button">&#x1f4dd;</a>









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
                                    <form method="post" action="sql/administrar-solicitud.php">

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





                                        <?php

                                        $query = 'SELECT * FROM gerencias;';
                                        $resulatdo = pg_query($query) or die("error ");
                                        $numReg = pg_num_rows($resulatdo);

                                        ?>

                                        <div class="form-group">


                                            <label for="recipient-name" class="col-form-label">Gerencia</label>
                                            <select class="form-control form-control-sm" placeholder name="gerencia" required>
                                                <option selected>Elige una opción</option>
                                                <?php
                                                while ($fila = pg_fetch_array($resulatdo)) {
                                                    echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>


                                        <div class="form-group">


                                            <label for="recipient-name" class="col-form-label">Tipo</label>
                                            <select class="form-control form-control-sm" placeholder name="tipo" required>
                                                <option selected>Elige una opción</option>
                                                <option selected>Desayuno</option>
                                                <option selected>Almuerzo</option>
                                                <option selected>Cena</option>
                                                <option selected>Merienda</option>
                                                <option selected>Elige una opción</option>

                                            </select>
                                        </div>


                                        Solicitada<input class="form-control form-control-sm" type="number" min="1" name="solicitada" id="solicitada" placeholder="" value="" required>
                                        Fecha<input class="form-control form-control-sm" type="date" id="fecha" name="fecha" required>
                                        Hora<input class="form-control form-control-sm" type="text" name="hora" id="hora" placeholder="" value="<?php date_default_timezone_set("America/Caracas");
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

        $query = "SELECT * from solicitud where fecha ='$fecha'";
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


        //$query1 = "SELECT * FROM solicitud ";
        $query1 = "SELECT * FROM solicitud where 'Desayuno'=tipo and  fecha ='$fecha'";

        $resulatdo1 = pg_query($query1) or die("error ");
        $numReg1 = pg_num_rows($resulatdo1);

        ?>

        <?php
        $total2 = 0;
        while ($fila1 = pg_fetch_assoc($resulatdo1)) {

            $total2 +=  $fila1['solicitada'];
        }
        ?>


        <?php

        // $query2 = "SELECT * from solicitud where 'Almuerzo'=tipo";
        $query2 = "SELECT * from solicitud where 'Almuerzo'=tipo and fecha ='$fecha'";
        $resulatdo2 = pg_query($query2) or die("error ");
        $numReg2 = pg_num_rows($resulatdo2);

        ?>





        <?php
        $total3 = 0;
        while ($fila2 = pg_fetch_assoc($resulatdo2)) {

            $total3 +=  $fila2['solicitada'];
        }
        ?>
        <?php

        $query3 = "SELECT * from solicitud where 'Cena'=tipo and fecha ='$fecha'";

        $resulatdo3 = pg_query($query3) or die("error ");
        $numReg3 = pg_num_rows($resulatdo3);

        ?>





        <?php
        $total4 = 0;
        while ($fila3 = pg_fetch_assoc($resulatdo3)) {

            $total4 +=  $fila3['solicitada'];
        }
        ?>


        <?php

        $query8 = "SELECT * from solicitud where 'Desayuno'=tipo and fecha ='$fecha'";

        $resulatdo8 = pg_query($query8) or die("error ");
        $numReg8 = pg_num_rows($resulatdo8);

        ?>
        <?php
        $total8 = 0;
        while ($fila8 = pg_fetch_assoc($resulatdo8)) {

            $total8 +=  $fila8['entregada'];
        }
        ?>
        <?php

        $query88 = "SELECT * from solicitud where 'Almuerzo'=tipo and fecha ='$fecha'";

        $resulatdo88 = pg_query($query88) or die("error ");
        $numReg88 = pg_num_rows($resulatdo88);

        ?>
        <?php
        $total88 = 0;
        while ($fila88 = pg_fetch_assoc($resulatdo88)) {

            $total88 +=  $fila88['entregada'];
        }
        ?>

        <?php

        $query888 = "SELECT * from solicitud where 'Cena'=tipo and fecha ='$fecha'";

        $resulatdo888 = pg_query($query888) or die("error ");
        $numReg888 = pg_num_rows($resulatdo888);

        ?>
        <?php
        $total888 = 0;
        while ($fila888 = pg_fetch_assoc($resulatdo888)) {

            $total888 +=  $fila888['entregada'];
        }
        ?>


        <?php

        $query80 = "SELECT * from solicitud where fecha ='$fecha'";

        $resulatdo80 = pg_query($query80) or die("error ");
        $numReg80 = pg_num_rows($resulatdo80);

        ?>
        <?php
        $total80 = 0;
        while ($fila80 = pg_fetch_assoc($resulatdo80)) {

            $total80 +=  $fila80['entregada'];
        }
        ?>





















        <a href="reporte/total-total.php" title="Stock de Comidas" target="_blank">





            <button type="button" title="Crear" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">SOLICITADAS = <?php

                                                                                                                                                    echo "$total";
                                                                                                                                                    ?></button>
        </a>






        <a href="reporte/total-desa.php" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Desayunos = <?php

                                                                                                                                                echo "$total2";
                                                                                                                                                ?></button>
        </a>

        <a href="reporte/total-alm.php" title="Stock de Comidas" target="_blank">

            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Almuerzos = <?php

                                                                                                                                                echo "$total3";
                                                                                                                                                ?></button>

        </a>



        <a href="reporte/total-ce.php" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">CENAS = <?php

                                                                                                                                            echo "$total4";
                                                                                                                                            ?></button>



        </a><br><br>

        <a href="reporte/total-total-entregada.php" title="Stock de Comidas" target="_blank">





            <button type="button" title="Crear" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">ENTREGADAS = <?php

                                                                                                                                                    echo "$total80";
                                                                                                                                                    ?></button>
        </a>



        <a href="reporte/total-desa-entregadas.php" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Desayunos = <?php

                                                                                                                                                    echo "$total8";
                                                                                                                                                    ?></button>
        </a>

        <a href="reporte/total-alm-entregadas.php" title="Stock de Comidas" target="_blank">

            <button type="button" title="Crear" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Almuerzos = <?php

                                                                                                                                                    echo "$total88";
                                                                                                                                                    ?></button>

        </a>



        <a href="reporte/total-ce-entregadas.php" title="Stock de Comidas" target="_blank">
            <button type="button" title="Crear" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">CENAS = <?php

                                                                                                                                                echo "$total888";
                                                                                                                                                ?></button>



        </a>

        <br><br>
        <button type="button" title="Crear" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">
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
        //Idiomas con el 1er método   
        /* $(document).ready(function() {
             $('#example').DataTable({
                 "language": {
                     "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                 }

             });
         });*/
        //Idiomas con el 2do método   
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible =(",
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
                        "sLast": "Último",
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