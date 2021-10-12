<?php
		$servidor = "localhost";
		$usuario = "root";//EL USUSARIO SIEMPRE ES ESTE
		$clave = "";//LA CLAVE SIEMPRE ES ESTA
		$bd = "bd_adsi";//NOMBRE DE LA BASE DE DATOS A CONECTAR 

		$link=mysqli_connect( $servidor, $usuario, $clave, $bd ); // FUNCION PARA HACER LA CONECCIÓN CON LA BASE DE DATOS 
?>