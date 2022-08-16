    <!DOCTYPE html>
    <html lang="es">
            <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link rel="stylesheet" href="css/bootstrap.min.css">
            </head>
            <body>
                <?php
                    include("conexion.php");
                    $id = $_GET['id'];
                    $queryhp3 = "SELECT * FROM harinas WHERE id = '$id'";
                    $conex = pg_query($conexion,$queryhp3) or die('Query failed: ' .pg_last_error());
                    $lista = pg_fetch_array($conex);
                    $lista['id'];
                    $lista['nombre'];
                    $lista['fecha'];
                    $lista['unidad'];
                    $lista['usuario'];
                    $lista['cantidad'];
                ?>

                <div class="modal fade" id="danny8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header btn btn-secondary">
                                    <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" ><span aria-hidden="true">Deseas Editar la Harina</span></button></h5>  
                                </div>
                                <div class="modal-body">
                                    <div class="card border mb-3" style="max-width: 50rem;">
                                        <div class="card-body text-secondary">               
                                            <center>
                                            <form method="post"  action="sql/Editar-harinas.php?id=<?php echo $id;?>">
                                                Id<input class="form-control form-control-sm" type="text" name="eli_id" readonly id="eli_id" readonly placeholder="id"  value="<?php echo $lista['id'] ?>" required >
                                                Nombre<input class="form-control form-control-sm" type="text" name="eli_nombre" id="eli_nombre" readonly placeholder="usuario" value="<?php echo $lista['nombre'] ?>" required >
                                                Unidad<input class="form-control form-control-sm" type="text" name="eli_unidad" id="eli_unidad" readonly placeholder="unidad" value="<?php echo $lista['unidad'] ?>" required >
                                                Cantidad<input class="form-control form-control-sm" type="text" name="eli_cantidad" id="eli_cantidad"  placeholder="cantidad" value="<?php echo $lista['cantidad'] ?>" required >
                                                Usuario<input class="form-control form-control-sm" type="text" name="eli_usuario"  id="eli_usuario" readonly placeholder="usuario" value="<?php echo $lista['usuario'] ?>" required >
                                                Fecha<br><input class="form-control form-control-sm" type="text" name="eli_fecha" id="eli_fecha"  readonly placeholder="fecha" value="  <?php echo  date("d-m-Y");?>" required >
                                                Accion<br><input class="form-control form-control-sm" type="text" name="eli_accion" id="eli_accion" readonly placeholder="nombre" value="Edidar" required >
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
                <script src="js/bootstrap.min.js" ></script>
                <script src="js/eliminar-usuario.js"></script>
            </body>
    </html>