<div class="text-center">
    <a href="#myModal" class="trigger-btn" data-toggle="modal"></a>
</div>

<?php
include('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM solicitud WHERE id ='$id'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$row = pg_fetch_array($result);



$row['id'];
$row['usuario'];
$row['pass'];
$row['perfil'];
$row['correo'];
$row['nombres'];
$row['apellidos'];
$row['telefono'];
$row['cedula'];








?>





<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="bg-dark modal-header text-white">
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="5" value="Modificar la Solicitud">

                <h6 class="modal-title"></h6>

            </div>



            <div class="modal-body">

                <div class="card border mb-3" style="max-width: 50rem;">
                    <div class="card-body text-secondary">
                        <center>
                            <form method="post" action="sql/modificar-administrar.php?id=<?php echo $id; ?>">
                                Id<input class="form-control form-control-sm" type="text" name="edit_id" id="edit_id" placeholder="" readonly value="<?php echo $row['id']; ?>" required>
                                Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario" id="edit_usuario" placeholder="" readonly value="<?php echo $row['usuario']; ?>" required>
                                Gerencia<input class="form-control form-control-sm" type="text" name="edit_gerencia" id="edit_gerencia" placeholder="" readonly value="<?php echo $row['gerencia']; ?>" required>
                                Tipo<input class="form-control form-control-sm" type="text" name="edit_tipo" id="edit_tipo" placeholder="" readonly value="<?php echo $row['tipo']; ?>" required>
                                Solicitada<input class="form-control form-control-sm" type="text" id="edit_solicitada" name="edit_solicitada" readonly value="<?php echo $row['solicitada']; ?>" required>
                                Entregada<input class="form-control form-control-sm" type="text" id="edit_entregada" name="edit_entregada" value="">
                                Hora<input class="form-control form-control-sm" type="text" name="edit_hora" id="edit_hora" placeholder="" readonly value="  
<?php

date_default_timezone_set("America/Caracas");
$hora = date('h:i a', time() - 3600 * date('I'));
print "&nbsp;$hora&nbsp;";

?>" required>


                                <?php


                                $fecha = date("Y-m-d");;


                                ?>


                                Fecha<input class="form-control form-control-sm" type="text" name="edit_fecha" id="edit_fecha" placeholder="" readonly value="<?php echo $fecha; ?>" required>
                                Obsevaciones<input class="form-control form-control-sm" type="text" name="edit_observacion" id="edit_observacion" value="<?php echo $row['observacion']; ?>">
                                <div class="form-group">


                                    <label for="recipient-name" class="col-form-label">Accion</label>
                                    <select class="form-control form-control-sm" placeholder name="edit_accion" required>

                                        <option selected>Solicitud</option>
                                        <option selected>Entregada</option>
                                        <option selected>En Espera</option>



                                    </select>
                                </div>



                                Entregado A <input class="form-control form-control-sm" type="text" name="edit_entregado" id="edit_entregado" placeholder="" value="<?php echo $row['entregado']; ?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer btn btn-dark">
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Editar">
                <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
                <button type="button" class="btn-danger" data-bs-dismiss="modal">NO</button>

                </button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>
</form>







</div>

</div>
</div>
</div>