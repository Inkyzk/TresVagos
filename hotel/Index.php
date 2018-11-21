<!DOCTYPE HTML> 
<head>
  <meta charset="utf-8">
  <title>Habitaciones</title>
<link rel="stylesheet" type="css" href="style.css" media="screen, all" />
</head>
<body>
<h1 align="center">Administración de habitaciones:</h1>

<table width="50%" class="medio" border="black" align="center">
      <tr>
        <?php 
          session_start();
          include('conexion.php');
          $sql= "SELECT * FROM habitaciones";
          $resultado= mysqli_query($con, $sql);
         ?>
        <td class="hab" data-estado='0' data-nro="HAB1" align="center"><p>Habitación 1</td>
        <td class="hab" data-estado='0' data-nro="HAB2" align="center"><p>Habitación 2</td>
        <td class="hab" data-estado='0' data-nro="HAB3" align="center"><p>Habitación 3</td>
        <td class="hab" data-estado='0' data-nro="HAB4" align="center"><p>Habitación 4</td>
      </tr>
      <tr>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
      </tr>
</table>
    <br>
<table width="50%" border="black" align="center">
      <tr>
        <td class="hab" data-estado='0' data-nro="HAB5" align="center"><p>Habitación 5</td>
        <td class="hab" data-estado='0' data-nro="HAB6"  align="center"><p>Habitación 6</td>
        <td class="hab" data-estado='0' data-nro="HAB7" align="center"><p>Habitación 7</td>
        <td class="hab" data-estado='0' data-nro="HAB8" align="center"><p>Habitación 8</td>
      </tr>
      <tr>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
        <td align="center"><p>Facturación</p></td>
      </tr>
</table>
  
<script src="jquery.min.js"></script>
    <script>
    function change(elemento) {
      var estado = $(elemento).data('estado')
      if(estado == "0"){
        $(elemento).css({'background-color': "#008000"});
      }else{
        $(elemento).css({'background-color': "#B40404"});
      }
    }     
  function actualizar_habitacion(element){
    var that = $(element);
    var nro = $(element).data('nro');   
    var estado = $(element).data('estado');
        if (estado == 1){
        estado = 0;
    }else{
      estado= 1;
    }
    var data = {'nro_habitacion': nro, 'estado': estado};
    console.log(data)
    $.ajax({
      url: "habitacion.php",
      data: data,
      type:'POST',
      //dataType: "json",
    }).done(function() {
      $(that).data('estado', estado)
      change($(that));
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
      
         console.log( "FALLO!!!: " +  textStatus + "\ndetalle: " +errorThrown);
      
    });        
  }   
  $.each($(".hab"), function(index, value){
    change($(value));
    $(value).on('click', function(){
      actualizar_habitacion($(this));
    });
  });
</script>  
</body>
</html>