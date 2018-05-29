<!DOCTYPE html>

    <?php
    
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:index.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:admin.php");
    }elseif ($_SESSION['rol']==2) {
        header("Location:index2.php");
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
<!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh    -->
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
                    <h4>Agenda citas</h4>
                    <a href="agendacit.php"><small>Ver detalles</small></a>
                </div>
            </div>
            
            <div class="span2">
                <div class="well well-small">
                    <h4>Correo</h4>
                    <a href="https://www.office.com/?omkt=es-ES"><small>Ver detalles</small></a>
                </div>
            </div>
            <div class="span2">
                <div class="well well-small">
                    <h4>Formulas</h4>
                    <a href="Formulas.php"><small>Ver detalles</small></a>
                </div>
            </div>
            <div class="span2">
                <div class="well well-small">
                    <h4>Hospitales</h4>
                    <a href="fp.php"><small>Ver detalles</small></a>
                </div>
            </div>
</div>

<!--select cita.idcita,cita.hora,cita.fecha,cita.especialidad,cita.cedula_paciente,cita.cedula_medico from medico,agenda,cita where cita.idAgenda='1'
and medico.idAgenda=agenda.idAgenda
and agenda.idAgenda=cita.idAgenda -->