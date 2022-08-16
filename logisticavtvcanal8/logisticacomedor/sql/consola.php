<?php


include ('conexion.php');
$id = $_GET['id'];




$query = "SELECT ip FROM wifi WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      
      
      $row['ip'];
      
      
    
   

 
?>

