<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


                               <title>Arepera VTV</title>
             
             
             <body class="">
             
             
             
             
            </head> 

            
         <center>
          <div class="card border-secondary mb-3" style="max-width: 80rem;">
          <div class="card-header card text-white bg-secondary mb-3">
          
          
          
          <center><button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" onclick="location.href='principal-viveres.php'" style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-white">Viveres</span>
                      </button>

          
          
                      
          
          
          
          </div>
          <div class="card-body text-secondary"> 
          <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
          <table id="p" class="table active border-secondary responsive"style="max-width: 80rem";>
          <thead>
         <tr class="bg-secondary text-white">
                  <h4>
                       <td>Id</td><center>
                        <td>Nombre</td>
                        <td>Unidad</td>
                        <td>Cantidad</td>
                        <td>Usuario</td>
                        <td>Fecha de Modificacion</td>
                        <td>Accion</td>
                        <td>Opciones</td >
                 </h4>
      </tr>
  </thead>
<?php
$query = 'SELECT * FROM viveres ';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($mostrar=pg_fetch_array($result)) {
                $id=$mostrar['id'];
                $usu=$mostrar['nombre'];
                $pass=$mostrar['fecha'];
                $per=$mostrar['kg'];
                $per=$mostrar['kg'];
                             
?>  
 
  <tr>
              <center><td><?php echo $mostrar['id'] ?></td><center>
              <center><td><?php echo $mostrar['nombre'] ?></td><center>
              <center><td><?php echo $mostrar['unidad'] ?></td><center>
              <center><td><?php echo $mostrar['cantidad'] ?></td><center>
              <center><td><?php echo $mostrar['usuario'] ?></td><center>
              <center><td><?php echo $mostrar['fecha'] ?></td><center>
              <center><td><?php echo $mostrar['accion'] ?></td><center>
              
              <td>
<!--___________________________BOTON ELIMINAR_________________________________________________________________________-->
        

<a href="principal-eliminar-viveres.php?id=<?php echo $id;?>"> 
 <button type= 'button' class= 'btn btn-danger btn-sm'  title="Eliminar">&#x1f5d1;&#xfe0f;</button>

 
<!--__________________________________________________________________________________________________________________-->
                     <a href="#"  data-target="#myModal" class="edit" data-toggle="modal"
                      "
                     data-usu="<?php echo $usu;?>"
                     data-pass="<?php echo $pass;?>" 
                     data-per="<?php echo $per;?>"
                     data-cor="<?php echo $cor;?>"
                     data-nom="<?php echo $nom;?>"
                     data-ape="<?php echo $ape;?>"
                     data-tel="<?php echo $tel;?>"
                     data-ced="<?php echo $ced;?>" >

<!--_____________________________________BOTON EDITAR_________________________________________________________________-->
                    
                       <a href="principal-editar-viveres.php?id=<?php echo $id;?>"> 
                       <button type= 'button' class= 'btn btn-info btn-sm'  title="Editar"> &#x1f4dd; </button>
       

 


      
        
     
       <a href="principal-aum-viveres.php?id=<?php echo $id;?>"> 
      
      <button type= 'button' class= 'btn btn-success btn-sm'  title="Aumentar"> &#x2795; </button>


      <a href="principal-dim-viveres.php?id=<?php echo $id;?>"> 
       
      <button type= 'button' class= 'btn btn-warning btn-sm'  title="Disminuir"> &#x26d4; </button>
                    
                    
                      



                       
<!--__________________________________________________________________________________________________________________-->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal" >
                      <span aria-hidden="true">Agregar Hortalizas</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
           

         </td><center >
    </tr>

<?php 
    } 
 ?>
 
    <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  mb-3" role="document">
    <div class="modal-content">
<!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


<div class="modal-header btn btn-secondary mb-3">
<button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
<span aria-hidden="true">Agregar Producto</span>
              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/crear-viveres.php">


  


 
              
               
               
                                  <?php     
                                     
                                              $query = 'SELECT * FROM tipo_viveres;';
                                              $resulatdo = pg_query($query) or die ("error ");
                                              $numReg = pg_num_rows($resulatdo);

                                    ?>

        <div class="form-group">

            
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                          <select class="form-control form-control-sm" placeholder name="nombre" required>
                                <option selected>Elige una opci??n</option>
                                              <?php
                                              while ($fila=pg_fetch_array($resulatdo)){
                                                    echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                              }
                                              ?>
                          </select>
          </div>

          <?php     
                                     
                                     $query = 'SELECT * FROM unidad;';
                                     $resulatdo = pg_query($query) or die ("error ");
                                     $numReg = pg_num_rows($resulatdo);

                           ?>

<div class="form-group" id="nombre">

   
               <label for="recipient-name" class="col-form-label">Unidad</label>
                 <select class="form-control form-control-sm" placeholder name="unidad" required>
                       <option selected>Elige una opci??n</option>
                                     <?php
                                     while ($fila=pg_fetch_array($resulatdo)){
                                           echo "<option values".$fila['id'].">".$fila['nombre']."</option>";
                                     }
                                     ?>
                 </select>
 </div>
                              
                              Cantidad<input class="form-control form-control-sm" type="number" name="cantidad" id="cantidad" placeholder=""  value="" required >
                              Usuario<br><input class="form-control form-control-sm" type="text"  readonly name="usuario" id="usuario" placeholder="" value="<?php echo  " " . $_SESSION['usuario']; ?>" required >
                              Fecha<input class="form-control form-control-sm" type="text" name="fecha" id="fecha" placeholder="" value="<?php 


echo  date("d-m-Y");

?>" required >
                              Accion<input class="form-control form-control-sm" type="text" name="accion" id="accion" placeholder="" value="Entrada" required >
                              
                             






 

                              
                              
                              
</div> 
</div>
</div>
<div class="modal-footer btn btn-secondary">
<input class="btn-submit btn btn-primary btn-sm"  type="submit" size="35" value="Agregar">
<input class="btn-reset btn btn-success btn-sm"  type="reset" size="35" value="Limpiar">
<button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">Cerrar</span>
</button>
</div>
</div>         
</div>
</div>
</form>
                                                                                            
</table>




<a href="reporte/viveres.php" title="Stock" target="_blank">  <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" 

style="max-width: 10rem;" >
                      <span aria-hidden="true" class="text-light">&#x1f5a8;&#xfe0f;</span>
                      </button> </a>





</div>
</div>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

</body>
<center>
<script type="text/javascript">
$(document).ready( function () {
    $('#p').DataTable();


} );
</script>

