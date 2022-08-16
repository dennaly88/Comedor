<?php
include ('conexion.php');



 
$id = $_POST['id'];
$tag=$_POST['tag'];
$nombre=$_POST['nombre'];
$siglas=$_POST['siglas'];
$ubicacion=$_POST['ubicacion'];








 
     $query = "UPDATE gerencias SET  tag='$tag', nombre='$nombre',siglas='$siglas',ubicacion='$ubicacion'







                                      WHERE '$id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-administrar.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






