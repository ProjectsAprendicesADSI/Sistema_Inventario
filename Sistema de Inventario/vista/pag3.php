<?php
require_once ('../controlador/PersonaCtlr.php');
if(!empty($_SESSION['Perfil'] == $respuesta['ADMINISTRADOR'])){
		    echo "Hola Administrador";
			header("location: ../vista/admin.html");
		}else if ($_SESSION['Perfil'] == $respuesta['JEFE BODEGA']){
			echo "Hola Empleado";
            header("location: ../vista/jefe.html");
		}else if ($_SESSION['Perfil'] == $respuesta['Cliente']){
			echo "Hola Cliente";
		}
?>
<a href="../controlador/PersonaCtlr.php?action=CerrarSession">Cerrar Session</a>