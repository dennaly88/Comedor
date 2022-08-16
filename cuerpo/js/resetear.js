function tiempoReal(){
var consulta = $.ajax({
             url:'sql/eliminar-totales-comidas.php',
            dataType:'text',
            async:false
        }).responseText;
    
    console.log(consulta);
    }
    setInterval(tiempoReal,60000);