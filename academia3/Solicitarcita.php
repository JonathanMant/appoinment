<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$horas=$_POST['hora'];
	$fechas=$_POST['fecha'];
	$especialidades=$_POST['especialidad'];
	$reqlen=strlen($horas)*strlen($fechas)*strlen($especialidades);
	if ($reqlen >0 ){

$sentencia="insert into cita (idcita,hora,fecha,especialidad,cedula_paciente,cedula_medico,idAgenda) 
values (null,'$horas','$fechas','$especialidades','$cedula_paciente','$cedula_medico','$idAgenda') ";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: index2.php");
		
		echo "<script>location.href='index2.php'</script>";
	}else {
		echo '<script>alert("Cita agendada")</script> ';
		
		echo "<script>location.href='index2.php'</script>";

		
	}

	}else {

      echo 'no a comlpletado todos los cuadros requeridos ';
	}


?>