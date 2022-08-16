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
        <div class="card border-dark mb-3" style="max-width: 120rem;">
            <div class="card-header card text-white bg-dark mb-3">



                <center>

                    <button type="button" title="Crear" class="btn btn-info " data-toggle="" data-target="#" data-whatever="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Usuarios

                    </button>


                    <?php require("sql/conexion.php"); ?>





            </div>
            <div class="card-body text-secondary">
                <button type="button" title="Crear" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
                <table id="example" class="table active border-dark responsive" style="max-width: 85rem" ;>
                    <thead>
                        <tr class="bg-dark text-white">
                            <h4>
                                <td>Id</td>
                                <center>
                                    <td>Usuario</td>
                                    <td>Contraseña</td>
                                    <td>Perfil</td>
                                    <td>Gerencia</td>
                                    <td>Correo</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Telefono</td>
                                    <td>Cedula</td>
                                    <td>Extencion</td>
                                    <td>Enviado</td>
                                    <td>Accion</td>
                            </h4>
                        </tr>
                    </thead>
                    <?php
                    $query = 'SELECT * FROM usuarios ';
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
                                <td><?php echo $mostrar['id'] ?></td>
                                <center>
                                    <center>
                                        <td><?php echo $mostrar['usuario'] ?></td>
                                        <center>
                                            <center>
                                                <td><?php echo $mostrar['pass'] ?></td>
                                                <center>
                                                    <center>
                                                        <td><?php echo $mostrar['perfil'] ?></td>
                                                        <center>
                                                            <center>
                                                                <td><?php echo $mostrar['gerencia'] ?></td>
                                                                <center>
                                                                    <center>
                                                                        <td><?php echo $mostrar['correo'] ?></td>
                                                                        <center>
                                                                            <center>
                                                                                <td><?php echo $mostrar['nombres'] ?></td>
                                                                                <center>
                                                                                    <center>
                                                                                        <td><?php echo $mostrar['apellidos'] ?></td>
                                                                                        <center>
                                                                                            <center>
                                                                                                <td><?php echo $mostrar['telefono'] ?></td>
                                                                                                <center>
                                                                                                    <center>
                                                                                                        <td><?php echo $mostrar['cedula'] ?></td>
                                                                                                        <center>
                                                                                                            <td><?php echo $mostrar['extencion'] ?></td>
                                                                                                            <td><?php echo $mostrar['enviado'] ?></td>
                                                                                                            <td>
                                                                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->








                                                                                                                <a class="btn btn-danger" href="principal-eliminar-usuario.php?id=<?php echo $id; ?>" role="button">&#x274e;</a>

                                                                                                                <!--__________________________________________________________________________________________________________________-->

                                                                                                                <!--_____________________________________BOTON EDITAR_________________________________________________________________-->


                                                                                                                <a class="btn btn-info" href="editar-usuario.php?id=<?php echo $id; ?>" role="button">&#x1f4dd;</a>









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
                        <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value=" Crear Usuario">

                    </div>
                    <div class="modal-body">
                        <div class="card border mb-3" style="max-width: 50rem;">
                            <div class="card-body text-secondary">
                                <center>
                                    <form method="post" action="sql/crear-usuario.php">



                                        Usuario<input class="form-control form-control-sm" type="text" name="usu" id="usu" placeholder="" value="" required>
                                        Contraseña<input class="form-control form-control-sm" type="password" name="pass" id="pass" placeholder="" value="" required>
                                        <?php

                                        $query = 'SELECT * FROM perfil;';
                                        $resulatdo = pg_query($query) or die("error ");
                                        $numReg = pg_num_rows($resulatdo);

                                        ?>

                                        <div class="form-group">


                                            <label for="recipient-name" class="col-form-label">Perfil</label>
                                            <select class="form-control form-control-sm" placeholder name="per" required>
                                                <option selected>Elige una opción</option>
                                                <?php
                                                while ($fila = pg_fetch_array($resulatdo)) {
                                                    echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <?php

                                        $query = 'SELECT * FROM gerencias;';
                                        $resulatdo = pg_query($query) or die("error ");
                                        $numReg = pg_num_rows($resulatdo);

                                        ?>

                                        <div class="form-group">


                                            <label for="recipient-name" class="col-form-label">Gerencia</label>
                                            <select class="form-control form-control-sm" placeholder name="ger" required>
                                                <option selected>Elige una opción</option>
                                                <?php
                                                while ($fila = pg_fetch_array($resulatdo)) {
                                                    echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>





                                        Correo<input class="form-control form-control-sm" type="email" name="cor" id="cor" placeholder="" value="" required>
                                        Nombre<br><input class="form-control form-control-sm" type="text" name="nom" id="nom" placeholder="" value="" required>
                                        Apellido<input class="form-control form-control-sm" type="text" name="ape" id="ape" placeholder="" value="" required>

                                        Telefono<br><input class="form-control form-control-sm" type="tel" name="tel" list="tel">





                                        <datalist id="tel">

                                            <option value="(0414) ">

                                            <option value="(0424) ">

                                            <option value="(0416) ">

                                            <option value="(0426) ">

                                            <option value="(0412) ">

                                        </datalist>

                                        <br>




                                        Cedula<input class="form-control form-control-sm" type="text" name="ced" id="ced" placeholder="" value="" required><br>
                                        Extencion<input class="form-control form-control-sm" type="text" name="extencion" id="extencion" placeholder="" value="" required><br>
                                        Enviado<input class="form-control form-control-sm" type="text" name="enviado" id="enviado" placeholder="" value="" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer btn btn-dark">
                        <input class="btn-submit btn btn-primary btn-sm" type="submit" size="30" value="Crear">
                        <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">

                        <button type="button" class="btn-close btn btn-danger btn-sm" size="35" data-dismiss="modal" value="Cerrar">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        </table>


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