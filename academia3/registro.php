<?php

	$realname=$_POST['realname'];
	$email=$_POST['nick'];
	$Contraseña= $_POST['contraseña'];
	$rContraseña=$_POST['rContraseña'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$email'");
	$check_email=mysqli_num_rows($checkemail);
		if($Contraseña==$rContraseña){
			if($check_email>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$email','','2','$Contraseña')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>