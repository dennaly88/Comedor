
<?php
include ('conexion.php');
$id = $_GET['id'];

 
     $query = "DELETE FROM telefonos WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
          header("Location: http:../principal-telefonos.php?usu=3");
          
    
      
?>
 