<div class="text-center">
    <a href="#myModal" class="trigger-btn" data-toggle="modal"></a>
</div>

<?php
include('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM botellon WHERE id ='$id'";
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
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="5" value="Modificar la Solicitud de botellones">

                <h6 class="modal-title"></h6>

            </div>



            <div class="modal-body">

                <div class="card border mb-3" style="max-width: 50rem;">
                    <div class="card-body text-secondary">
                        <center>
                            <form method="post" action="sql/modificar-botellon.php?id=<?php echo $id; ?>">
                                Id<input class="form-control form-control-sm" type="text" name="edit_id" id="edit_id" placeholder="" readonly value="<?php echo $row['id']; ?>" required>
                                Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario" id="edit_usuario" placeholder="" readonly value="<?php echo $row['usuario']; ?>" required>
                                Gerencia<input class="form-control form-control-sm" type="text" name="edit_gerencia" id="edit_gerencia" placeholder="" readonly value="<?php echo $row['gerencia']; ?>" required>
                                Solicitada<input class="form-control form-control-sm" type="text" id="edit_solicitada" name="edit_solicitada" value="<?php echo $row['solicitada']; ?>" required>

                                Hora<input class="form-control form-control-sm" type="text" name="edit_hora" id="edit_hora" placeholder="" readonly value="<?php echo $row['hora']; ?>" required>
                                Fecha<input class="form-control form-control-sm" type="text" name="edit_fecha" id="edit_fecha" placeholder="" readonly value="<?php echo $row['fecha']; ?>" required>
                                Obsevaciones<input class="form-control form-control-sm" type="text" name="edit_observacion" id="edit_observacion" value="<?php echo $row['observacion']; ?>" value="Solicitud">



                    </div>
                </div>
            </div>
            <div class="modal-footer btn btn-dark">
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="MODIFICAR">
                <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
                <button type="button" class="btn-danger" data-bs-dismiss="modal">NO</button>

                </button>
            </div>
        </div>
    </div>
</div>
</form>







</div>

</div>
</div>
</div>


<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>