<?php
include ('conexion.php');



 
$id = $_POST['id'];

$nombre=$_POST['nombre'];









 
     $query = "UPDATE sistemas SET   nombre='$nombre' 







                                      WHERE '$id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-sistemas.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






