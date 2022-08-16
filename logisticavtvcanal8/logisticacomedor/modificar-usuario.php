<div class="text-center">
    <a href="#myModal" class="trigger-btn" data-toggle="modal"></a>
</div>

<?php
include('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM usuarios WHERE id ='$id'";
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



<table>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="bg-dark modal-header text-white">
                    <input class="btn-submit btn btn-primary btn-sm" type="submit" size="5" value="Modificar el Usuario">

                    <h6 class="modal-title"></h6>

                </div>
                <div class="modal-body">
                    <form action="sql/modificar-usuario.php?id=<?php echo $id; ?>" method="post">


                        <div class="modal-body">
                            <div class="card border mb-3" style="max-width: 50rem;">
                                <div class="card-body text-secondary">
                                    <center>

                                        <form method="post" action="sql/modificar-usuario.php">


                                            Id<input class="form-control form-control-sm" type="text" name="edit_id" id="edit_id" placeholder="" value="<?php echo $row['id']; ?>" required>
                                            Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario" id="edit_usuario" placeholder="" value="<?php echo $row['usuario']; ?>" required>
                                            Contraseña<input class="form-control form-control-sm" type="password" name="edit_pass" id="edit_pass" placeholder="" value="<?php echo $row['pass']; ?>" required>
                                            Perfil<input class="form-control form-control-sm" type="text" name="edit_perfil" id="edit_perfil" placeholder="" value="<?php echo $row['perfil']; ?>" required>
                                            Grencia<input class="form-control form-control-sm" type="text" name="edit_gerencia" id="edit_gerencia" placeholder="" value="<?php echo $row['gerencia']; ?>" required>
                                            Correo<input class="form-control form-control-sm" type="text" name="edit_correo" id="edit_correo" placeholder="" value="<?php echo $row['correo']; ?>" required>
                                            Nombre<br><input class="form-control form-control-sm" type="text" name="edit_nombres" id="edit_nombres" placeholder="" value="<?php echo $row['nombres']; ?>" required>
                                            Apellido<input class="form-control form-control-sm" type="text" name="edit_apellidos" id="edit_apellidos" placeholder="" value="<?php echo $row['apellidos']; ?>" required>
                                            Telefono<br><input class="form-control form-control-sm" type="text" name="edit_telefono" id="edit_telefono" list="tel" value="<?php echo $row['telefono']; ?>">
                                            Cedula<input class="form-control form-control-sm" type="text" name="edit_cedula" id="edit_cedula" placeholder="" value="<?php echo $row['cedula']; ?>" required><br>
                                            Extencion<input class="form-control form-control-sm" type="text" name="edit_extencion" id="edit_extencion" placeholder="" value="<?php echo $row['extencion']; ?>"><br>
                                            Enviado<input class="form-control form-control-sm" type="text" name="edit_enviado" id="edit_enviado" placeholder="" value="<?php echo $row['enviado']; ?>"><br>
                                </div>
                            </div>
                        </div>



                </div>
                <div class="modal-footer btn btn-dark">
                    <input class="btn-submit btn btn-primary btn-sm" type="submit" size="30" value="SI">
                    <button type="button" class="btn-danger" data-bs-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
        </form>
</table>


</div>
</div>



</body>


<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>