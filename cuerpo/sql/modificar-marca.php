<?php
include ('conexion.php');



 
$id = $_POST['id'];

$nombre=$_POST['nombre'];









 
     $query = "UPDATE marcas SET   nombre='$nombre' 







                                      WHERE '$id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-marcas.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






