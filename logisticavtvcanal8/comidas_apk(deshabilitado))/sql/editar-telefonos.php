

<?php
include ('conexion.php');
$id =$_POST['id_edit'];
$bn =$_POST['bn_edit'];
$marca =$_POST['mar_edit'];
$seria =$_POST['ser_edit'];
$sistema =$_POST['sis_edit'];
$ubicacion =$_POST['ubu_edit'];
$estado =$_POST['es_edit'];
$usuario =$_POST['usu_edit'];
$nombre =$_POST['nom_edit'];
$gerencia =$_POST['ger_edit'];


$query = "UPDATE telefonos SET id='$id', bn='$bn', marcas='$marca',seria='$seria',sistema='$sistema', ubicacion='$ubicacion',estado='$estado' ,usuario='$usuario' ,nombre='$nombre',gerencia='$gerencia'







WHERE '$id'=id " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-telefonos.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        







 






