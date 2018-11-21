<?php 
session_start(); 
include('conexion.php');


$estado=$_POST['estado'];
$nro_habitacion=$_POST['nro_habitacion'];


	//if( isset($_POST['nro_habitacion']) && isset($_POST['estado']) ) {
		$sql = "UPDATE habitaciones SET estado='$estado' WHERE nro_habitacion= '$nro_habitacion'";
		
		$resultado = mysqli_query($con, $sql);

//}


                    ?>
