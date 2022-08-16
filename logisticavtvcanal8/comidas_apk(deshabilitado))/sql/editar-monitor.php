

<?php
include ('conexion.php');
$id =$_POST['id_edit'];
$bn =$_POST['bn_edit'];
$marca =$_POST['mar_edit'];
$seria =$_POST['ser_edit'];
$ubicacion =$_POST['ubu_edit'];
$estado =$_POST['es_edit'];
$usuario =$_POST['usu_edit'];
$gerencia =$_POST['ger_edit'];


$query = "UPDATE monitores SET id='$id', bn='$bn', marca='$marca',seria='$seria', ubicacion='$ubicacion',estado='$estado' ,usuario='$usuario' ,gerencia='$gerencia'







WHERE '$id'=id " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-monitor.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        







 






