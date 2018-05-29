<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Editar cita medica </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<?php

include("include/menu.php");

?>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de citas medicas</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de citas</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");
		$ida=$_SESSION['id'];

		$sql="SELECT cita.idcita, cita.hora, cita.fecha, cita.especialidad, cita.cedula_paciente, cita.cedula_medico, cita.idAgenda FROM login, paciente, cita where login.id='$ida' and login.id=paciente.id and paciente.cedula_paciente=cita.cedula_paciente";

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$idcita=$row[0];
		    	$hora=$row[1];                 
		    	$fecha=$row[2];
		    	$especialidad=$row[3];
		    	$cedula_paciente=$row[4];
		    	$cedula_medico=$row[5];
		    	$idAgenda=$row[6];

		    }
                                               echo"Sergio Rojas:Urologo idagenda:1";
				    	                       echo "         ,Cristian Vergara:Odontologo idagenda:2";
				    	                       echo "         ,Juan Henao:Medico General idagenda:3";


		?>

		<form action="ejecutaactualizarcita.php" method="post">
				idcita<br><input type="text" name="idcita" value= "<?php echo $idcita?>" readonly="readonly"><br>
				hora<br> <input type="text" name="hora" value="<?php echo $hora?>"><br>
				fecha<br> <input type="text" name="fecha" value="<?php echo $fecha?>"><br>
				especialidad<br> <input type="text" name="especialidad" value="<?php echo $especialidad?>"><br>
			cedula_pacientess<br> <input type="text" name="cedula_paciente" value="<?php echo $cedula_paciente?>"readonly="readonly"><br>
				cedula_medico<br> <input type="text" name="cedula_medico" value="<?php echo $cedula_medico?>"readonly="readonly"><br>
				idAgenda<br> <input type="text" name="idAgenda" value="<?php echo $idAgenda?>"><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Juan Escobar y Jonathan Mantilla<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
