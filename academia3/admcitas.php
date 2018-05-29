<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administración de usuarios</title>
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

<!--   /////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<h2> Administración de citas registradas</h2>    
        <div class="well well-small">
        <hr class="soft"/>
        <h4>Tabla de Citas</h4>
        <div class="row-fluid">

            <?php

                require("connect_db.php");
                $sql=("SELECT * FROM cita");
    
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php") modificar par ala llegada de citas ;
                $query=mysqli_query($mysqli,$sql);

                echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                        echo "<td>idCita</td>";
                        echo "<td>Hora</td>";
                        echo "<td>Fecha</td>";
                        echo "<td>Especialidad</td>";
                        echo "<td>Cedula Paciente</td>";
                        echo "<td>Cedula Medico</td>";
                        echo "<td>IdAgenda</td>";
                        echo "<td>Editar</td>";
                        echo "<td>Borrar</td>";
                    echo "</tr>";

                
            ?>
              
            <?php 
                 while($arreglo=mysqli_fetch_array($query)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo[0]</td>";
                        echo "<td>$arreglo[1]</td>";
                        echo "<td>$arreglo[2]</td>";
                        echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";
                        echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";

                        echo "<td><a href='actualizaradm.php?idaa=$arreglo[4]'><img src='images/actualizar.gif' class='img-rounded'></td>";
                        echo "<td><a href='admcitas.php?ida=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
                        

                        
                    echo "</tr>";
                }

                echo "</table>";

                    extract($_GET);
                    if(@$idborrar==2){
        
                        $sqlborrar="DELETE FROM cita WHERE cita.idcita='$ida'";
                        $resborrar=mysqli_query($mysqli,$sqlborrar);
                        echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                        //header('Location: proyectos.php');
                        echo "<script>location.href='admin.php'</script>";
                    }

            ?>
            
                  
                          
              
        
        
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
