

<?php
include ('conexion.php');
$id =$_POST['id_edit'];
$activo =$_POST['activo_edit'];
$ip =$_POST['ip_edit'];
$bn =$_POST['bn_edit'];
$clave_administrador =$_POST['clave_adm_edit'];
$ssid =$_POST['ssid_edit'];
$clave_paso =$_POST['clave_paso_edit'];
$verificado =$_POST['verificado_edit'];
$seria =$_POST['seria_edit'];
$modelo =$_POST['modelo_edit'];
$marca =$_POST['marca_edit'];
$gerencia =$_POST['gerencia_edit'];
$ubicacion =$_POST['ubicacion_edit'];


$query = "UPDATE wifi SET id='$id', activo='$activo', ip='$ip',bn='$bn',clave_administrador='$clave_administrador',ssid='$ssid', clave_paso='$clave_paso',verificado='$verificado' ,
seria='$seria' ,modelo='$modelo',marca='$marca',gerencia='$gerencia',lugar='$ubicacion'







WHERE '$id'=id " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-wifi.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        







 






