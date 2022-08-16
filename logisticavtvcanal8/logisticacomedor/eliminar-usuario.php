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





<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="bg-dark modal-header text-white">
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="5" value="Deseas Eliminar el Usuario">


            </div>
            <div class="modal-body">
                <form action="sql/eliminar-usuario.php?id=<?php echo $id; ?>" method="post">
                    <div class="modal-body">
                        <div class="card border mb-3" style="max-width: 50rem;">
                            <div class="card-body text-secondary">
                                <center>

                                    <form method="post" action="sql/eliminar-usuario.php">

                                        ID<input type="text" class="form-control form-control-sm" name="id" id="id" value="<?php echo $row['id']; ?>" placeholder="Username">
                                        USUARIO<input type="text" class="form-control form-control-sm" name="username" value="<?php echo $row['usuario']; ?>" placeholder="Username" required="required">
                                        PERFIL<input type="text" class="form-control form-control-sm" name="password" value="<?php echo $row['perfil']; ?>" placeholder="Password" required="required">

                            </div>
                        </div>
                    </div>


            </div>

            <div class="modal-footer btn btn-dark">
                <input class="btn-submit btn btn-primary btn-sm" type="submit" size="30" value="SI">
                <button type="button" class="btn-danger" data-bs-dismiss="modal">NO</button>
            </div>

            </form>


            <script>
                $(document).ready(function() {
                    $('#myModal').modal('toggle')
                });
            </script>