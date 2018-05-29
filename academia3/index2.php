<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}elseif ($_SESSION['rol']==3) {
		header("Location:medico.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Clinica Appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


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

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/mejor.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>La mejor EPS a nivel mundial</h4>
				  <p>
				   Gracias a la federacion mundial de salud han catalogado a la EPS Appoinment la mejor a nivel mundial
				   con la mejor forma de agilidad para los usuarios.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/grado.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nuevas especializaciones en marcha</h4>
				  <p>
				  La eps a realizado el contrato de nuevos medicos con diferentes esecializaciones para mayor 
				  observaciones en los pacientes.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/nuevo.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nuevas sedes medicas en bogota</h4>
				  <p>
				  Nuevas sedes medicas en la ciudad de bogota para mayor agilidad en los pacientes.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Nuestras Opciones</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Historial Medico</h4>
					<a href="Historial_medusu.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Ver citas y Cancelacion</h4>
					<a href="citasmed.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Solicitar citas</h4>
					<a href="solcitasmed.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Hospitales</h4>
					<a href="https://encolombia.com/salud/dir-salud/clinicas/clinicasenbogota/"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Droguerias cerca a su casa</h4>
					<a href="http://www.paginasamarillas.com.co/bogota/servicios/droguerias"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Numeros de ayuda</h4>
					<a href="https://www.emermedica.com.co/contactanos/lineas-de-atencion-medica/"><small>Ver detalles</small></a>
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >Alianzas a nivel mundial</h4>
					<a href="http://hospitals.webometrics.info/es/europe"><small>Ver detalles</small></a>

					
					<h4>Proximas actualizaciones</h4>
					<a href="mie.php"><small>Ver detalles</small></a>


				</div>
			</div>
		
			
			
</div>
<h3>Temas importantes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Estilo de vida saludable</h3>	
	<img src="images/vida.jpg" alt="#"/>
	<div class="caption">
	<h5>La mejor forma de vivir </h5>	
	<p align="justify">
	
Los estilos de vida saludable hacen referencia a un conjunto de comportamientos o actitudes cotidianas que realizan las personas, para mantener su cuerpo y mente de una manera adecuada.
De igual modo, el estilo de vida es la base de la calidad de vida, concepto que la Organización Mundial de la Salud OMS- define como la percepción que un individuo tiene de su lugar en la existencia, en el contexto de la cultura y del sistema de valores en los que vive y en relación con sus objetivos, sus expectativas, sus normas, sus inquietudes.
	</p>
	<a class="pull-right" href="http://www.uniminuto.edu/web/bienestaruvd/vida-saludable/-/asset_publisher/HBJfz6IGSN46/content/calidad-y-habitos-de-vida">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Salud </h3>	
	<img src="images/salud.jpg" />
	<div class="caption">
	<h5> Lo importante de la salud</h5>	
	<p align="justify">
	
Cuidar nuestra salud debe ser una prioridad durante cualquier etapa de nuestra vida. Esto nos ayudará a tener una calidad de vida excelente en todos los niveles y edades. Por ello, hablaremos de la importancia de cuidar la salud.
	</p>
	<a class="pull-right" href="https://www.salud.mapfre.es/cuerpo-y-mente/habitos-saludables/la-importancia-de-cuidar-la-salud/">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Medicina</h3>	
	<img src="images/medicina.jpg"/>
	<div class="caption">
	<h5>Descripción de la medicina</h5>	
	<p align="justify">
	
Es la ciencia dedicada al estudio de la vida, la salud, las enfermedades y la muerte del ser humano, e implica ejercer tal conocimiento técnico para el mantenimiento y recuperación de la salud, aplicándolo al diagnóstico, tratamiento y prevención de las enfermedades. La medicina forma parte de las denominadas ciencias de la salud.

	</p>
	<a class="pull-right" href="https://es.wikipedia.org/wiki/Medicina">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Lo importante son los usuarios</h3>	
		<p>
			son los ususarios que nos dan el apoyo para seguir creciendo con nuestra pagina y ayudar a mas gente que necesite de esta facilidad de requerir todo lo que quiere a su mano.
		
		<br><br></b></b>
		La facilidad esta en su mano y nuestra pagina te guiara.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3>Nuevos usuarios</h3>
		<h5>Mayor facilidad en nuestros servicios</h5>	
		<p>
		La pagina cada vez tiene mayor facilidad paa nuestros usuarios de mayor importancia para resolver sus problemas con mayor facilidad.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Jonathan Mantilla y Juan Escobar<br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>