<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php
           include("conexion.php");
            $id = $_GET['id'];
            $que = "SELECT * FROM harinas WHERE id = '$id'";
            $conet = pg_query($conexion,$que) or die('Query failed: ' . pg_last_error());
            $listas = pg_fetch_array($conet);

            $listas['id'];
            $listas['nombre'];
            $listas['unidad'];
            $listas['cantidad'];
            $listas['usuario'];
            $listas['fecha'];
            $listas['accion'];
            session_start();
            $_SESSION['id'] = $listas['id'];
            $_SESSION['unidad'] = $listas['unidad'];
            $_SESSION['fecha'] = $listas['fecha'];
            $_SESSION['accion'] = $listas['accion'];
        ?>
        <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header btn btn-secondary">
                                    <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" ><span aria-hidden="true">Deseas Editar la Harina</span></button></h5>  
                                </div>
                                <div class="modal-body">
                                    <div class="card border mb-3" style="max-width: 50rem;">
                                        <div class="card-body text-secondary">               
                                            <center>
                                            <form method="post"  action="sql/Aum-harinas.php?id=<?php echo $id;?>">
                                                Id<input class="form-control form-control-sm" type="text" name="aum_id" readonly id="aum_id" readonly placeholder="id"  value="<?php echo $listas['id'] ?>" required >
                                                Nombre<input class="form-control form-control-sm" type="text" name="aum_nombre"  id="aum_nombre" readonly placeholder="usuario" value="<?php echo $listas['nombre'] ?>" required >
                                                Unidad<input class="form-control form-control-sm" type="text" name="unidad" id="unidad" readonly placeholder="unidad" value="<?php echo $listas['unidad'] ?>" required >
                                                Cantidad Actual<input class="form-control form-control-sm" type="text" name="cantidad_actual" readonly  id="cantidad_actual" readonly  placeholder="cantidad Actual" value="<?php echo $listas['cantidad'] ?>" required >
                                                Cantidad Aumentar<input class="form-control form-control-sm" type="text" name="cantidad_aumentar" id="cantidad_aumentar"  placeholder="cantidad Aumentar" value=" " required >
                                                Usuario<input class="form-control form-control-sm" type="text" name="aum_usuario"  id="aum_usuario" readonly placeholder="usuario" value="<?php echo $listas['usuario'] ?>" required >
                                                Fecha<br><input class="form-control form-control-sm" type="text" name="aum_fecha" id="aum_fecha"  readonly placeholder="fecha" value="  <?php echo  date("d-m-Y");?>" required >
                                                Accion<br><input class="form-control form-control-sm" type="text" name="aum_accion" id="aum_accion" readonly placeholder="nombre" value="Aumentar" required >
                                        </div>   
                                    </div>   
                                </div>
                                    <div class="modal-footer btn btn-secondary">
                                        <button  class="btn btn-danger" type= "submit">si</button>
                                        <button type="button btn-sm" class="btn-close btn btn-info btn-sm" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">NO</span></button>
                                    </div>                                            
                                </form>

                            </div> 
                        </div>
                    </div>
                </div>
    </div>



        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/editar-usuario.js"></script>
    </body>
</html>