<?php
    include "sesion.php";
    include "verificarAdministrador.php";
    include_once "conexion.php";

    //RECUPERAMOS LAS VARIABLES 
    $rol=$_POST['rol'];
    $documento=$_POST['Documento'];
    $contrasena=$_POST['Contraseña'];
    $nombre=$_POST['Nombres'];
    $apellido=$_POST['Apellidos'];
    $UniFuncional=$_POST['UniFuncional'];
    $Correo=$_POST['Correo'];


    //HACEMOS LA SENTENCIA DE SQL
    $sql="CALL Registrar_usuario('$rol','$documento','$contrasena','$nombre','$apellido','$UniFuncional', '$Correo','');";
	//EJECUTAMOS LA SENTENCIA SQL
    $result = mysqli_query($link,$sql);//EJECUTA A SENTENCIA DE CONSULTA EN LA BASE DE DATOS Y DEVUELVE UN VECTOR CON LOS DATOS (DATASET)
    $row =mysqli_fetch_array($result);
    // echo $sql;
    if (!$result)
    {
        header('Location: RegistrarUsuario.php?resultado=0'); 
    }
    else{
        if($row[0]=="Error, el número de documento ingresado ya esta resgitrado")
        {
            header('Location: RegistrarUsuario.php?resultado=1'); 
        }
        else if($row[0]=="Usuario registrado exitosamente")
        {
            header('Location: RegistrarUsuario.php?resultado=2'); 
        }
        else
        {
            header('Location: RegistrarUsuario.php?resultado=3'); 
        }
    }
 
?>