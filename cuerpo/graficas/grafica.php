

<body style="background-color: silver;">


<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos ;";
$resulatdo = pg_query($query) or die ("error ");
$C = pg_num_rows($resulatdo);

if($C>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
       
    }
    ?>

    

    <?php
  }
?> 
<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Construccion';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC='Almacen Contruccion';

if($CC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Sotano';";
$resulatdo = pg_query($query) or die ("error ");
$CS = pg_num_rows($resulatdo);
$PC=($CS/$C)*100;
$NAS='Almacen Sotano';

if($CS>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Moto';";
$resulatdo = pg_query($query) or die ("error ");
$CM = pg_num_rows($resulatdo);
$PM=($CM/$C)*100;
$NAM='Almacen Moto';

if($CM>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
    }
    ?>
    

    <?php
  }
?> 


<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Transporte';";
$resulatdo = pg_query($query) or die ("error ");
$CT = pg_num_rows($resulatdo);
$PT=($CT/$C)*100;

$NAT='Almacen Transporte';

if($CT>0){



  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
    }
    ?>
   

    <?php
  }
?> 



<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Electricidad';";
$resulatdo = pg_query($query) or die ("error ");
$CE = pg_num_rows($resulatdo);
$PE=($CE/$C)*100;
$NAE='Almacen Electricidad';

if($CE>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('./0.conexion.php');

$query = "SELECT * FROM productos where almacen='Almacen Central';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$NACC='Almacen Central';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
    }
    ?>
    

    <?php
  }
?> 



<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>REPORTE</title>

		<style type="text/css">

		</style>
	</head>
	<body style="background-color: silver;">

<script src="graficas/code/highcharts.js"></script>
<script src="graficas/code/highcharts-3d.js"></script>
<script src="graficas/code/modules/exporting.js"></script>
<script src="graficas/code/modules/export-data.js"></script>

<div id="container" style="height: 700px"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: '<h1>ALMACENES DE SERVICIO GENERAL<?php echo " Productos  $C<br><br>";?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'ALMACENES',
        data: [

            
            [ '<?php echo " $NAC $CC ";?>',<?php echo " $CC ";?>],
            ['<?php echo " $NAS  $CS ";?>', <?php echo " $CS ";?>],
            ['<?php echo " $NAM  $CM";?>',<?php echo " $CM ";?>],
            ['<?php echo " $NAT $CT";?>',<?php echo " $CT ";?> ],
            ['<?php echo " $NAE  $CE";?>',<?php echo " $CE ";?> ],
            ['<?php echo " $NACC  $CACC";?>',<?php echo " $CACC ";?> ]

 

        ]
    }]
});
		</script>
	</body>
</html>
