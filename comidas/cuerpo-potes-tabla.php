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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
                        </svg> Envases

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
                                    <td>Usuario</td>
                                    <td>Gerencia</td>
                                    <td>Cantidad</td>
                                    <td>Fecha</td>
                                    <td>Hora</td>
                                    <td>Accion</td>
                                    <td>Observacion</td>
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
                    $query = "SELECT * FROM potes ";





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
                                        <td><?php echo $mostrar['usuario'] ?></td>
                                        <center>
                                            <center>
                                                <td><?php echo $mostrar['gerencia'] ?></td>
                                                <center>
                                                    <td><?php echo $mostrar['cantidad'] ?></td>
                                                    <center>
                                                        <td><?php echo $mostrar['fecha'] ?></td>
                                                        <center>
                                                            <td><?php echo $mostrar['hora'] ?></td>
                                                            <center>
                                                                <center>
                                                                    <td><?php echo $mostrar['accion'] ?></td>
                                                                    <center>
                                                                        <center>

                                                                            <center>
                                                                                <center>
                                                                                    <td><?php echo $mostrar['observacion'] ?></td>
                                                                                    <center>
                                                                                        <center>

                                                                                            <center>
                                                                                                <center>

                                                                                                    <center>
                                                                                                        <center>

                                                                                                            <center>

                                                                                                                <td>
                                                                                                                    <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->








                                                                                                                    <a class="btn btn-danger" href="principal-eliminar-potes.php?id=<?php echo $id; ?>" role="button">&#x274e;</a>

                                                                                                                    <!--__________________________________________________________________________________________________________________-->

                                                                                                                    <!--_____________________________________BOTON EDITAR_________________________________________________________________-->


                                                                                                                    <a class="btn btn-info" href="principal-editar-potes.php?id=<?php echo $id; ?>" role="button">&#x1f4dd;</a>









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
                        <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Control de Envases">

                    </div>
                    <div class="modal-body">
                        <div class="card border mb-3" style="max-width: 50rem;">
                            <div class="card-body text-secondary">
                                <center>
                                    <form method="post" action="sql/crear-potes.php">

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
                                                <option selected>Elige una opci??n</option>
                                                <?php
                                                while ($fila = pg_fetch_array($resulatdo)) {
                                                    echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <?php $fecha = date("Y-m-d"); ?>
                                        Fecha<input class="form-control form-control-sm" type="text" id="fecha" name="fecha" value="<?php echo $fecha ?>" required readonly>





                                        Cantidad<input class="form-control form-control-sm" type="number" min="1" name="cantidad" id="cantidad" placeholder="" value="" required>

                                        Hora<input class="form-control form-control-sm" type="text" name="hora" id="hora" placeholder="" value="<?php date_default_timezone_set("America/Caracas");
                                                                                                                                                $hora = date('h:i a', time() - 3600 * date('I'));
                                                                                                                                                print "&nbsp;$hora&nbsp;"; ?>" required>
                                        Accion<input class="form-control form-control-sm" type="text" name="accion" id="accion" placeholder="" readonly value="Entrega" required><br>
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

        $query2 = "SELECT * from potes ";
        $resulatdo2 = pg_query($query2) or die("error ");
        $numReg2 = pg_num_rows($resulatdo2);

        ?>

        <?php
        $total = 0;
        while ($fila2 = pg_fetch_assoc($resulatdo2)) {
            $total +=  $fila2['cantidad'];
        }
        ?>
















































        <a href="reporte/total-potes.php?gerencia=<?php echo $gerencia; ?>" title="Stock de Comidas" target="_blank">

            <button type="button" title="Crear" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">Total envases= <?php

                                                                                                                                                    echo " $total";
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